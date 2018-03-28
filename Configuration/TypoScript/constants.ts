
plugin.tx_accountingsystem_accountingsystem {
    view {
        # cat=plugin.tx_accountingsystem_accountingsystem/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:accounting_system/Resources/Private/Templates/
        # cat=plugin.tx_accountingsystem_accountingsystem/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:accounting_system/Resources/Private/Partials/
        # cat=plugin.tx_accountingsystem_accountingsystem/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:accounting_system/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_accountingsystem_accountingsystem//a; type=string; label=Default storage PID
        storagePid =
    }
}
