<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

use Merkeleon\PhpCryptocurrencyAddressValidation\Base58Validation;
use Merkeleon\PhpCryptocurrencyAddressValidation\Utils\Bech32Decoder;
use Merkeleon\PhpCryptocurrencyAddressValidation\Utils\Bech32Exception;

class BTG extends Base58Validation
{
    // more info at http://lenschulwitz.com/base58 (decode address with selected prefix and select first hex value)
    protected $base58PrefixToHexVersion = [
        'G' => '26',
        'd' => '17'
    ];

    public function validate($address)
    {
        $address = (string)$address;
        $valid = parent::validate($address);
        return $valid;
    }
}
