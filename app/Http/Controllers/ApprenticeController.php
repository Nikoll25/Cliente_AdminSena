<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApprenticeController extends Controller
{
 // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()   //http://api.codersfree.test/v1/categories?included=posts
    {

        $url = env('URL_SERVER_API');

        $apprentices = $this->fetchDataFromApi($url . '/apprentice');
        // return $categories;
        return view('Apprentice.index', compact('apprentices'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $apprentice = $this->fetchDataFromApi($url . '/apprentice/' . $id);

        return view('Apprentice.show', compact('apprentice'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $courses = Http::get($url .'/course')->json();
        $computers = Http::get($url .'/computer')->json();

        return view('Apprentice.create',compact('courses','computers'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/apprentice', $request->all());

        return redirect()->route('apprentice.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $apprentice = $this->fetchDataFromApi($url . '/apprentice/' . $id);
        $courses = Http::get($url .'/course')->json();
        $computers = Http::get($url .'/computer')->json();
        return view('Apprentice.edit', compact('apprentice', 'courses', 'computers'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/apprentice/' . $id, $request->all());

        return redirect()->route('apprentice.index');
    }

      public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/apprentice/' . $id);
        return redirect()->route('apprentice.index');
    }
    }
