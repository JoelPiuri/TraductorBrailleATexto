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
        $brailleTextInput = $request->input('brailleTextInput'); // Cambiado de text a brailleTextInput
        $espanol = $this->convertToText($brailleTextInput);
        return response()->json(['espanol' => $espanol]);
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

            $translationModel = new Translation();
            $translationModel->setTable('translation');

            $translation = $translationModel::where('character', $char)->first();
            if ($translation) {
                $brailleText .= $translation->braille;
            } else {
                $brailleText .= '?'; // O cualquier otro marcador para caracteres no encontrados
            }
        }

        return $brailleText;
    }

    private function convertToText($brailleTextInput)
{
    $textOutput = '';
    $translationModel = new Translation();
    $translationModel->setTable('translationsBrailleEsp');

    // Variable para mantener la traducción actual
    $currentTranslation = '';

    // Obtener todas las traducciones de braille a texto de una vez
    $translations = $translationModel->all()->keyBy('braille');

    for ($i = 0; $i < strlen($brailleTextInput); $i++) {
        $char = $brailleTextInput[$i];

        if ($char === '⠠') {
            // Cambio a mayúscula
            $currentTranslation .= strtoupper($brailleTextInput[++$i]);
        } else {
            $currentTranslation .= $char;
        }

        // Buscar la traducción actual en las traducciones previamente obtenidas
        if (isset($translations[$currentTranslation])) {
            $textOutput .= $translations[$currentTranslation]->character;
            $currentTranslation = ''; // Reiniciar la traducción actual
        } else {
            // Si no se encuentra la traducción, continuar construyendo la traducción actual
            // en caso de que sea una cadena de braille más larga
        }
    }

    return $textOutput;
}

}

