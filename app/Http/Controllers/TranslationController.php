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

    private function convertToBraille($text)
    {
        $text = strtolower($text);
        $brailleText = '';

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
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
