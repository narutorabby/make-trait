# make-trait
This will create traits in Laravel

## Installation

### Laravel
Require this package in your composer.json and update composer. This will download the package and the dompdf + fontlib libraries also.

    composer require narutorabby/make-trait

## Installation

### Register the Service Provider
Add the following line at the bottom of the providers array in config/app.php

    Narutorabby\MakeTrait\MakeTraitServiceProvider::class,

## Usage
Finally run the following command to create a trait

    php artisan make:trait ExampleTrait