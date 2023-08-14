<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'DPX Projects',
    'description' => 'An extension for the task.',
    'category' => 'plugin',
    'author' => 'Stanislav Dzhambov',
    'author_email' => 'test@email.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '9.5.0-10.4.99',
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Vendor\\Projects\\' => 'Classes'
        ),
    ),
);

