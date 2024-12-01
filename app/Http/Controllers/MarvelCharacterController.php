<?php

namespace App\Http\Controllers;

use App\Models\MarvelCharacter;
use Illuminate\Http\Request;

class MarvelCharacterController extends Controller {
    public function getAllHeroes(Request $request) {
        try {
            $offset = $request->input('offset', 0); // default 0
            $limit = $request->input('limit', 10); // default 10

            $marvelCharacters = MarvelCharacter::offset($offset)->limit($limit)->get();

            return response()->json([
                'result' => true,
                'data' => $marvelCharacters
            ]);
        } catch (\Throwable $error) {
            return response()->json([
                'result' => false,
                'error' => $error->getMessage()
            ]);
        }

    }

    public function getHeroById($id) {
        try {
            $marvelCharacter = MarvelCharacter::find($id);

            if (!$marvelCharacter) {
                throw new \Exception('Персонаж по данному ID не найден!');
            }

            return response()->json([
                'result' => true,
                'data' => $marvelCharacter
            ]);
        } catch (\Throwable $error) {
            return response()->json([
                'result' => false,
                'error' => $error->getMessage()
            ]);
        }
    }
}
