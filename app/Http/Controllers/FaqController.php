<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return view('pages.client.faq.index');
    }

    public function show($slug)
    {
        $questions = __('faq.questions');
        
        if (!array_key_exists($slug, $questions)) {
            abort(404);
        }

        return view('pages.client.faq.show', compact('slug'));
    }
}