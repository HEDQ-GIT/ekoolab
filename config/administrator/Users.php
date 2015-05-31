<?php
return array(
    'title' => 'Users',
    'single' => 'User',
    'model' => 'App\User',
    'columns' => array(
        'id' => array(
            'title' => 'ID'
        ),
        'name' => array(
            'title' => 'Name'
        ),
        'email' => array(
            'title' => 'Email'
        ),
//        'num_articles' => array(
//            'title' => '# Articles',
//            'relationship' => 'articles',
//            'select' => 'COUNT((:table).id)',
//        ),
        'articles' => array(
            'title' => 'Articles',
            'type' => 'relationship',
            'name_field' => '(:table).title',
            'output' => function($value) {
                $result = '<ul>';
                foreach($value as $v){
                    $li = '<li>'. $v->title .'</li>';
                    $result .= $li;
                }
                $result .= '</ul>';
                return $result;
            },
        ),
    ),
    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text'
        ),
        'articles' => array(
            'title' => 'Articles',
            'type' => 'relationship',
            'name_field' => 'title',
            'sort_field' => 'title',
            'options_sort_field' => 'title'
        )

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