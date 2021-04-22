<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    
    public function __construct(UserPasswordEncoderInterface $passwordEncoder) 
    {
        $this->passwordEncoder = $passwordEncoder;    
    }
    
    public function load(ObjectManager $manager)
    {
        //$user = new User();
        
        //Praticien
        $user = new User();
        $user->setEmail('praticien@medifact.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'praticien'
        ));
        $user->setNom('Robert');
        $user->setPrenom('Arthur');
        $user->setRoles(['ROLE_PRATICIEN']);
        $user->setPoste('medecin généraliste');
        $manager->persist($user);
        
        //Admin
        $user2 = new User();
        $user2->setEmail('admin@medifact.com');
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2,
            'admin'
        ));
        $user2->setNom('Singainy');
        $user2->setPrenom('Matthieu');
        $user2->setRoles(['ROLE_ADMIN']);
        $user2->setPoste('administrateur');
        $manager->persist($user2);
        
        //Administratif
        $user3 = new User();
        $user3->setEmail('administratif@medifact.com');
        $user3->setPassword($this->passwordEncoder->encodePassword(
            $user3,
            'administratif'
        ));
        $user3->setNom('Delavegas');
        $user3->setPrenom('Arturo');
        $user3->setRoles(['ROLE_ADMINISTRATIF']);
        $user->setPoste('Dentiste');
        $manager->persist($user3);
        
        $manager->flush();
    }
}
