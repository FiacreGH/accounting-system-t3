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

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The repository for Consultations
 */
class ConsultationRepository extends Repository
{
    /**
     * @param int $serviceProvider
     * @param string $dateBegin
     * @param string $dateEnd
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findByServiceProviderAndDateInterval($serviceProvider, $dateBegin, $dateEnd)
    {
        $query = $this->createQuery();

        if (!empty($serviceProvider)) {

            $constraints = [
                $query->equals('serviceProvider', $serviceProvider),
                $query->greaterThanOrEqual('date', $dateBegin),
                $query->lessThanOrEqual('date', $dateEnd),
            ];

            $query->matching(
                $query->logicalAnd($constraints)
            );
        }

        return $query->execute();
    }

    /**
     * @param int $serviceProvider
     * @param int $year
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findByServiceProviderAndYear($serviceProvider, $year)
    {
        $query = $this->createQuery();

        $constraints = [
            $query->equals('serviceProvider', $serviceProvider),
            $query->greaterThanOrEqual('date', $year . '-00-00'),
            $query->lessThanOrEqual('date', $year . '-12-31'),
        ];
        $query->matching(
            $query->logicalAnd($constraints)
        );
        return $query->execute();
    }
}
