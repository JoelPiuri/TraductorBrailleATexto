<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Translation;
use Illuminate\Support\Facades\Log;

class TranslationController extends Controller
{
    public function translateToBraille(Request $request)
    {
        try {
            $text = $request->input('text');
            Log::info("Received text for translation: $text");
            $braille = $this->convertToBraille($text);
            Log::info("Translated to braille: $braille");
            return response()->json(['braille' => $braille]);
        } catch (\Exception $e) {
            Log::error("Error translating text: " . $e->getMessage());
            return response()->json(['error' => 'Translation failed'], 500);
        }
    }

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

    private function convertToBraille($text)
    {
        $brailleText = '';
        $translationModel = new Translation();
        $translationModel->setTable('translations');
        $uppercaseMarker = '⠨';  // Braille indicator for uppercase letters
        $numberMarker = '⠼';     // Braille indicator for numbers
        $isNumberSequence = false;

        for ($i = 0; $i < mb_strlen($text); $i++) {
            $char = mb_substr($text, $i, 1);

            // Detect if the character is a number
            if (is_numeric($char)) {
                if (!$isNumberSequence) {
                    $brailleText .= $numberMarker;
                    $isNumberSequence = true;
                }
            } else {
                $isNumberSequence = false;
            }

            // Detect uppercase letters
            if (ctype_upper($char)) {
                $brailleText .= $uppercaseMarker;
                $char = mb_strtolower($char);
            }

            Log::info("Translating character: $char");
            $translation = $translationModel::where('caracterEspanol', $char)->first();
            
            error_log("que es: " . print_r($translation, true));

            if ($translation) {
                $brailleText .= $translation->braille;
            } else {
                Log::warning("Character not found: $char");
                $brailleText .= '?'; // O cualquier otro marcador para caracteres no encontrados
            }
        }

        return $brailleText;
    }

        private function convertToText($braille)
    {
        $text = '';
        $uppercaseMarker = '⠨';  // Braille indicator for uppercase letters
        $numberMarker = '⠼';     // Braille indicator for numbers
        $isUppercase = false;
        $isNumberSequence = false;
        $translationModel = new Translation();
        $translationModel->setTable('translationsBrailleEsp');

        // Limpiar la cadena de entrada de espacios en blanco
        //$braille = trim($braille);

        // Validar que $braille contenga solo caracteres Braille válidos
        /*
        if (!preg_match('/^[ ⠀⠁-⣿]*$/', $braille)) {
            echo "Input is not a valid Braille string";
            return '';
        }
            */

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

            
            $translation = $translationModel::where('braille', $string)->first();
            if ($translation) {
                $translatedChar = $translation->character;

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
                        //echo "Expected a number but found: $translatedChar";
                        $text .= '?'; // O cualquier otro marcador para caracteres no encontrados
                    }
                    $isNumberSequence = false;
                } else {
                    $text .= $translatedChar;
                }
            } else {
                //echo "Braille character not found: $string";
                $text .= '?'; // O cualquier otro marcador para caracteres no encontrados
            }
        }

        return $text;
    }

    
    

    
    


}
