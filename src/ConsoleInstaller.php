<?php
/*
 * Copyright (c) 2013-2015 David Negrier
 *
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Console;

use Mouf\Actions\InstallUtils;
use Mouf\Installer\PackageInstallerInterface;
use Mouf\MoufManager;

class ConsoleInstaller implements PackageInstallerInterface {
    /**
     * (non-PHPdoc)
     * @see \Mouf\Installer\PackageInstallerInterface::install()
     * @param MoufManager $moufManager
     * @throws \Mouf\MoufException
     */
    public static function install(MoufManager $moufManager) {
        // Let's create the instances.
        $console = InstallUtils::getOrCreateInstance('console', 'Mouf\\Console\\ConsoleApplication', $moufManager);
        $helperSet = InstallUtils::getOrCreateInstance('helperSet', 'Mouf\\Console\\HelperSet', $moufManager);

        // Let's bind instances together.
        if (!$console->getSetterProperty('setHelperSet')->isValueSet()) {
            $console->getSetterProperty('setHelperSet')->setValue($helperSet);
        }

        // Let's rewrite the MoufComponents.php file to save the component
        $moufManager->rewriteMouf();
    }
}
