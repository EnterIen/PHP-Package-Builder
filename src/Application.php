<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Valcano\Builder;

use Valcano\Builder\Commands\PackageBuilderCommand;

use Symfony\Component\Console\Application as BasicApplication;

/**
 * Class Application.
 *
 */
class Application extends BasicApplication
{
    /**
     * Application constructor.
     *
     * @param string $name
     * @param string $version
     */
    public function __construct($name, $version, $configs)
    {
        parent::__construct($name, $version);

        $this->add(new PackageBuilderCommand($configs));
    }
}
