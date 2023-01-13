<?php

namespace models;

use models\base\SQL;
use models\classes\Actor;


class ActorsModele extends SQL
{
    public function __construct()
    {
        parent::__construct('actors', 'id');
    }

    /**
     * Liste les actors présents en base de données
     * @param int $limit
     * @param int $page
     * @return Actor[]
     */
    public function liste(int $limit = PHP_INT_MAX, int $page = 0): array
    {
        $query = "SELECT * FROM actors LIMIT :limit,:offset;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([":limit" => $limit * $page, ":offset" => $limit]);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, Actor::class);
    }

    /**
     * Retourne une liste d'acteurs correspondant au critère de recherche
     * @param string $keyword
     * @param int $limit
     * @param int $page
     * @return Actors[]
     */
    public function recherche(string $keyword = "", int $limit = PHP_INT_MAX, int $page = 0): array
    {
        $query = "SELECT * FROM actors WHERE firstname LIKE :firtname OR lastname like :lastname LIMIT :limit,:offset;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([
            ":firstname" => "%$keyword%",
            ":lastname" => "%$keyword%",
            ":limit" => $limit * $page,
            ":offset" => $limit
        ]);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, Actor::class);
    }

    /**
     * Ajoute un nouveau acteur en base de données
     * @param Actor $unActeur
     * @return bool|string
     */
    public function creerActeur(Actor $unActeur): bool|string
    {
        $query = "INSERT INTO actors (id, firstname, lastname) VALUES (null, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$unActeur->getFirstName(), $unActeur->getLastName()]);

        return $this->getPdo()->lastInsertId();
    }
}