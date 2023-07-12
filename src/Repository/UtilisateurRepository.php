<?php

namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<Utilisateur>
 *
 * @method Utilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilisateur[]    findAll()
 * @method Utilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    public function save(Utilisateur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Utilisateur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof Utilisateur) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);

        $this->save($user, true);
    }

    public function updateUser($email,$nom,$prenom,$telephone,$adresse,$cp,$ville) {
    
    $qb = $this->createQueryBuilder('u');

    $query = $qb->update('App\Entity\Utilisateur', 'u')
        ->set('u.nom', ':nom')
        ->set('u.prenom', ':prenom')
        ->set('u.telephone', ':telephone')
        ->set('u.adresse', ':adresse')
        ->set('u.cp', ':cp')
        ->set('u.ville', ':ville')
        ->where('u.email = :email')
        ->setParameter('email', $email)
        ->setParameter('nom', $nom)
        ->setParameter('prenom', $prenom)
        ->setParameter('telephone', $telephone)
        ->setParameter('adresse', $adresse)
        ->setParameter('cp', $cp)
        ->setParameter('ville', $ville)
        ->getQuery();

    $query->execute();

    }

    public function getHistorique($user){

    // SELECT commande.id, date_commande, commande.total, plat.libelle, COUNT(plat.libelle)
    // FROM commande
    // JOIN detail ON detail.commande_id = commande.id
    // JOIN plat ON detail.plat_id = plat.id
    // WHERE utilisateur_id = 18
    // GROUP BY detail.id

        $qb = $this->createQueryBuilder('u')
            ->select('c.id', 'c.date_commande', 'c.total', 'p.libelle', 'COUNT(p.libelle) AS platCount')
            ->join('u.commandes','c')
            ->join('c.details', 'd')
            ->join('d.plat', 'p')
            ->where('u.id = :utilisateur')
            ->setParameter('utilisateur', $user)
            ->groupBy('d.id')
            ->getQuery();
        
        $results = $qb->getResult();

        return $results;

    }

//    /**
//     * @return Utilisateur[] Returns an array of Utilisateur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Utilisateur
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
