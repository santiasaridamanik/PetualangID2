<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::latest()->paginate(10);
        return view('destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('destinations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'description' => 'required',
            'image_url' => 'required|url',
            'location' => 'required|max:255'
        ]);

        Destination::create($request->all());
        
        return redirect()->route('destinations.index')
                        ->with('success', 'Destinasi berhasil ditambahkan!');
    }

    public function show(Destination $destination)
    {
        return view('destinations.show', compact('destination'));
    }

    public function edit(Destination $destination)
    {
        return view('destinations.edit', compact('destination'));
    }

    public function update(Request $request, Destination $destination)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'description' => 'required',
            'image_url' => 'required|url',
            'location' => 'required|max:255'
        ]);

        $destination->update($request->all());
        
        return redirect()->route('destinations.index')
                        ->with('success', 'Destinasi berhasil diupdate!');
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();
        
        return redirect()->route('destinations.index')
                        ->with('success', 'Destinasi berhasil dihapus!');
    }
}