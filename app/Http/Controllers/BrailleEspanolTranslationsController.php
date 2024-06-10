<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;
use Illuminate\Support\Facades\Log;

class BrailleEspanolTranslationsController extends Controller
{
    
    public function translateToEspanol(Request $request)
    {
        try {
            $text = $request->input('text');
            Log::info("Received text for translation: $text");
            $espanol = $this->convertToText($text);
            Log::info("Translated to espanol: $espanol");
            return response()->json(['espanol' => $espanol]);
        } catch (\Exception $e) {
            Log::error("Error translating text: " . $e->getMessage());
            return response()->json(['error' => 'Translation failed'], 500);
        }
    }


    private function convertToText($braille)
    {
        $text = '';
        $uppercaseMarker = '⠨';  // Braille indicator for uppercase letters
        $numberMarker = '⠼';     // Braille indicator for numbers
        $spaceMarker = '  ';      // Braille indicator for space (two spaces)
        $isUppercase = false;
        $isNumberSequence = false;
    
        $brailleLength = mb_strlen($braille);
    
        for ($i = 0; $i < $brailleLength; $i++) {
            $string = mb_substr($braille, $i, 1);
    
            // Detectar indicador de mayúsculas
            if ($string === $uppercaseMarker) {
                $isUppercase = true;
                continue;
            }
    
            // Detectar indicador de números
            if ($string === $numberMarker) {
                $isNumberSequence = true;
                continue;
            }
    
            // Detectar espacio en blanco (dos celdas vacías)
            if ($string === ' ') {
                $text .= ' '; // Agregar un espacio en blanco al texto
                continue;
            }
    
            $translation = Translation::where('braille', $string)->first();
    
            // Intentar con el siguiente carácter si no se encontró traducción
            if (!$translation && $i < $brailleLength - 1) {
                $nextChar = mb_substr($braille, $i + 1, 1);
                $combinedString = $string . $nextChar;
                $translation = Translation::where('braille', $combinedString)->first();
                if ($translation) {
                    $i++; // Avanzar el índice para evitar duplicados
                }
            }
    
            if ($translation) {
                $translatedChar = $translation->caracterEspanol;
    
                // Manejar letras mayúsculas
                if ($isUppercase) {
                    $translatedChar = mb_strtoupper($translatedChar);
                    $isUppercase = false;
                }
    
                // Manejar números
                if ($isNumberSequence) {
                    if (is_numeric($translatedChar)) {
                        $text .= $translatedChar;
                    } else {
                        $text .= '?'; // O cualquier otro marcador para caracteres no encontrados
                    }
                    $isNumberSequence = false;
                } else {
                    $text .= $translatedChar;
                }
            } else {
                // Si no se encuentra la traducción, agregar un marcador de caracter no encontrado
                $text .= '?';
            }
        }
    
        return $text;
    }
    


}
