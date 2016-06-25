<?php

namespace OC\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    protected $name;

    /**
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    protected $prenom;

    /**
     * @ORM\Column(name="website", type="string", length=100, nullable=true)
     */
    protected $website;

    /**
     * @ORM\Column(name="aboutYou", type="string", length=100, nullable=true)
     */
    protected $aboutYou;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $pictureName;

    /**
     * @Assert\File(
     *     maxSize="1M",
     *     mimeTypes={"image/png", "image/jpeg", "image/gif"}
     * )
     */
    public $file;

    /**
     * construct
     */
    public function __construct() {
        parent::__construct();
        // your own logic
    }

    public function setName($Name) {
        $this->name = $Name;

        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function getAboutYou() {
        return $this->aboutYou;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setWebsite($website) {
        $this->website = $website;
    }

    public function setAboutYou($aboutYou) {
        $this->aboutYou = $aboutYou;
    }

    public function getWebPath() {
        return null === $this->pictureName ? null : $this->getUploadDir() . '/' . $this->pictureName;
    }

    public function getUploadRootDir() {
        // le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/pictures';
    }

    public function uploadProfilePicture() {
        // Nous utilisons le nom de fichier original, donc il est dans la pratique 
        // nécessaire de le nettoyer pour éviter les problèmes de sécurité
        $extension = $this->file->guessExtension();
        $this->pictureName = $this->getId() . '.' . $extension;
        // move copie le fichier présent chez le client dans le répertoire indiqué.
        $this->file->move($this->getUploadRootDir(), $this->getId() . '.' . $extension);
        // La propriété file ne servira plus
        $this->file = null;
    }

    public function getWebPathImage() {
        return $this->getUploadDir() . '/' . $this->getPictureName();
    }

    /**
     * Get pictureName
     *
     * @return string
     */
    public function getPictureName() {
        return $this->pictureName;
    }

    public function checkExisteFile() {
        $existe = false;
        $filename = __DIR__ . '/../../../../web/' . $this->getUploadDir().'/'.$this->getPictureName();
        if (file_exists($filename)) {
            $existe = true;
        } 
        return $existe;
    }

}
