<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
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

        $courses = $this->fetchDataFromApi($url . '/course');
        // return $categories;
        return view('Course.index', compact('courses'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $course = $this->fetchDataFromApi($url . '/course/' . $id);

        return view('Course.show', compact('course'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = Http::get($url .'/area')->json();
        $trainingcenters = Http::get($url .'/trainingcenter')->json();

        return view('Course.create',compact('areas','trainingcenters'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/course', $request->all());

        return redirect()->route('course.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $course = $this->fetchDataFromApi($url . '/course/' . $id);
        $areas = Http::get($url .'/area')->json();
        $trainingcenters = Http::get($url .'/trainingcenter')->json();
        return view('Course.edit', compact('course', 'areas', 'trainingcenters'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/course/' . $id, $request->all());

        return redirect()->route('course.index');
    }

      public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/course/' . $id);
        return redirect()->route('course.index');
    }
}
