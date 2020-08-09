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
    public function calculateExchangeRate($currency_origin, $currency_destiny, $amount)
    {
        if ($currency_origin === self::VENEZUELAN_BOLIVAR && $currency_destiny === self::EURO) {
            return [
                'amount' =>  $amount / 7.75,
                'currency' => $currency_destiny
            ];
        }

        return null;
    }
}