<?php
/**
 * Created by PhpStorm.
 * User: Elise
 * Date: 30/01/2018
 * Time: 10:06
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\Column(type="string")
     *
     *
     */
    protected $prenom;
    /**
     *
     * @ORM\Column(type="string")
     *
     *
     */
    protected $nom;

    /**
         *
         * @ORM\Column(type="date")
         *
         *
         */
        protected $dateNais;

    /**
         *
         * @ORM\Column(type="string")
         *
         */
        protected $adresse;

    /**
         *
         * @ORM\Column(type="integer")
         *
         *
         */
        protected $codePostal;

    /**
         *
         * @ORM\Column(type="string")
         *
         *
         */
        protected $ville;



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getDateNais(){
        return $this->dateNais;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getCodePostal(){
        return $this->codePostal;
    }
    public function getVille(){
        return $this->ville;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }
    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }
    public function setDateNais($dateNais){
        $this->dateNais = $dateNais;
        return $this;
    }
    public function setAdresse($adresse){
        $this->adresse = $adresse;
        return $this;
    }
    public function setCodePostal($codePostal){
        $this->codePostal = $codePostal;
        return $this;
    }
    public function setVille($ville){
        $this->ville = $ville;
        return $this;
    }
}