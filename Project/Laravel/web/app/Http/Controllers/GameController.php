<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function show($id)
    {
        // Get game data
        $game = DB::table('games')
            ->where('id', $id)
            ->first();
        
        // Get game categories (assuming you have a game_categories table)
        $categories = DB::table('game_categories')
            ->join('categories', 'game_categories.category_id', '=', 'categories.id')
            ->where('game_categories.game_id', $id)
            ->pluck('categories.name')
            ->toArray();
            
        // Get game images
        $images = DB::table('game_images')
            ->where('game_id', $id)
            ->orderBy('title_image')
            ->get();
            
        return view('product', [
            'game' => $game,
            'categories' => $categories,
            'images' => $images
        ]);
    }
}