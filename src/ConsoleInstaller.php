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
        InstallUtils::getOrCreateInstance('console', 'Mouf\\Console\\ConsoleApplication', $moufManager);

        // Let's rewrite the MoufComponents.php file to save the component
        $moufManager->rewriteMouf();
    }
}
