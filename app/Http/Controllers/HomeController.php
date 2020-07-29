<?php

namespace App\Http\Controllers;

use App\User;
use App\Document;
use App\DocumentGroup;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $documentGroups = DocumentGroup::all();

        return view('home', compact('documentGroups'));
    }

    public function createClient(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $request['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';

        $request['remember_token'] = Str::random(10);

        User::create($request->all());

        return back()->with('success', 'Sikeres ügyfél regisztráció!');
    }

    public function createDocumentGroup(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $request['slug'] = Str::slug($request->name);

        DocumentGroup::create($request->only(['slug', 'name']));

        return back()->with('success', 'Sikeres dokumentum csoport létrehozás!');
    }

    public function uploadDocument(Request $request)
    {
        $request->validate([
            'document_group_id' => 'required',
            'name' => 'required',
            'file' => 'required'
        ]);

        $request['slug'] = Str::slug($request->name);

        $request['document_path'] = $this->uploadFile($request->only('file', 'slug'));

        Document::create($request->only(['document_group_id', 'slug', 'name', 'document_path']));

        return back()->with('success', 'Sikeres dokumentum csoport létrehozás!');
    }

    public function uploadFile($request)
    {
        $fileName = $request['slug'] . '.' . $request['file']->extension();
        $request['file']->storeAs('public/documents', $fileName);

        return '/documents/' . $fileName;
    }
}
