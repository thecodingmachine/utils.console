<?php
/*
 * This file is part of the Mouf core package.
 *
 * (c) 2012-2015 David Negrier <david@mouf-php.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Mouf\Console;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;

/**
 * This class is a simple Symfony based console application
 * extended to match Mouf convention about setters.
 *
 */
class ConsoleApplication extends Application {

	/**
	 * Simple alias to 'addCommands' so that we can use the Mouf UI.
	 * @param Command[] $commands
	 */
	public function setCommands(array $commands) {
		$this->addCommands($commands);
	}
}
