<?php
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace CodeID\AccountingSystem\Controller;

abstract class AbstractAccountingSystemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @return void
     */
    public function initializeAction()
    {

        if (!$this->getFrontendUserData()) {

            throw new \RuntimeException('Error: user must be logged in!', 1524814048);
        }
    }

    /**
     * Returns an instance of the current Frontend User.
     *
     * @return \TYPO3\CMS\Frontend\Authentication\FrontendUserAuthentication
     */
    protected function getFrontendUser()
    {
        return $GLOBALS['TSFE']->fe_user;
    }

    /**
     * Returns user data of the current Frontend User.
     *
     * @return array
     */
    protected function getFrontendUserData()
    {
        return $this->getFrontendUser()->user ? $this->getFrontendUser()->user : [];
    }

}