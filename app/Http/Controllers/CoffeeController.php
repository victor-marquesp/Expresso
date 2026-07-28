<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $coffee->update($validated);

        return redirect()->route('coffees.index')->with('success', 'café editado');
    }

    public function destroy(Coffee $coffee)
    {
        $coffee->delete();

        return redirect()->route('coffees.index')->with('success', 'café deletado');
    }
}
