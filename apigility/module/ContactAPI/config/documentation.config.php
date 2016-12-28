<?php
return [
    'ContactAPI\\V1\\Rest\\Contacts\\Controller' => [
        'description' => 'Contacts service',
        'collection' => [
            'description' => 'Collections',
        ],
        'entity' => [
            'description' => 'Single Contact',
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contacts_id]"
       }
   }
   "name": "name",
   "email": "Email",
   "phone": "Telefone"
}',
            ],
        ],
    ],
];
