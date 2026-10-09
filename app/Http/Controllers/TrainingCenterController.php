<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TrainingCenterController extends Controller
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

        $trainingcenters = $this->fetchDataFromApi($url . '/trainingcenter');

        return view('TrainingCenter.index', compact('trainingcenters'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $trainingcenter = $this->fetchDataFromApi($url . '/trainingcenter/' . $id);

        return view('TrainingCenter.show', compact('trainingcenter'));
    }
         public function create()
    {
        return view('TrainingCenter.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/trainingcenter', $request->all());

        return redirect()->route('trainingcenter.index');
    }

        public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $trainingcenter = $this->fetchDataFromApi($url . '/trainingcenter/' . $id);
        return view('TrainingCenter.edit', compact('trainingcenter'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/trainingcenter/' . $id, $request->all());

        return redirect()->route('trainingcenter.index');
    }

      public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/trainingcenter/' . $id);
        return redirect()->route('trainingcenter.index');
    }
}
