<?php


namespace App\Services;


use App\Services\Repositories\PostsRepository;

class PostsService
{
    protected $postsRepository;

    public function __construct
    (
        PostsRepository $postsRepository
    )

    {
        $this->postsRepository = $postsRepository;
    }

    public function getPosts(){
        $posts = $this->postsRepository->getPosts();

        foreach($posts as &$values) {
            $values['description'] = mb_substr(strip_tags($values['description']), 0, 300) . '...';
            $values['url'] = $this->getCategory($values['category_id']) . '/' . $values['url'];
        }
       return $posts;
    }

    private function getCategory($idCategory){
        $category[1] = 'similar';
        return 'similar';
    }
}
