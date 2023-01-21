<?php
namespace models\classes;


class Actor
{
    private string $id;
    private string $firstname;
    private string $lastname;
    private string $charactername;
    private string $image_acteur;

    /**
     * @return string
     */
    public function getImageActeur(): string
    {
        return $this->image_acteur;
    }

    /**
     * @param string $image_acteur
     */
    public function setImageActeur(string $image_acteur): void
    {
        $this->image_acteur = $image_acteur;
    }

    /**
     * Affichage des informations de base du client
     * @return string
     */
    public function generalInfo(): string
    {
        return join(" ", array_filter([$this->firstname, $this->lastname]));
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $nom
     */
    public function setFirstName(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $prenom
     */
    public function setLastName(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getCharacterName(): string
    {
        return $this->charactername;
    }

    /**
     * @param string $prenom
     */
    public function setCharacterName(string $charactername): void
    {
        $this->charactername = $charactername;
    }

}