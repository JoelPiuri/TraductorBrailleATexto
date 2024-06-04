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

    public function translateToEspanol(Request $request)
    {
        $text = $request->input('text');
        $espanol = $this->convertToEspanol($text);
        return response()->json(['' => $espanol]);
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

    private function convertToText($brailleText)
    {
        $textOutput = '';
        $uppercaseMarker = '⠠';
    
        for ($i = 0; $i < strlen($brailleText); $i++) {
            $char = $brailleText[$i];
    
            if ($char === $uppercaseMarker) {
                // Siguiente carácter será en mayúscula
                $i++;
                $char = strtoupper($brailleText[$i]);
            }
    
            $translation = Translation::where('braille', $char)->first();
            if ($translation) {
                $textOutput .= $translation->character;
            } else {
                $textOutput .= '?'; // Carácter no encontrado en la tabla de traducción
            }
        }
    
        return $textOutput;
    }

}

