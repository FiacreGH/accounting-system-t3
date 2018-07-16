# Accounting System

This is a TYPO3 extension to handle a basic accounting.

## Installation

``` 
composer require codeid/accounting-system
```

Notice that the plugin on that page should be protected by a [frontend login](https://docs.typo3.org/typo3cms/EditorsTutorial/AccessControl/Login/Index.html)

For local development adjust path to wkhtmltopdf (https://wkhtmltopdf.org/downloads.html) 

```
plugin.tx_accountingsystem.settings.wkhtmltopdfBinaryAndPath = wkhtmltopdf
```
