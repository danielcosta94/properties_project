<?php

namespace App\Tests;

use App\Service\CurrencyService;
use PHPUnit\Framework\TestCase;

class CurrencyServiceTest extends TestCase
{

    /**
     * @var CurrencyService
     */
    private $currencyService;

    protected function setUp()
    {
        parent::setUp();
        $this->currencyService = new CurrencyService();
    }

    public function testCalculateExchangeRateWithPositiveAmountValid()
    {
        $currency_result_actual = $this->currencyService->calculateExchangeRate(CurrencyService::VENEZUELAN_BOLIVAR, CurrencyService::EURO, 10);
        $currency_result_expected = [
            'amount' =>  1.29,
            'currency' => CurrencyService::EURO
        ];

        $this->assertEquals($currency_result_expected, $currency_result_actual);
    }

    public function testCalculateExchangeRateWithNegativeAmountValid()
    {
        $currency_result_actual = $this->currencyService->calculateExchangeRate(CurrencyService::VENEZUELAN_BOLIVAR, CurrencyService::EURO, -10);
        $currency_result_expected = [
            'amount' =>  -1.29,
            'currency' => CurrencyService::EURO
        ];

        $this->assertEquals($currency_result_expected, $currency_result_actual);
    }

    public function testCalculateExchangeRateWithZeroAmountValid()
    {
        $currency_result_actual = $this->currencyService->calculateExchangeRate(CurrencyService::VENEZUELAN_BOLIVAR, CurrencyService::EURO, 0);
        $currency_result_expected = [
            'amount' =>  0,
            'currency' => CurrencyService::EURO
        ];

        $this->assertEquals($currency_result_expected, $currency_result_actual);
    }

    public function testCalculateExchangeRateInvalidWithNonExistingExchangeRates()
    {
        $currency_result_actual = $this->currencyService->calculateExchangeRate(CurrencyService::EURO, CurrencyService::VENEZUELAN_BOLIVAR, 10);
        $currency_result_expected = null;

        $this->assertEquals($currency_result_expected, $currency_result_actual);
    }
}
