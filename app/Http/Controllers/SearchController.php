<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\Pure;

class SearchController extends Controller
{
    public function getArticle(Request $request): array
    {
        $req = $request['search'];
        $articles = Article::all();
        $result = [];
        if($req === '' ||$req === null || $req === ' ')
            return [];
        foreach ($articles as $article) {
            if($this->check($article->title, $req) || $this->check($article->content, $req)) {
                array_push($result, $article);
            }
        }
        return $result;
    }

    private function check($haystack, $needle) : bool {
        if(str_contains($haystack, $needle)
            ||str_contains($haystack, strtolower($needle))
            || str_contains($haystack, strtoupper($needle))
            || str_contains($haystack, $this->strcapitalize($needle))) {
            return true;
        } else {
            return false;
        }
    }

    private function strcapitalize($haystack) : string {
        if(strlen($haystack) > 0) {
            $haystack[0] = strtoupper($haystack[0]);
            return $haystack;
        }else {
            return $haystack;
        }
    }
}
