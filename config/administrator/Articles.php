<?php
return array(
    'title' => 'Articles',
    'single' => 'Article',
    'model' => 'App\Article',
    'columns' => array(
        'id' => array(
            'title' => 'ID'
        ),
        'user_id' => array(
            'title' => 'User',
            'relationship' => 'user',
            'select' => '(:table).name',
        ),
        'title' => array(
            'title' => 'Title'
        ),
        'content' => array(
            'title' => 'Content'
        ),
        'tags' => array(
            'title' => 'Tags',
            'type' => 'relationship',
            'name_field' => '(:table).name',
            'output' => function($value) {
                $result = '<ul>';
                foreach($value as $v){
                    $li = '<li>'. $v->name .'</li>';
                    $result .= $li;
                }
                $result .= '</ul>';
                return $result;
            },
        ),
        'publish_at' => array(
            'title' => 'Publish Time'
        ),
    ),
    'edit_fields' => array(
        //this is function name user()
        'user' => array(
            'title' => 'User',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'content' => array(
            'title' => 'Content',
            'type' => 'textarea'
        ),
        'publish_at' => array(
            'title' => 'Publish Time',
            'type' => 'datetime',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
            'time_format' => 'HH:mm',
        ),
        'tags' => array(
            'title' => 'Tags',
            'type' => 'relationship',
            'name_field' => 'name',
        )

    ),
    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),
    'filters' => array(
        'id',
        'title' => array(
            'title' => 'Title',
        ),
        'publish_at' => array(
            'title' => 'Publish Time',
            'type' => 'datetime',
        ),
    ),
);