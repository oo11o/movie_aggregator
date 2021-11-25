<?php

namespace App\Http\Controllers;

use App\Services\PostsService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $postsService;

    public function __construct(PostsService $postsService)
    {
        $this->postsService = $postsService;
    }

    public function index(){
        $data = $this->postsService->getPosts();


//        foreach ($data as $values){
//            foreach (json_decode($values['actor']) as $item){
//                echo '<pre>';
//                    print_r($item);
//                echo '</pre>';
//            }
//        }
        return view('pages.index', ['posts' => $data]);
    }

}
