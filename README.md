[![Latest Stable Version](https://poser.pugx.org/mouf/nodejs-installer/v/stable.svg)](https://packagist.org/packages/mouf/nodejs-installer)
[![Latest Unstable Version](https://poser.pugx.org/mouf/nodejs-installer/v/unstable.svg)](https://packagist.org/packages/mouf/nodejs-installer)
[![License](https://poser.pugx.org/mouf/nodejs-installer/license.svg)](https://packagist.org/packages/mouf/nodejs-installer)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/thecodingmachine/nodejs-installer/badges/quality-score.png?b=1.0)](https://scrutinizer-ci.com/g/thecodingmachine/nodejs-installer/?branch=1.0)

Console for Mouf PHP framework
==============================

This is a simple [Symfony 2 based console](http://symfony.com/doc/current/components/console/introduction.html) for the [Mouf PHP framework](http://mouf-php.com).

Why?
----

Mouf is a graphical framework, so most of the development is done in the UI.
However, it can sometimes be useful to have a command line interface, to use in
deploy scripts or on remote servers... This package provides this command-line.

How does it work?
-----------------

Simply include this package in your `composer.json` requirements:

```json
{
    "require": {
        "mouf/utils.console": "~1.0"
    }
}
```

The command line will be accessible from `vendor/bin/mouf_console.php`

Package developers
------------------

Most of what you need to know is detailed in [Symfony's doc](http://symfony.com/doc/current/components/console/introduction.html).

In order to create a new command, you should:

- create an install script for your package
- create an instance of the command in this installation script
- register this command using `ConsoleUtils::registerCommand($command)`
