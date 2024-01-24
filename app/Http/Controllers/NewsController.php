<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function getNews()
    {
        $apiKey = '9a935b503bdd4aa69ba80ead344c6053';
        $url = "https://newsapi.org/v2/top-headlines?country=us&apiKey={$apiKey}";

        $response = Http::get($url);

        if ($response->failed()) {
            // Handle the request failure here, e.g., log an error or return an error response.
            return response('Failed to fetch data from the News API', 500);
        }

        $newsData = $response->json();

        return view('articles-insights', ['NewsData' => $newsData]);
    }
}