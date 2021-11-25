<?php


namespace App\Services\Repositories;


use App\Models\Film;

class FilmsRepository
{
    public function findSimilarsByUrl($url){
        return Film::find(1);
    }
}
