<?php

namespace Merkeleon\PhpCryptocurrencyAddressValidation\Validation;

class PAYEER
{
    public function validate($address)
    {
        $valid = false;

        if(preg_match('/^[Pp][0-9]{7,15}|.+@.+\..+$/', $address)) {
            $valid = true;
        }

        return $valid;
    }
}
