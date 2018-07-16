<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient',
        'label' => '',
        'label_alt' => 'first_name, last_name',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'last_name,first_name,address,mobile_phone,phone,email,birth_date,comments,anamnesis,accidents,operations,diseases,treatments,other,consultations,invoices',
        'iconfile' => 'EXT:accounting_system/Resources/Public/Icons/tx_accountingsystem_domain_model_patient.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,  last_name, first_name,  address,  street, postal_code, city, mobile_phone, phone, email, birth_date, comments, anamnesis, accidents, operations, diseases, treatments, other, consultations,invoices',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden,  last_name, first_name,  address,  street, postal_code, city, mobile_phone, phone, email, birth_date, comments, anamnesis, accidents, operations, diseases, treatments, other, consultations, invoices'],
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
        'last_name' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.last_name',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'first_name' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.first_name',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'street' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.street',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'postal_code' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.postal_code',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'city' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.city',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'mobile_phone' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.mobile_phone',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'phone' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.phone',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.email',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'birth_date' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.birth_date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'size' => 7,
                'eval' => 'date',
                'default'  => 'CURRENT_TIMESTAMP'
            ],
        ],
        'comments' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.comments',
            'config' => [
                'type' => 'input',
                'size' => 255,
                'eval' => 'trim'
            ],
        ],
        'comments_invoice' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang.xlf:tx_accountingsystem_domain_model_patient.comments_invoice',
            'config' => [
                'type' => 'input',
                'size' => 255,
                'eval' => 'trim'
            ],
        ],
        'anamnesis' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.anamnesis',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'accidents' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.accidents',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'operations' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.operations',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'diseases' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.diseases',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'treatments' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.treatments',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'other' => [
            'label' => 'LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accountingsystem_domain_model_patient.other',
            'config' => [
                'type' => 'input',
                'size' => 150,
                'eval' => 'trim'
            ],
        ],
        'consultations' => [
            'label' => 'Consultations',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_accountingsystem_domain_model_consultation',
                'foreign_field' => 'patient',
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
        'invoices' => [
            'label' => 'Factures',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_accountingsystem_domain_model_invoice',
                'foreign_field' => 'patient',
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

    ],
];
