# Installation

The instructions below will help you to properly install and run the generated package to the lavalite project.

## Location

Extract the package contents to the folder 

`/packages/skynettechnologies/allinoneaccessibility/`

## Composer

Add the below entries in the `composer.json`.


```json

...
     "repositories": {
        ...

        {
            "type": "path",
            "url": "packages/skynettechnologies/allinoneaccessibility"
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

## URLs and APIs

### Web Urls

* Admin
```
    http://path-to-route-folder/admin/allinoneaccessibility/{modulename}
```

* User
```
    http://path-to-route-folder/user/allinoneaccessibility/{modulename}
```

* Public
```
    http://path-to-route-folder/allinoneaccessibilitys
```


### API endpoints

These endpoints can be used with or without `/api/`
And also the user can be varied depend on the type of users, eg user, client, admin etc.

#### Resource

* List
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}
    METHOD: GET
```

* Create
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}
    METHOD: POST
```

* Edit
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}/{id}
    METHOD: PUT
```

* Delete
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}/{id}
    METHOD: DELETE
```

#### Public

* List
```
    http://path-to-route-folder/api/allinoneaccessibility/{modulename}
    METHOD: GET
```

* Single Item
```
    http://path-to-route-folder/api/allinoneaccessibility/{modulename}/{slug}
    METHOD: GET
```

#### Others

* Report
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}/report/{report}
    METHOD: GET
```

* Export/Import
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}/exim/{exim}
    METHOD: POST
```

* Action
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}/action/{id}/{action}
    METHOD: PATCH
```

* Actions
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}/actions/{action}
    METHOD: PATCH
```

* Workflow
```
    http://path-to-route-folder/api/user/allinoneaccessibility/{modulename}/workflow/{id}/{transition}
    METHOD: PATCH
```
