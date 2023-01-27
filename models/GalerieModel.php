<?php
namespace models;

use models\base\SQL;
use models\classes\Film;

class GalerieModel extends SQL
{
    function __construct()
    {
        parent::__construct('movies_images', 'id');
    }

    function liste(){
        $query = "SELECT * FROM movies_images";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function listeFilms(){
        $query = "SELECT * FROM movies";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Film::class);
    }
}