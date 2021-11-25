<?php


namespace App\Services\Repositories;
use App\Models\Post;
use function Doctrine\Common\Cache\Psr6\get;


class PostsRepository
{
    public function getSimilarsByUrk($url){
        return Post::select(
            'films.name',
            'films.name_original',
            'films.image',
            'films.image_webp',
            'films.description',
            'films.encyclopedia',
            'films.year',
            'films.actor',
            'films.status',
            'films.kinopoisk',
            'films.imdb',
            'films.info_year',
            'films.info_country',
            'films.info_genre',
            'films.info_tagline',
            'films.info_director',
            'films.info_script',
            'films.info_producer',
            'films.info_producer',
            'films.info_operator',
            'films.info_compose',
            'films.info_artist',
            'films.info_editing',
            'films.info_budget_currency',
            'films.info_budget',
            'films.info_usa_fees',
            'films.info_world_fees',
            'films.info_rus_fees_currency',
            'films.info_rus_fees',
            'films.info_viewer',
            'films.info_age',
            'films.info_mpaa_raiting',
            'films.info_time',

            'posts.h1',
            'posts.intro',
            'posts.image as poster'

             )
            ->where('url', $url)
            ->whereNotNull('image_webp')
            ->leftJoin('similars', 'posts.set_id', '=', 'similars.film_id')
            ->leftJoin('films', 'similars.similar_film_id', '=', 'films.id')
            ->limit(10)
            ->get()
            ->toArray();
    }

    public function getPosts(){
       return $posts =  Post::select(
            'posts.image as poster',
            'posts.h1',
            'posts.intro as description',
            'posts.category_id',
            'posts.url'
        )
         ->where('status_id',1)
         ->limit(10)
         ->get()
         ->toArray();

    }
}
