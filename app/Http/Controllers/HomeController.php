<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::latest()->take(3)->get();
        $testimonials = Testimonial::active()->whereNotNull('image')->latest()->take(3)->get();
        return view('pages.client.home', compact('blogs', 'testimonials'));
    }

    public function aboutUsIndex()
    {
        return view('pages.client.about_us.index');
    }

    public function legalIndex()
    {
        return view('pages.client.legal.index');
    }

    public function teamExpertsIndex()
    {
        return view('pages.client.team.index');
    }

    public function servicesIndex()
    {
        return view('pages.client.services.index');
    }

    public function testimonialsIndex()
    {
        return view('pages.client.testimonials.index');
    }

    public function servicesShow($slug)
    {
        $services = __('services.list');

        if (!is_array($services) || !array_key_exists($slug, $services)) {
            abort(404);
        }

        return view('pages.client.services.show', compact('slug'));
    }

    public function contactIndex()
    {
        return view('pages.client.contact.index');
    }
}
