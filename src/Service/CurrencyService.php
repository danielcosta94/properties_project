<?php

namespace App\Service;

class CurrencyService
{
    const VENEZUELAN_BOLIVAR = 'VEF';
    const EURO = 'EUR';

    /**
     * @param string $currency_origin
     * @param string $currency_destiny
     * @param float $amount
     * @return array|null
     */
    public function calculateExchangeRate(string $currency_origin, string $currency_destiny, float $amount)
    {
        if ($currency_origin === self::VENEZUELAN_BOLIVAR && $currency_destiny === self::EURO) {
            return [
                'amount' =>  round($amount / 7.75, 2),
                'currency' => $currency_destiny
            ];
        }

        return null;
    }
}