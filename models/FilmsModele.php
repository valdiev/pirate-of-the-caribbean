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
        $query2 = "SELECT * FROM movies_images LIMIT :limit,:offset;";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt2 = SQL::getPdo()->prepare($query2);
        $stmt->execute([":limit" => $limit * $page, ":offset" => $limit]);
        $stmt2->execute([":limit" => $limit * $page, ":offset" => $limit]);
        $arrayFilm = [
            $stmt->fetchAll(\PDO::FETCH_CLASS, Film::class),
            $stmt2->fetchAll(\PDO::FETCH_CLASS, Film::class)
        ];
        return $arrayFilm;
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
    public function creerFilm()
    {
        $title=$_POST['titleMovie'];
        $synopsis=$_POST['synopsis'];
        $date=$_POST['dateSortie'];
        $duration=$_POST['duration'];
        $imageFilm=$_POST['imageFilm'];
        $stmt = $this->getPdo()->prepare("INSERT INTO movies (title, synopsis, date, duration) VALUES ('$title', '$synopsis', '$date', '$duration')");
        $stmt->execute();
        $stmt->fetch();
        $lastId = intval($this->getPdo()->lastInsertId());
        $stmt2 = $this->getPdo()->prepare("INSERT INTO movies_images (movie_id, url) VALUES ('$lastId', '$imageFilm')");
        $stmt2->execute();
        $stmt2->fetch();
        return header('location: /films');
    }

    public function getByFilmId($filmId): Film{
        $query = "SELECT * FROM movies WHERE id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$filmId]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Film::class);
        return $stmt->fetch();
    }

    public function removeFilm($id){
        $stmt = $this->getPdo()->prepare("DELETE FROM movies WHERE id = ?");
        $stmt->execute([$id]);
        $stmt2 = $this->getPdo()->prepare("DELETE FROM movies_images WHERE movie_id = '$id'");
        $stmt2->execute();
        $stmt2->fetch();
        return header('location: /films');
    }

    public function runEditFilm($id){
        $title=$_POST['titleMovie'];
        $synopsis=$_POST['synopsis'];
        $date=$_POST['dateSortie'];
        $duration=$_POST['duration'];
        $imageFilm=$_POST['imageFilm'];
        $stmt = $this->getPdo()->prepare("UPDATE movies SET title = '$title', synopsis = '$synopsis', date = '$date', duration = '$duration'  WHERE id = '$id'");
        $stmt2 = $this->getPdo()->prepare("UPDATE movies_images SET url = '$imageFilm' WHERE movie_id = '$id'");
        $stmt->execute();
        $stmt2->execute();
        return header('location: /films/' . $id);

    }
}