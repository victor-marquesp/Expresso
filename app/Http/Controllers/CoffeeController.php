<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Coffee;
use App\Http\Requests\StoreCoffeeRequest;
use App\Http\Requests\UpdateCoffeeRequest;

class CoffeeController extends Controller
{

    public function index()
    {
        $coffees = Coffee::all();
        return view('coffee.index', ['coffees' => $coffees]);
    }

    public function create()
    {
        return view('coffee.create');
    }

    public function store(StoreCoffeeRequest $request)
    {
        $validated = $request->validated();

        if($request->hasFile('picture')) {
            $path = $request->file('picture')->store('coffees', 'public');
            $validated['picture_path'] = $path;
        }

        Coffee::create($validated);
        
        return redirect()->route('coffees.index')->with('success', 'café criado');
    }

    public function show(Coffee $coffee)
    {
        return view('coffee.show', compact('coffee'));
    }

    public function edit(Coffee $coffee)
    {
        return view('coffee.edit', compact('coffee'));
    }

    public function update(UpdateCoffeeRequest $request, Coffee $coffee)
    {
        $validated = $request->validated();

        if($request->hasFile('picture')) {

            if($coffee->picture_path) {
                Storage::disk('public')->delete($coffee->picture_path);     // Deleta a foto antiga
            }

            $path = $request->file('picture')->store('coffees', 'public');
            $validated['picture_path'] = $path;
        }

        $coffee->update($validated);

        return redirect()->route('coffees.index')->with('success', 'café editado');
    }

    public function destroy(Coffee $coffee)
    {
        if($coffee->picture_path) {
            Storage::disk('public')->delete($coffee->picture_path);
        }

        $coffee->delete();

        return redirect()->route('coffees.index')->with('success', 'café deletado');
    }
}
