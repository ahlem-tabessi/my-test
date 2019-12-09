<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogRepository")
 */
class Blog
{   
    
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

     /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $brochureFilename;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Auteur", cascade={"persist"})
     */
    protected $auteurs;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->auteurs= new ArrayCollection();
    }

     public function getAuteurs()
    {
        return $this->auteurs;
    }
    public function addAuteurs(Auteur $auteur)
    {
        $this->auteurs->add($auteur);
        $auteur->setBlog($this);
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

     public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
    public function getBrochureFilename()
    {
        return $this->brochureFilename;
    }

    public function setBrochureFilename($brochureFilename)
    {
        $this->brochureFilename = $brochureFilename;

        return $this;
    }
     public function addAuteur(Auteur $auteur)
    {   
        // for a many-to-many association:
        //$auteur->addBlog($this);

        // for a many-to-one association:
        //$auteur->setBlog($this);

        $this->auteurs->add($auteur);
        
    }

 public function removeAuteur(Auteur $auteur)
    {
         $this->auteurs->removeElement($auteur);
    }
}
