Doctrine Repository
===================

[![Latest Stable Version](https://poser.pugx.org/eso/doctrine-repository/v/stable.png)](https://packagist.org/packages/eso/doctrine-repository)
[![Build Status](https://travis-ci.org/entering/doctrine-repository.png?branch=master)](https://travis-ci.org/entering/doctrine-repository)
[![Coverage Status](https://coveralls.io/repos/github/entering/doctrine-repository/badge.svg?branch=master)](https://coveralls.io/github/entering/doctrine-repository?branch=master)

An alternative doctrine entity base repository

## Requirements ##

* PHP >= 5.4
* Doctrine ORM >= 2.4

## Installation ##

The recommended way to install is through composer.

Just create a `composer.json` file for your project:

```json
{
    "require": {
        "eso/doctrine-repository": "@stable"
    }
}
```

**Tip:** browse [`eso/doctrine-repository`](https://packagist.org/packages/eso/doctrine-repository) page to choose a stable version to use, avoid the `@stable` meta constraint.

And run these two commands to install it:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ composer install
```

Now you can add the autoloader, and you will have access to the library:

```php
<?php

require 'vendor/autoload.php';
```

## Usage ##

## Contributing ##

[All contributors](https://github.com/entering/doctrine-repository/contributors)

See CONTRIBUTING file.

## License ##

Doctrine Repository library is released under the MIT License. See the bundled LICENSE file for details.

