<?php
return [
  [
    'name' => 'OptionGroup_secretdata_fieldnames',
    'entity' => 'OptionGroup',
    'cleanup' => 'always',
    'update' => 'always',
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
  [
    'name' => 'OptionGroup_secretdata_fieldnames_OptionValue_0',
    'entity' => 'OptionValue',
    'cleanup' => 'always',
    'update' => 'always',
    'params' => [
        'version' => 4,
        'values' => [
            'option_group_id.name' => 'secretdata_fieldnames',
            'label' => 'name0',#E::ts('name0'),
            'value' => 'name0',
            'name' => 'name0',
            'is_reserved' => TRUE,
            'is_active' => TRUE,
            'filter' => 0,
            'is_default' => TRUE,
            'description' => 'no info',#E::ts('no information'),
        ],
    ],
    'match' => ['option_group_id.name','name'],
  ],
];
