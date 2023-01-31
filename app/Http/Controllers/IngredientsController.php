<?php

namespace App\Http\Controllers;

use App\Http\Requests\Ingredients\StoreRequest;
use App\Http\Requests\Ingredients\UpdateRequest;
use App\Models\Ingredient;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class IngredientsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $ingredients = Ingredient::all();

        return view('ingredients.list', compact('ingredients'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('ingredients.form');
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $ingredient = new Ingredient($request->all());
        $ingredient->save();

        return redirect()
            ->route('ingredients')
            ->with('message', 'Ингридиент успешно создан');
    }

    /**
     * @param Ingredient $ingredient
     * @return View
     */
    public function edit(Ingredient $ingredient): View
    {
        return view('ingredients.form', compact('ingredient'));
    }

    /**
     * @param UpdateRequest $request
     * @param Ingredient $ingredient
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Ingredient $ingredient): RedirectResponse
    {
        $ingredient->fill($request->all());
        $ingredient->save();

        return redirect()
            ->route('ingredients')
            ->with('message', 'Ингридиент #' . $ingredient->id . ' успешно изменен');
    }

    /**
     * @param Ingredient $ingredient
     * @return RedirectResponse
     */
    public function delete(Ingredient $ingredient): RedirectResponse
    {
        $ingredient->delete();

        return redirect()
            ->route('ingredients')
            ->with('message', 'Ингридиент "' . $ingredient->title . '" успешно удален');
    }

}
