<?php

namespace Legeartis\UnifiedSearch\exceptions;

use Exception;

class USException extends Exception
{
    public function __construct(array $error)
    {
        if (array_key_exists('ErrorResponse', $error)) {
            parent::__construct($error['ErrorResponse']['message'], $error['ErrorResponse']['code']);
        } else {
            parent::__construct($error['message'], $error['code']);
        }
    }
}