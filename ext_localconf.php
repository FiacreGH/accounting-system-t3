<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CodeID.AccountingSystem',
            'Accountingsystem',
            [
                'Patient' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Patient' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    accountingsystem {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('accounting_system') . 'Resources/Public/Icons/user_plugin_accountingsystem.svg
                        title = LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accounting_system_domain_model_accountingsystem
                        description = LLL:EXT:accounting_system/Resources/Private/Language/locallang_db.xlf:tx_accounting_system_domain_model_accountingsystem.description
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
