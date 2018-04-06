# accounting_system
This is a basic accounting TYPO3 extension

## Installation
``cd path to your TYPO3 extensions ...typo3conf/ext``

``git clone git@github.com:FiacreGH/accounting_system.git``

Include the EXT: typoscript setup to load it

``<INCLUDE_TYPOSCRIPT: source="FILE:EXT:accounting_system/Configuration/TypoScript/setup.ts">``

As it is not a composer mode EXT, run ``composer dumpautoload`` to load it classes

Now you can use it plugin in a page
