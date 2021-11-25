<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SimilarService;

class SimilarController extends Controller
{
    protected $similarService;

    public function __construct(SimilarService $similarService)
    {
        $this->similarService = $similarService;
    }

    public function index($url){
        $data = $this->similarService->getSimilarFilms($url);
//        echo '<pre>';
//            print_r($data);
//        echo '</pre>';
//        die();

//        foreach ($data as $values){
//            foreach (json_decode($values['actor']) as $item){
//                echo '<pre>';
//                    print_r($item);
//                echo '</pre>';
//            }
//        }
        return view('pages.post.index', ['post' => $data]);
    }
}
