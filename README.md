# Hypno (Delay execution package for PHP)
![Image of Hypno](./assets/hypno.gif)

##About
Hypno is a wrapper of [PHP delay execution commands](https://www.php.net/manual/en/function.sleep.php) package. 

This package created to write less complex unit test when delaying methods used in the application logic.

## Installation

```bash
$ composer require candasm/hypno
```

## Basic Usage
Package covers sleep, usleep, time_nanosleep and time_sleep_until functions. Camelcased methods can be seen on [Hypnotize](./src/Hypnotize.php) interface.

```php
<?php

use Candasm\Hypno;

$hypno = new Hypno\Hypnosis();
$hypno->sleep(5);
```

## Unit Testing

When you use your DI just inject [Hypnotize](src/Hypnotize.php) interface then you can do this easily with [Mockery](https://github.com/mockery/mockery) or any other mock library.

```php
<?php

use Candasm\Hypno;

$hypno = \Mockery::mock(Hypno\Hypnotize::class, function(\Mockery\MockInterface $m) {
    $m->shouldReceive('sleep')->with(1)->returnNull();
});

```

## Documentation

You can check [Hypnosis](src/Hypnosis.php) class to see how methods are working.

### Requirements

PHP 5.6+ 