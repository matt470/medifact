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
        $user->setRoles(['ROLE_PRATICIEN']);
        $manager->persist($user);
        
        //Admin
        $user2 = new User();
        $user2->setEmail('admin@medifact.com');
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2,
            'admin'
        ));
        $user2->setRoles(['ROLE_ADMIN']);
        $manager->persist($user2);
        
        //Administratif
        $user3 = new User();
        $user3->setEmail('administratif@medifact.com');
        $user3->setPassword($this->passwordEncoder->encodePassword(
            $user3,
            'administratif'
        ));
        $user3->setRoles(['ROLE_ADMINISTRATIF']);
        $manager->persist($user3);
        
        $manager->flush();
    }
}
