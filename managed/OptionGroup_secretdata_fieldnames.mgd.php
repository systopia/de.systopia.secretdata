<?php
return [
  [
    'name' => 'OptionGroup_secretdata_fieldnames',
    'entity' => 'OptionGroup',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'secretdata_fieldnames',
        'title' => 'secret data field names',
        'description' => 'Field names for the secret data extension',
        'data_type' => NULL,
        'is_reserved' => TRUE,
        'is_active' => TRUE,
        'is_locked' => TRUE,
      ],
    ],
    'match' => ['name'],
  ],
];
