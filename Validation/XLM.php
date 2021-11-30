<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

class XLM
{
    public function validate($address)
    {
        $valid = false;

        if(($address[0] === "G" || $address[0] === "g") && strlen($address) == 56) {
            $valid = true;
        }

        return $valid;
    }
}
