## DO NOT USE FOR NEW APPLICATIONS!

Linio Common Legacy
====================

Linio Common Legacy contains small components that either extend PHP's functionality or provide
a coherent base for Linio components:

* Base test cases
* Exceptions

It is designed to allow applications to continue to make use of legacy classes while still using
the latest version of linio/common.

Install
-------

The recommended way to install Linio Common Legacy is [through composer](http://getcomposer.org).

```
$ composer require linio/common-legacy
```

Tests
-----

To run the test suite, you need install the dependencies via composer, then
run PHPUnit.

```
$ composer install
$ vendor/bin/phpunit
```
