<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

use Merkeleon\PhpCryptocurrencyAddressValidation\Base58Validation;
use Merkeleon\PhpCryptocurrencyAddressValidation\Utils\Bech32Decoder;
use Merkeleon\PhpCryptocurrencyAddressValidation\Utils\Bech32Exception;

class LTCT extends Base58Validation
{
    // more info at https://bitcoin.stackexchange.com/a/80355 https://bitcoin.stackexchange.com/questions/62781/litecoin-constants-and-prefixes?noredirect=1
    //get prefixes here: http://lenschulwitz.com/base58
    protected $base58PrefixToHexVersion = [
        'm' => '6f',
        'n' => '6f',
        'Q' => '3a',
        '2' => 'c4'
    ];

    public function validate($address)
    {
        $address = (string)$address;
        $valid = parent::validate($address);

        return $valid;
    }
}
