# UserBundle

[![Build Status](https://travis-ci.org/rybakdigital/user-bundle.svg?branch=master)](https://travis-ci.org/rybakdigital/user-bundle)
[![CircleCI](https://circleci.com/gh/rybakdigital/user-bundle/tree/master.svg?style=svg)](https://circleci.com/gh/rybakdigital/user-bundle/tree/master)

## Usage
Add as a requirement via composer:
```
"require": {
    ...
    "rybakdigital/user-bundle": "dev-master",
}
```

Enable bundle in your AppKernel
```
# app/AppKernel.php
    $bundles = [
        ...
        new RybakDigital\Bundle\UserBundle\RybakDigitalUserBundle(),
    ]
``

Add migrations to your config file:
```
# app/config/config.yml
    imports:
    ...
    - { resource: "@RybakDigitalUserBundle/Resources/config/doctrine-migrations.yml" }
```
