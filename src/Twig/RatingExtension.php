<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class RatingExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('rating_extension', [$this, 'numberFormat'], ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('rating_extension', [$this, 'calculateExchangeRate']),
        ];
    }

    public function numberFormat($value)
    {
        return round($value, 1);
    }
}
