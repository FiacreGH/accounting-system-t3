<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_consultation',
        'label' => 'invoice',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => false,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'invoice',
        'iconfile' => 'EXT:accounting_system/Resources/Public/Icons/tx_accountingsystem_domain_model_consultation.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, invoice',
    ],
    'types' => [
        '1' => ['showitem' => ', hidden, invoice, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'invoice' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_consultation.invoice',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_accountingsystem_domain_model_invoice',
                'foreign_field' => 'consultation',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],

        'patient' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
