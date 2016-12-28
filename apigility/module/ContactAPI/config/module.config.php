<?php
return [
    'router' => [
        'routes' => [
            'contact-api.rest.contacts' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/contacts[/:contacts_id]',
                    'defaults' => [
                        'controller' => 'ContactAPI\\V1\\Rest\\Contacts\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'contact-api.rest.contacts',
        ],
    ],
    'zf-rest' => [
        'ContactAPI\\V1\\Rest\\Contacts\\Controller' => [
            'listener' => 'ContactAPI\\V1\\Rest\\Contacts\\ContactsResource',
            'route_name' => 'contact-api.rest.contacts',
            'route_identifier_name' => 'contacts_id',
            'collection_name' => 'contacts',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \ContactAPI\V1\Rest\Contacts\ContactsEntity::class,
            'collection_class' => \ContactAPI\V1\Rest\Contacts\ContactsCollection::class,
            'service_name' => 'contacts',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'ContactAPI\\V1\\Rest\\Contacts\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'ContactAPI\\V1\\Rest\\Contacts\\Controller' => [
                0 => 'application/vnd.contact-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'ContactAPI\\V1\\Rest\\Contacts\\Controller' => [
                0 => 'application/vnd.contact-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \ContactAPI\V1\Rest\Contacts\ContactsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'contact-api.rest.contacts',
                'route_identifier_name' => 'contacts_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \ContactAPI\V1\Rest\Contacts\ContactsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'contact-api.rest.contacts',
                'route_identifier_name' => 'contacts_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'ContactAPI\\V1\\Rest\\Contacts\\ContactsResource' => [
                'adapter_name' => 'DBMySQL',
                'table_name' => 'contacts',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'ContactAPI\\V1\\Rest\\Contacts\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'zf-content-validation' => [
        'ContactAPI\\V1\\Rest\\Contacts\\Controller' => [
            'input_filter' => 'ContactAPI\\V1\\Rest\\Contacts\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'ContactAPI\\V1\\Rest\\Contacts\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'name',
                'description' => 'name',
                'field_type' => '',
                'error_message' => 'O nome é requerido',
            ],
            1 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\EmailAddress::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'email',
                'description' => 'Email',
                'error_message' => 'O Email é requerido',
            ],
            2 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'phone',
                'description' => 'Telefone',
                'error_message' => 'O numero do telefone é requerido',
            ],
        ],
    ],
];
