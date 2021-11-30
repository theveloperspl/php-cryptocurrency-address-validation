<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

class PM
{
    public function validate($address)
    {
        $valid = false;

        if(preg_match('/^[Uu][0-9]{7,15}|.+@.+\..+$/', $address)) {
            $valid = true;
        }

        return $valid;
    }
}
