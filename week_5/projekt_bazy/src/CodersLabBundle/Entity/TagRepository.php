<?php

namespace CodersLabBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TagRepository extends EntityRepository{

    public function findAllOrderByTagText(){
        $em = $this->getEntityManager();

        $query = $em->createQuery('
        SELECT Tag
        FROM CodersLabBundle:Tag Tag
        ORDER BY Tag.tagText DESC');

        $tags = $query->getResult();

        return $tags;
    }

    public function searchByTagText($searchText){
        $em = $this->getEntityManager();

        $query = $em->createQuery('
        SELECT Tag
        FROM CodersLabBundle:Tag Tag
        WHERE Tag.tagText LIKE :searchText
        ORDER BY Tag.tagText ASC');
        $query->setParameter('searchText', '%'.$searchText.'%');

        $tags = $query->getResult();

        return $tags;
    }

}