<?php

/*
 * This file is part of PhpSpec, A php toolset to drive emergent
 * design by specification.
 *
 * (c) Marcello Duarte <marcello.duarte@gmail.com>
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpSpec\Exception\Example;

/**
 * Class ErrorException holds information about generic php errors
 */
class ErrorException extends ExampleException
{
    private array $levels = [
        E_WARNING           => 'warning',
        E_NOTICE            => 'notice',
        E_USER_ERROR        => 'error',
        E_USER_WARNING      => 'warning',
        E_USER_NOTICE       => 'notice',
        E_RECOVERABLE_ERROR => 'error',
    ];

    /**
     * Initializes error handler exception.
     */
    public function __construct(int $level, string $message, string $file, int $line)
    {
        parent::__construct(sprintf(
            '%s: %s in %s line %d',
            $this->levels[$level] ?? $level,
            $message,
            $file,
            $line
        ));
    }
}
