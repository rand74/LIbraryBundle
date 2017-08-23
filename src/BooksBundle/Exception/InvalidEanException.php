<?php

/**
 * Created by PhpStorm.
 * User: david
 * Date: 23/08/17
 * Time: 10:25
 */
declare(strict_types = 1);

namespace BooksBundle\Exception;

use Throwable;

class InvalidEanException extends \Exception
{
    public function __construct($message = "The ean is not valid", $code = 400, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}