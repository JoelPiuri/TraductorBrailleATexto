<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;

class TranslationController extends Controller
{
    public function translateToBraille(Request $request)
    {
        $text = $request->input('text');
        $braille = $this->convertToBraille($text);
        return response()->json(['braille' => $braille]);
    }

    private function convertToBraille($text)
    {
        $brailleText = '';
        $uppercaseMarker = '⠠';  // Braille indicator for uppercase letters

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (ctype_upper($char)) {
                $brailleText .= $uppercaseMarker;
                $char = strtolower($char);
            }

            $translation = Translation::where('character', $char)->first();
            if ($translation) {
                $brailleText .= $translation->braille;
            } else {
                $brailleText .= '?'; // O cualquier otro marcador para caracteres no encontrados
            }
        }

        return $brailleText;
    }
}

