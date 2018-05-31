<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_consultation',
        'label' => 'date',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'date, place, note, comments, amount_code, quantity, price, point_value, tva, amount, invoice',
        'iconfile' => 'EXT:accounting_system/Resources/Public/Icons/tx_accountingsystem_domain_model_consultation.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, date, place, reason, note, comments, amount_code, quantity, price, point_value, tva, amount, invoice',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, date, place, reason, note, comments, amount_code, quantity, price, point_value, tva, amount, invoice, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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

        'date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.consultationdate',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'size' => 12,
                'eval' => 'datetime',
                'default'  => 'CURRENT_TIMESTAMP'
            ],
        ],
        'place' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.place',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],

        'reason' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.reason',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'note' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.notice',
            'config' => [
                'type' => 'input',
                'size' => 255,
                'eval' => 'trim'
            ],
        ],
        'comments' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.comments',
            'config' => [
                'type' => 'input',
                'size' => 255,
                'eval' => 'trim'
            ],
        ],
        'amount_code' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.ctarif',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'quantity' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.quantity',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'price' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.price',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'point_value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.ptvalue',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'tva' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.tva',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'amount' => [
            'exclude' => true,
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.amount',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
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
