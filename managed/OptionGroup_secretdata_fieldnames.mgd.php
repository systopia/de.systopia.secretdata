<?php

$optionvalues = [];
for ($i = 0; $i <= 9; $i++) {
  $name = 'name'.$i;
  $optionvalues[] =
  [
    'name' => 'OptionGroup_secretdata_fieldnames_OptionValue_' . $i,
    'entity' => 'OptionValue',
    'cleanup' => 'always',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'secretdata_fieldnames',
        'label' => $name,#E::ts('name0'),
        'value' => $name,
        'name' => $name,
        'is_reserved' => TRUE,
        'is_active' => TRUE,
        'filter' => 0,
        'is_default' => TRUE,
        'description' => 'no info',#E::ts('no information'),
      ],
    ],
    'match' => ['option_group_id.name','name'],
  ];
}

array_unshift($optionvalues,
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
  ]
);

return $optionvalues;
