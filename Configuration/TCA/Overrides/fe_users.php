<?php
$tca = [
    'interface' => [
        'showRecordFieldList' => 'code_reference',
    ],
    'types' => [
        '1' => ['showitem' => 'code_reference'],
    ],
    'columns' => [
        'code_reference' => [
            'label' => 'Code de référence',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
    ],
];
$GLOBALS['TCA']['fe_users'] = array_replace_recursive($GLOBALS['TCA']['fe_users'], $tca);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'code_reference');