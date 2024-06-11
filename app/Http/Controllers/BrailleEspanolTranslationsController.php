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
        $uppercaseMarker = '⠨';  // Indicador Braille para letras mayúsculas
        $numberMarker = '⠼';     // Indicador Braille para números
        $isUppercase = false;
        $isNumberSequence = false;
    
        $translationModel = new Translation();
        $translationModel->setTable('translationsBrailleEsp');
    
        Log::info("Recibo de texto: $braille");
        $brailleLength = mb_strlen($braille);
        Log::info("Antes de mbStrlen: $brailleLength");
    
        for ($i = 0; $i < $brailleLength; $i++) {
            $string = mb_substr($braille, $i, 1);
            Log::info("Procesando carácter Braille: $string, es número: $isNumberSequence, es mayúscula: $isUppercase");
    
            // Detectar indicador de mayúsculas
            if ($string === $uppercaseMarker) {
                $isUppercase = true;
                Log::info("Indicador de mayúsculas detectado");
                continue;
            }
    
            // Detectar indicador de números
            if ($string === $numberMarker) {
                $isNumberSequence = true;
                Log::info("Indicador de números detectado");
                continue;
            }
    
            // Detectar espacio en blanco (una celda vacía)
            if ($string === ' ') {
                $isNumberSequence = false;  // Restablecer la secuencia de números al encontrar un espacio
                $text .= ' '; // Agregar un espacio en blanco al texto
                Log::info("Espacio en blanco detectado, restablecer secuencia de números");
                continue;
            }
    
            // Comprobar si el carácter Braille actual forma parte de un carácter especial de más de una celda
            $multiChar = $string;
            if ($i + 1 < $brailleLength) {
                $nextString = mb_substr($braille, $i + 1, 1);
                $multiChar .= $nextString;
            }
    
            $translation = $translationModel::where('braille', $multiChar)->first();
    
            if ($translation) {
                $translatedChar = $translation->caracterEspanol;
                $i++; // Saltar el siguiente carácter porque ya fue procesado como parte del carácter especial
                Log::info("Carácter especial traducido: $translatedChar");
            } else {
                // Si no es un carácter especial, comprobar el carácter individual
                $translation = $translationModel::where('braille', $string)->first();
                if ($translation) {
                    $translatedChar = $translation->caracterEspanol;
                    Log::info("Carácter traducido: $translatedChar");
                } else {
                    // Si no se encuentra la traducción, agregar un marcador de carácter no encontrado
                    $translatedChar = '?';
                    Log::info("No se encontró traducción para: $string, marcador especial añadido: ?");
                }
            }
    
            // Manejar letras mayúsculas
            if ($isUppercase) {
                $translatedChar = mb_strtoupper($translatedChar);
                $isUppercase = false;
                Log::info("Aplicar mayúscula: $translatedChar");
            }
    
            $text .= $translatedChar;
            Log::info("Carácter añadido: $translatedChar");
        }
    
        Log::info("Texto final: $text");
        return $text;
    }
    
    


}
