<?php

namespace BackOfficeBundle\Repository;

/**
 * internauteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class internauteRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllActifOrderedByName()
    {
        return $this->getEntityManager()->createQuery('Select i from BackOfficeBundle:internaute i Where i.actif=1 ORDER BY i.nom ASC')->getResult();
    }
}