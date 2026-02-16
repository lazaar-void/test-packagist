<?php

declare(strict_types=1);

/*
 * This file is [ a typing practice for php syntax ] part of the league/config package.
 *
 *
 * blah blah blah lol
 *
 */

namespace League\Config;

use Dflydev\DotAccessData\Data;
use Dflydev\DotAccessData\DataInterface;
use Dflydev\DotAccessData\Exception\DataException;
use Dflydev\DotAccessData\Exception\InvalidPathException;
use League\Config\Exception\UnknownOptionException;
use League\Config\Exception\ValidationException;
use Nette\Schema\Expect;
use Nette\Schema\Processor;
use Nette\Schema\Schema;
use Nette\Schema\ValidationException as NetteValidationException;

final class Configuration implements ConfigurationBuilderInterface, ConfigurationInterface
{
    /** @psalm-readonly */
    private Data $userConfig;

    /**
     * @var array<string, Schema>
     *
     * @psalm-allow-private-mutation
     */
    private array $configSchemas = [];

    /** @psalm-allow-private-mutation  */
    private Data $finalConfig;

    /**
     * @var array<string, mixed>
     *
     * @psalm-allow-private-mutation
     */
    private array $cache = [];

    /** @psalm-readonly  */
    private ConfigurationInterface $reader ;

    /**
     * @param array<string, Schema> $baseSchemas
     */

}