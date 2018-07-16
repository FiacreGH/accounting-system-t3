<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
            'accounting_system',
            'constants',
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:accounting_system/Configuration/TypoScript/constants.typoscript">'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
            'accounting_system',
            'setup',
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:accounting_system/Configuration/TypoScript/setup.typoscript">'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CodeID.AccountingSystem',
            'Patient',
            [
                'Patient' => 'list, new, create, edit, update, delete',
                'Consultation' => 'list, new, create, update, edit, delete',
                'Invoice' => 'list, create, delete'
            ],
            [
                'Patient' => 'list, new, create, edit, update, delete',
                'Consultation' => 'list, new, create, update, edit, delete',
                'Invoice' => 'list, create, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CodeID.AccountingSystem',
            'Accounting',
            [
                'Accounting' => 'monthlyAccounting, annuallyAccounting'
            ],
            [
                'Accounting' => 'monthlyAccounting, annuallyAccounting'
            ]
        );

        // wizards
        $icons = [
            'user_plugin_accountingsystem' => 'user_plugin_accountingsystem.png',
        ];
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:accounting_system/Resources/Public/Icons/' . $path]
            );
        }
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
                'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        accountingsystem {
                            icon = user_plugin_accountingsystem
                            title = Accounting System
                            description = This is a TYPO3 extension to handle a basic accounting
                            tt_content_defValues {
                                CType = list
                                list_type = accountingsystem_accountingsystem
                            }
                        }
                    }
                    show = *
                }
           }'
        );
    }
);
