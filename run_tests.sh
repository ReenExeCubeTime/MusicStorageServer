#!/bin/bash
php bin/console doctrine:schema:update
php bin/console doctrine:schema:validate
php vendor/bin/simple-phpunit