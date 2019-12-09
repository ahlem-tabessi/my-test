<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use APP\Entity\Blog;



/**
 * @ORM\Entity(repositoryClass="App\Repository\AuteurRepository")
 */
class Auteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;



    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(?string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function addBlog(Blog $blog)
    {
        if (!$this->blogs->contains($blog))
        {
            $this->blogs->add($blog);
        }
    }
}
