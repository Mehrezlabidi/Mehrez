<?php

namespace MyApp\EspritBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Article {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="MyApp\EspritBundle\Entity\Rubrique")
     * @ORM\JoinColumn(nullable=true, onDelete="CASCADE")
     */
    protected $rubrique;
    
    /**
     * @ORM\OneToOne(targetEntity="MyApp\EspritBundle\Entity\Sousrubrique", cascade={"remove", "persist"} )
     * @ORM\JoinColumn(name="sousrubrique_id", referencedColumnName="id", onDelete="CASCADE")
     */
    
     protected $sousrubrique;

    /**
     * @ORM\ManyToOne(targetEntity="MyApp\EspritBundle\Entity\Role", inversedBy="articles")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id",nullable=false, onDelete="CASCADE")
     */
    protected $role;

    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters long"
     * )   
     * @ORM\Column(name="texte", type="string", length=500 )
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255,nullable=true)
     */
    private $image;

    /**
     * @var string
     * @Assert\Length(min = 5, max = 50)  
     * @ORM\Column(name="nom", type="string", length=255,unique=true)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    public function __construct() {
        $this->date = new \Datetime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Article
     */
    public function setTexte($texte) {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte() {
        return $this->texte;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Article
     */
    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Article
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    public function getRubrique() {
        return $this->rubrique;
    }

    public function getSousrubrique() {
        return $this->sousrubrique;
    }

    public function setRubrique($rubrique) {
        $this->rubrique = $rubrique;
    }

    public function setSousrubrique($sousrubrique) {
        $this->sousrubrique = $sousrubrique;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function __toString() {
        return $this->title . '' . $this->permission;
    }

}
