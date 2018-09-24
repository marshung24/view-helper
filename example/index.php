<?php
/**
 * 測試及範例
 */
include_once '../vendor/autoload.php';

$form = new \marshung\view\form\FormHelper();

// input text
$config = [
    'config' => [
        'element' => 'input',
        'default' => ''
    ],
    'defined' => [
        'type' => 'text',
    ]
];

$form->render($config);
echo "<br>\n";

// input checkbox
$config = [
    'config' => [
        'element' => 'input',
        'default' => ''
    ],
    'defined' => [
        'type' => 'checkbox',
    ]
];

$form->render($config);
echo "<br>\n";

// input radio
$config = [
    'config' => [
        'element' => 'input',
        'default' => ''
    ],
    'defined' => [
        'type' => 'radio',
    ]
];

$form->render($config);
echo "<br>\n";

// select single
$config = [
    'config' => [
        'element' => 'select',
        'default' => ''
    ],
    'defined' => [
        
    ]
];

$form->render($config);
echo "<br>\n";

// select multiple
$config = [
    'config' => [
        'element' => 'select',
        'default' => ''
    ],
    'defined' => [
        'multiple' => 'multiple',
    ]
];

$form->render($config);
echo "<br>\n";

// option
$config = [
    'config' => [
        'element' => 'option',
        'default' => ''
    ],
    'defined' => [
    ]
];

$form->render($config);
echo "<br>\n";

// button
$config = [
    'config' => [
        'element' => 'button',
    ],
    'defined' => [
    ]
];

$form->render($config);
echo "<br>\n";

// label
$config = [
    'config' => [
        'element' => 'label',
    ],
    'defined' => [
    ]
];

$form->render($config);
echo "<br>\n";

// textarea
$config = [
    'config' => [
        'element' => 'textarea',
    ],
    'defined' => [
    ]
];

$form->render($config);
echo "<br>\n";

// span
$config = [
    'config' => [
        'element' => 'span',
    ],
    'defined' => [
    ]
];

$form->render($config);
echo "<br>\n";

// Fieldset
$config = [
    'config' => [
        'element' => 'fieldset',
    ],
    'defined' => [
    ]
];

$form->render($config);
echo "<br>\n";






