<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $services = config('site.services');

        return view('pages.index', compact('services'));
    }

    public function documents()
    {
        $documents = Document::all();

        return view('pages.documents', compact('documents'));
    }
}
