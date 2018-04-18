
plugin.tx_accountingsystem {
    view {
        templateRootPaths.0 = EXT:accounting_system/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_accountingsystem_accountingsystem.view.templateRootPath}
        partialRootPaths.0 = EXT:accounting_system/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_accountingsystem_accountingsystem.view.partialRootPath}
        layoutRootPaths.0 = EXT:accounting_system/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_accountingsystem_accountingsystem.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_accountingsystem_accountingsystem.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}
page = PAGE
page{
    includeCSSLibs {
        cloudflare = https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css
        cloudflare {
            external = 1
        }
    }

    includeJSFooterlibs {
        cloudflare = https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js
        cloudflare {
            external = 1
        }
    }
}

# Add JS library to default page object
page.includeJS.accountingsystem = EXT:accounting_system/Resources/Public/JavaScript/Additionnal/additionnal.js

# these classes are only used in auto-generated templates
plugin.tx_accountingsystem._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-accounting-system table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-accounting-system table th {
        font-weight:bold;
    }

    .tx-accounting-system table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
