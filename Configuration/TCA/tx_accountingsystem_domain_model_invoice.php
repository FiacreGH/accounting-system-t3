<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_invoice',
        'label' => 'invoice_file_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => '',
        'iconfile' => 'EXT:accounting_system/Resources/Public/Icons/tx_accountingsystem_domain_model_invoice.gif'
    ],
    'interface' => [
        'showRecordFieldList' => ' invoice_file_name, amount, date, invoice_id, service_provider, consultations, patient',
    ],
    'types' => [
        '1' => ['showitem' => 'invoice_file_name, amount, date, invoice_id, service_provider, consultations, patient'],
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
        'invoice_file_name' => [
            'label' => 'Invoice File Name',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'amount' => [
            'label' => 'Invoice Amount',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ],
        ],
        'date' => [
            'label' => 'Invoice Date',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'size' => 12,
                'eval' => 'datetime',
                'default'  => 'CURRENT_TIMESTAMP'
            ],
        ],
        'invoice_id' => [
            'label' => 'Invoice Id',
            'config' => [
                'type' => 'input',
                'size' => 11,
                'eval' => 'int'
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
        'consultations' => [
            'label' => 'Consultations',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_accountingsystem_domain_model_consultation',
                'foreign_field' => 'invoice',
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
