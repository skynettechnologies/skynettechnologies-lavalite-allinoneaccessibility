# Installation

The instructions below will help you to properly install and run the generated package to the lavalite project.

## Location

Extract the package contents to the folder 

`/packages/skynettechnologies/lavalite-allinoneaccessibility/`

## Composer

Add the below entries in the `composer.json`.


```
...
     "repositories": {
        ...

        {
            "type": "path",
            "url": "packages/skynettechnologies/lavalite-allinoneaccessibility"
        }

        ...
    },
...

```
Then run `composer require skynettechnologies/lavalite-allinoneaccessibility`


## Migration and seeds

```
    php artisan migrate
    php artisan db:seed --class=Skynettechnologies\\Allinoneaccessibility\\Seeders\\AllinoneaccessibilityTableSeeder
```

## Publishing

* Configuration
```
    php artisan vendor:publish --provider="Skynettechnologies\Allinoneaccessibility\Providers\AllinoneaccessibilityServiceProvider" --tag="config"
```
* Language
```
    php artisan vendor:publish --provider="Skynettechnologies\Allinoneaccessibility\Providers\AllinoneaccessibilityServiceProvider" --tag="lang"
```
* Views
```
    php artisan vendor:publish --provider="Skynettechnologies\Allinoneaccessibility\Providers\AllinoneaccessibilityServiceProvider" --tag="view"
```
