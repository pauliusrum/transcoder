<?php

namespace Ddeboer\Transcoder\Exception;

class IllegalCharacterException extends \RuntimeException
{
    public function __construct($warning)
    {
        parent::__construct(
            sprintf(
                'String contains an illegal character: %s',
                $warning
            )
        );
    }
}
