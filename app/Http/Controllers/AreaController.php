<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AreaController extends Controller
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

        $areas = $this->fetchDataFromApi($url . '/area');

        return view('Area.index', compact('areas'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $area = $this->fetchDataFromApi($url . '/area/' . $id);

        return view('Area.show', compact('area'));
    }

    public function create()
    {
        return view('Area.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/area', $request->all());

        return redirect()->route('area.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $area = $this->fetchDataFromApi($url . '/area/' . $id);
        return view('Area.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/area/' . $id, $request->all());

        return redirect()->route('area.index');
    }

      public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/area/' . $id);
        return redirect()->route('area.index');
    }
}
