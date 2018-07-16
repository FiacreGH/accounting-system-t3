<?php

namespace CodeID\AccountingSystem\Domain\Validator;

/***
 *
 * This file is part of the "Contact Register" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Fiacre Sankara <fiacre.sankara@gmail.com>, CodeID
 *
 ***/

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

class YearValidator extends AbstractValidator
{
    /**
     * @param int $year
     * @return void
     */
    public function isValid($year)
    {
        // vérifer que ll'année soit dans un interval > 2000  and > current year
        if (!$year >= 2000 && !$year <= date("Y")) {
            $this->addError('The given year is not valid', 1530790936);
        }
    }
}