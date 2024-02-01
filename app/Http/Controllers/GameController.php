<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('game.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $game = Game::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'img' => $request->file('img')->store('/public/game/images'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect(route('game_index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        
        return view('game.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('game.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $game->update([
            $game->name = $request->name,
            $game->category = $request->category,
            $game->description = $request->description,
        ]);

        if($request->img){
            $game->img = $request->file('img')->store('/public/game/images');
            $game->save();
        }

        return redirect(route("game_index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect(route('game_index'));
    }
}
