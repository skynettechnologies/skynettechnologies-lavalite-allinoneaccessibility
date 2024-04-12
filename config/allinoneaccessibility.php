<?php


return
    [
        'model' => [
            'model' => \Skynettechnologies\Allinoneaccessibility\Models\Allinoneaccessibility::class,
            'table' => 'Skynettechnologies_allinoneaccessibility_allinoneaccessibility',
            'hidden'=> [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'created_at', 'updated_at'],
            'appends' => [],
            'fillable' => ['name',  'phone',  'mobile',  'email',  'default',  'website',  'details',  'address',  'street',  'city',  'state',  'country',  'zip',  'lat',  'lng',  'status',  'user_id',  'user_type'],
            'translatables' => [],
            'upload_folder' => 'allinoneaccessibility/allinoneaccessibility',
            'uploads' => [
                /*
                        'images' => [
                            'count' => 10,
                            'type'  => 'image',
                        ],
                        'file' => [
                            'count' => 1,
                            'type'  => 'file',
                        ],
                */
            ],

            'casts' => [

                /*
                    'images'    => 'array',
                    'file'      => 'array',
                */
            ],

            'revision' => [],
            'perPage' => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'search' => [

        ],

        'list' => [
            [
                "key" => "name",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.name',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "phone",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.phone',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "mobile",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.mobile',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "email",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.email',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "default",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.default',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "website",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.website',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "details",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.details',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "address",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.address',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "street",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.street',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "city",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.city',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "state",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.state',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "country",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.country',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "zip",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.zip',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "lat",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.lat',
                'sort' => true,
                'roles' => [],
            ],
            [
                "key" => "lng",
                "type" => "text",
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.lng',
                'sort' => true,
                'roles' => [],
            ],
        ],

        'form' => [
            [
                "key" => 'name',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.name',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.name',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "12",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'phone',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.phone',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.phone',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "4",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'mobile',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.mobile',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.mobile',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "4",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'email',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.email',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.email',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "4",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'default',
                "element" => 'switch',
                "type" => 'switch',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.default',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.default',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "4",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'website',
                "element" => 'url',
                "type" => 'url',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.website',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.website',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "8",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'details',
                "element" => 'textarea',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.details',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.details',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'address',
                "element" => 'textarea',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.address',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.address',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'street',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.street',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.street',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'city',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.city',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.city',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'state',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.state',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.state',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "4",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'country',
                "element" => 'select',
                "type" => 'select',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.country',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.country',
                "rules" => '',
                "options" => function(){
                    return trans('allinoneaccessibility::allinoneaccessibility.options.country');
                },
                "group" => "main.main",
                "section" => "first",
                "col" => "4",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'zip',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.zip',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.zip',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "4",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'lat',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.lat',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.lat',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            [
                "key" => 'lng',
                "element" => 'text',
                "type" => 'text',
                "label" => 'allinoneaccessibility::allinoneaccessibility.label.lng',
                "placeholder" => 'allinoneaccessibility::allinoneaccessibility.placeholder.lng',
                "rules" => '',
                "group" => "main.main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
        ],

        'urls' => [
            'new' => [
                'url' => 'allinoneaccessibility/allinoneaccessibility/new',
                'method' => 'GET',
            ],
            'create' => [
                'url' => 'allinoneaccessibility/allinoneaccessibility/create',
                'method' => 'GET',
            ],
            'store' => [
                'url' => 'allinoneaccessibility/allinoneaccessibility',
                'method' => 'POST',
            ],
            'update' => [
                'url' => 'allinoneaccessibility/allinoneaccessibility',
                'method' => 'PUT',
            ],
            'list' => [
                'url' => 'allinoneaccessibility/allinoneaccessibility',
                'method' => 'GET',
            ],
            'delete' => [
                'url' => 'allinoneaccessibility/allinoneaccessibility',
                'method' => 'DELETE',
            ],
        ],
        'order' => [
            'created_at' => 'allinoneaccessibility::allinoneaccessibility.label.created_at',
            'name' => 'allinoneaccessibility::allinoneaccessibility.label.name',
            'status' => 'allinoneaccessibility::allinoneaccessibility.label.status',
        ],
        'groups' => [
            [
                'icon' => "mdi:account-supervisor-outline",
                'name' => "block::category.groups.main",
                'group' => "main.main",
                'title' => "block::category.groups.main",
            ],
            [
                'icon' => "fe:home",
                'name' => "block::category.groups.details",
                'group' => "main.documents",
                'title' => "block::category.groups.details",
            ],
            [
                'icon' => "fe:home",
                'name' => "block::category.groups.images",
                'group' => "main.documents",
                'title' => "block::category.groups.images",
            ],
            [
                'icon' => "fe:home",
                'name' => "block::category.groups.settings",
                'group' => "main.documents",
                'title' => "block::category.groups.settings",
            ]
        ],
        'controller' => [
            'provider' => 'Skynettechnologies',
            'package' => 'Allinoneaccessibility',
            'module' => 'Allinoneaccessibility',
        ],



    ];
