<?php

declare(strict_types=1);

namespace League\Config;

use League\Config\Exception\UnknownOptionException;
use League\Config\Exception\ValidationException;

/**
 * Interface for reading configuration values
 */
interface ConfigurationInterface
{
    /**
     * @param string $key Configuration option path/key
     *
     * @psalm-param non-empty-string $key
     *
     * @return mixed
     *
     * @throws ValidationException if the schema failed to validate the given input
     */
    public function exists(string $key): bool;

}