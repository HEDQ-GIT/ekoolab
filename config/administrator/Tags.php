<?php
return array(
    'title' => 'Tags',
    'single' => 'Tag',
    'model' => 'App\Tag',
    'columns' => array(
        'id' => array(
            'title' => 'ID'
        ),
        'name' => array(
            'title' => 'Name'
        ),
    ),
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
    ),
    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),
    'filters' => array(
        'id',
        'name' => array(
            'title' => 'Name',
        ),
    ),
);