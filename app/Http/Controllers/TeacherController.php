<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TeacherController extends Controller
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

        $teachers = $this->fetchDataFromApi($url . '/teacher');
        // return $categories;
        return view('Teacher.index', compact('teachers'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $teacher = $this->fetchDataFromApi($url . '/teacher/' . $id);

        return view('Teacher.show', compact('teacher'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = Http::get($url .'/area')->json();
        $trainingcenters = Http::get($url .'/trainingcenter')->json();

        return view('Teacher.create',compact('areas','trainingcenters'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/teacher', $request->all());

        return redirect()->route('teacher.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $teacher = $this->fetchDataFromApi($url . '/teacher/' . $id);
        $areas = Http::get($url .'/area')->json();
        $trainingcenters = Http::get($url .'/trainingcenter')->json();
        return view('Teacher.edit', compact('teacher', 'areas', 'trainingcenters'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/teacher/' . $id, $request->all());

        return redirect()->route('teacher.index');
    }

      public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/teacher/' . $id);
        return redirect()->route('teacher.index');
    }
}
