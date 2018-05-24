<?php
namespace CodeID\AccountingSystem\Domain\Repository;

/***
 *
 * This file is part of the "Accounting System" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Fiacre Sankara <fiacre.sankara@gmail.com>, CodeID
 *
 ***/

/**
 * The repository for Consultations
 */

use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

class ConsultationRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * Returns all objects of this repository.
     * @param string $searchTerm
     * @return QueryResultInterface|array
     * @api
     */
    public function findAllBySearchTerm($searchTerm)
    {
        $constraints = [];
        $query = $this->createQuery();
        if (!empty($searchTerm) ) {

            $searchTermConstraints = [
                $query->like('name', '%' . $searchTerm . '%'),
                $query->like('prenoms', '%' . $searchTerm . '%'),
                $query->like('adresse', '%' . $searchTerm . '%'),
                $query->like('mail', '%' . $searchTerm . '%'),
                $query->like('traitements', '%' . $searchTerm . '%'),
            ];
            $constraints[] = $query->logicalOr($searchTermConstraints);
        }


        if ($constraints) {
            $query->matching(
                $query->logicalAnd($constraints)
            );
        }

        return $query->execute();
    }

}
