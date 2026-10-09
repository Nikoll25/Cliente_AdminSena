<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComputerController extends Controller
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

        $computers = $this->fetchDataFromApi($url . '/computer');

        return view('Computer.index', compact('computers'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $computer = $this->fetchDataFromApi($url . '/computer/' . $id);

        return view('Computer.show', compact('computer'));
    }
        public function create()
    {
        return view('Computer.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/computer', $request->all());

        return redirect()->route('computer.index');
    }

        public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $computer = $this->fetchDataFromApi($url . '/computer/' . $id);
        return view('Computer.edit', compact('computer'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/computer/' . $id, $request->all());

        return redirect()->route('computer.index');
    }

      public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/computer/' . $id);
        return redirect()->route('computer.index');
    }
}
