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

class MonthValidator extends AbstractValidator
{
    /**
     * @param int $month
     * @return void
     */
    public function isValid($month)
    {
        if (!$month >= 1 && !$month <= 12) {
            $this->addError('The given month is not valid', 1530790936);
        }
    }
}