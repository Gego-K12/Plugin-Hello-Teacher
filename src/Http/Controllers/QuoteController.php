<?php

namespace Gegok12\HelloTeacher\Http\Controllers;

use Gegok12\HelloTeacher\Models\MotivationalQuote;
use Illuminate\Routing\Controller;

class QuoteController extends Controller
{
    public function index()
    {
        $quote = MotivationalQuote::getRandomQuote();

        return view('helloTeacher::quote.index', [
            'quote' => $quote,
        ]);
    }

    public function byCategory($category)
    {
        $quote = MotivationalQuote::getRandomByCategory($category);

        return view('helloTeacher::quote.show', [
            'quote' => $quote,
            'category' => $category,
        ]);
    }
}
