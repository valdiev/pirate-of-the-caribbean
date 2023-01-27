<?php
namespace models\classes;

class Film
{
    private string $id;
    private string $title;
    private string $synopsis;
    private string $date;
    private string $duration;
    private string $video;

    /**
     * Retourne la liste des adresses du client
     * @return Adresse[]
     */
    public function lesAdresses(): array {
        return $this->adresseModele->lesAdressesClient($this->id);
    }

    /**
     * Retourne la liste des produits du client
     * @return Produit[]
     */
    public function lesProduits(): array
    {
        return $this->produitModele->lesProduitsClient($this->id);
    }

    /**
     * Affichage des informations de base du client
     * @return string
     */
    public function generalInfo(): string
    {
        return join(",", array_filter([$this->title]));
    }

    /**
     * Affichage des informations de contact d'un client.
     * @return string
     */
    public function descriptionInfo(): string
    {
        return join(",", array_filter([$this->synopsis, $this->date]));
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $nom
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    /**
     * @param string $prenom
     */
    public function setSynopsis(string $synopsis): void
    {
        $this->synopsis = $synopsis;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $email
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @param string $telephone
     */
    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getVideo(): string
    {
        return $this->video;
    }

    /**
     * @param string $telephone
     */
    public function setVideo(string $video): void
    {
        $this->video = $video;
    }

}