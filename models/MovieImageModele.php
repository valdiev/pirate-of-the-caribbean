<?php

namespace models;

use models\base\SQL;
use models\classes\Film;


class MovieImageModele extends SQL
{
    public function __construct()
    {
        parent::__construct('movies_images', 'id');
    }

    public function getByImageId($moveId): Film{
        $query = "SELECT * FROM movies_images WHERE movie_id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$moveId]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Film::class);
        return $stmt->fetch();
    }

}