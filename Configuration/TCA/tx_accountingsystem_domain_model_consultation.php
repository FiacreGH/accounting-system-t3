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
            'starttime' => 'starttime', // todo remove for all tables
            // todo add consultations to invoice (une facture a 1 - n consultations)

            'endtime' => 'endtime',
        ],
        'searchFields' => 'date, place, note, comments, amount_code, quantity, price, point_value, tva, amount, invoice',
        'iconfile' => 'EXT:accounting_system/Resources/Public/Icons/tx_accountingsystem_domain_model_consultation.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, date, place, reason, note, comments, amount_code, quantity, price, point_value, tva, amount, service_provider, is_invoiced, invoice',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, date, place, reason, note, comments, amount_code, quantity, price, point_value, tva, amount, service_provider, is_invoiced, invoice'],
    ],
    'columns' => [
        'hidden' => [
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
        'date' => [
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
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.place',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],

        'reason' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.reason',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'note' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.notice',
            'config' => [
                'type' => 'input',
                'size' => 255,
                'eval' => 'trim'
            ],
        ],
        'comments' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.comments',
            'config' => [
                'type' => 'input',
                'size' => 255,
                'eval' => 'trim'
            ],
        ],
        'rate' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.rate',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'amount_code' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.ctarif',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'quantity' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.quantity',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'price' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.price',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'point_value' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.ptvalue',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'tva' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.tva',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'amount' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_consultation.amount',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'service_provider' => [
            'label' => 'Accounter Id',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ],
        ],
        'is_invoiced' => [
            'label' => 'A été Facturée',
            'exclude' => 1,
            'config' => [
                'type' => 'check',
                'default' => '0'
            ]
        ],
        'invoice' => [
            'label' => 'Facture',
            'exclude' => 1,
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_accountingsystem_domain_model_invoice',
                'foreign_field' => 'uid',
                'maxitems' => 10,
                'appearance' => [
                    'collapseAll' => 1,
                    'expandSingle' => 1,
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
