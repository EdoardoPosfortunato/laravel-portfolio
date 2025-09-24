<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Portfolio::all();
        $type = Type::all();

        return view("bacheca", compact('projects', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $types = Type::all();

        return view("formCreate", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->all();


        $newProject = new Portfolio();

        $newProject->titolo = $data["titolo"];
        $newProject->descrizione = $data["descrizione"];
        $newProject->tecnologie = $data["tecnologie"];
        $newProject->type_id = $data["type_id"];
        $newProject->link = $data["link"];

        $newProject->save();

        return redirect()->route("portfolio.index");


    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view("singleProject", compact("portfolio"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {

        $types = Type::all();

        return view("projectUpdate", compact("portfolio", "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->all();


        $portfolio->titolo = $data["titolo"];
        $portfolio->descrizione = $data["descrizione"];
        $portfolio->tecnologie = $data["tecnologie"];
        $portfolio->type_id = $data["type_id"];
        $portfolio->link = $data["link"];

        $portfolio->update();

        return redirect()->route("portfolio.show", $portfolio);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route("portfolio.index");
    }
}
