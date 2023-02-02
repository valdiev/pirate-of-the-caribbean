<?php

namespace models;

use models\base\SQL;
use models\classes\Film;


class RelatedFilmModele extends SQL
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
    public function getRealtedFilms($filmId): array
    {
        $query = "SELECT * FROM movies WHERE id != $filmId";
        $query2 = "SELECT * FROM movies_images";


        $stmt = SQL::getPdo()->prepare($query);
        $stmt2 = SQL::getPdo()->prepare($query2);
        $stmt->execute();
        $stmt2->execute();
        $arrayRelated = [
            $stmt->fetchAll(),
            $stmt2->fetchAll(), 
        ];
        return $arrayRelated;
    }

}