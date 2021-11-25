<?php


namespace App\Services;


use App\Services\Repositories\FilmsRepository;
use App\Services\Repositories\PostsRepository;

class SimilarService
{
    protected $filmsRepository;
    protected $postsRepository;

    public function __construct
    (
        FilmsRepository $filmsRepositories,
        PostsRepository $postsRepository
    )
    {
        $this->filmsRepository = $filmsRepositories;
        $this->postsRepository = $postsRepository;
    }

    public function getSimilarFilms($url){
      //  $test = $this->filmsRepository->findSimilarsByUrl($url);

       return $this->postsRepository->getSimilarsByUrk($url);
    }

}
