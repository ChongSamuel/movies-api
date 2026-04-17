<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

use App\Models\Category;

class MovieController extends Controller
{

    public function apiIndex()
    {
        return Movie::with('category')->get();
    } 

    public function index()
    {
        $movies = Movie::with('category')->get();

        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.movies.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2100',
            'category_id' => 'required|exists:categories,id',
        ]);

        Movie::create($request->all());

        return redirect('/admin/movies')->with('success', 'Película guardada');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $categories = Category::all();

        return view('admin.movies.edit', compact('movie', 'categories'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2100',
            'category_id' => 'required|exists:categories,id',
        ]);

        $movie = Movie::findOrFail($id);

        $movie->update($request->all());

        return redirect('/admin/movies')->with('success', 'Película actualizada');;
    }

    public function destroy($id)
    {

        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect('/admin/movies')->with('success', 'Película eliminada');;
    }
}
