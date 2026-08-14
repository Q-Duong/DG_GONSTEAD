<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = __('insights.articles');

        return view('pages.client.insights.index', compact('articles'));
    }

    public function show($slug)
    {
        if (!array_key_exists($slug, __('insights.articles'))) {
            abort(404);
        }

        return view('pages.client.insights.show', compact('slug'));
    }
}