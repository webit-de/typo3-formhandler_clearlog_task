<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Formhandler ClearLog Task',
    'description' => 'Add formhandler log table to table garbage collection task',
    'category' => 'misc',
    'author' => 'Dan Untenzu',
    'author_email' => 'untenzu@webit.de',
    'author_company' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '3.0.0',
    'constraints' => array(
        'depends' => array(
            'php' => '5.5.0-7.0.99',
            'typo3' => '7.6.0-8.7.99',
            'cms' => '',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
