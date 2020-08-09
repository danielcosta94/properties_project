<?php

namespace App\Twig;

use App\Service\CurrencyService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class ConversionRateExtension extends AbstractExtension
{
    /**
     * @var CurrencyService
     */
    private $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    public function getFilters()
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('convertion_rate', [$this, 'calculateExchangeRate'], ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('convertion_rate', [$this, 'calculateExchangeRate']),
        ];
    }

    /**
     * @param $amount
     * @param string $currency_origin
     * @param string $currency_destiny
     * @return array|null
     */
    public function calculateExchangeRate($amount, $currency_origin, $currency_destiny)
    {
        $currency_result = $this->currencyService->calculateExchangeRate($currency_origin, $currency_destiny, (float) $amount);

        if (isset($currency_result["amount"])) {
            $currency_result["amount"] = round($currency_result["amount"], 2);
            return $currency_result;
        }
        return null;
    }
}
