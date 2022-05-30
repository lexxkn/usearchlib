<?php

namespace Legeartis\UnifiedSearch\exceptions;

use Exception;

class USException extends Exception
{
    public function __construct(array $error)
    {
        parent::__construct($error['message'], $error['code']);
    }
}