<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

use Merkeleon\PhpCryptocurrencyAddressValidation\Base58Validation;

class ZEC extends Base58Validation
{
    // more info at http://lenschulwitz.com/base58
    protected $base58PrefixToHexVersion = [
        't' => '1C',
        'z' => '16'
    ];

    protected $lengths = [
        't' => 52,
        'z' => 140
    ];
}
