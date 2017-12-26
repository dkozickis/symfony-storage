<?php

/*
 * This file is part of the PHP Translation package.
 *
 * (c) PHP Translation team <tobias.nyholm@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Translation\SymfonyStorage;

use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\Reader\TranslationReader;

/**
 * This loader is just a legacy wrapper for Symfony TranslationReader
 * and provide a BC layer for Symfony 4.
 *
 * @author Victor Bocharsky <bocharsky.bw@gmail.com>
 */
class LegacyTranslationLoader implements TranslationLoader
{
    /**
     * @var TranslationReader
     */
    private $reader;

    public function __construct(TranslationReader $reader)
    {
        $this->reader = $reader;
    }

    public function loadMessages($directory, MessageCatalogue $catalogue)
    {
        $this->reader->read($directory, $catalogue);
    }
}
