<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $locale = app()->currentLocale();
        $data = Post::with(['postTranslations' => function($query) use($locale) {
            $query->where('locale', $locale);
        }])->get();
        
        return view('home', ['data' => $data]);
    }
}
