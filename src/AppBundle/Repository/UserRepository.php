<?php 
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function loadUserByCredentials(string $email)
    {
        $query = $this->createQueryBuilder('u')
                    ->where('u.email = :email')
                    ->setParameter('email', $email)
                    ->getQuery()
                    ->getOneOrNullResult();
                    
        return $query;
    }

}

?>