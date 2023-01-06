<?php

namespace models;

use models\base\SQL;
use models\classes\Film;


class FilmsModele extends SQL
{
    public function __construct()
    {
        parent::__construct('movies', 'id');
    }

    /**
     * Liste les films présents en base de données
     * @param int $limit
     * @param int $page
     * @return Film[]
     */
    public function liste(int $limit = PHP_INT_MAX, int $page = 0): array
    {
        $query = "SELECT * FROM movies LIMIT :limit,:offset;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([":limit" => $limit * $page, ":offset" => $limit]);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, Film::class);
    }

    /**
     * Retourne une liste de film correspondant au critère de recherche
     * @param string $keyword
     * @param int $limit
     * @param int $page
     * @return Film[]
     */
    public function recherche(string $keyword = "", int $limit = PHP_INT_MAX, int $page = 0): array
    {
        $query = "SELECT * FROM movies WHERE title LIKE :title OR synopsis like :synopsis OR date like :date OR duration like :duration LIMIT :limit,:offset;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([
            ":title" => "%$keyword%",
            ":synopsis" => "%$keyword%",
            ":date" => "%$keyword%",
            ":duration" => "%$keyword%",
            ":limit" => $limit * $page,
            ":offset" => $limit
        ]);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, Film::class);
    }

    /**
     * Ajoute un nouveau film en base de données
     * @param Film $unFilm
     * @return bool|string
     */
    public function creerFilm(Film $unFilm): bool|string
    {
        $query = "INSERT INTO movies (id, title, synopsis, date, duration) VALUES (null, ?, ?, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$unFilm->getTitle(), $unFilm->getSynopsis(), $unFilm->getDate(), $unFilm->getDuration()]);

        return $this->getPdo()->lastInsertId();
    }

    public function getByFilmId($filmId): Film{
        $query = "SELECT * FROM movies WHERE id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$filmId]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Film::class);
        return $stmt->fetch();
    }
}