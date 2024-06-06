<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationsTableSeeder extends Seeder
{
    public function run()
    {
        // Vaciar la tabla antes de insertar nuevos datos
        DB::table('translations')->truncate();
        $translations = [

            // Minúsculas
            ['caracterEspanol' => 'a', 'braille' => '⠁'],
            ['caracterEspanol' => 'b', 'braille' => '⠃'],
            ['caracterEspanol' => 'c', 'braille' => '⠉'],
            ['caracterEspanol' => 'd', 'braille' => '⠙'],
            ['caracterEspanol' => 'e', 'braille' => '⠑'],
            ['caracterEspanol' => 'f', 'braille' => '⠋'],
            ['caracterEspanol' => 'g', 'braille' => '⠛'],
            ['caracterEspanol' => 'h', 'braille' => '⠓'],
            ['caracterEspanol' => 'i', 'braille' => '⠊'],
            ['caracterEspanol' => 'j', 'braille' => '⠚'],
            ['caracterEspanol' => 'k', 'braille' => '⠅'],
            ['caracterEspanol' => 'l', 'braille' => '⠇'],
            ['caracterEspanol' => 'm', 'braille' => '⠍'],
            ['caracterEspanol' => 'n', 'braille' => '⠝'],
            ['caracterEspanol' => 'ñ', 'braille' => '⠻'],
            ['caracterEspanol' => 'o', 'braille' => '⠕'],
            ['caracterEspanol' => 'p', 'braille' => '⠏'],
            ['caracterEspanol' => 'q', 'braille' => '⠟'],
            ['caracterEspanol' => 'r', 'braille' => '⠗'],
            ['caracterEspanol' => 's', 'braille' => '⠎'],
            ['caracterEspanol' => 't', 'braille' => '⠞'],
            ['caracterEspanol' => 'u', 'braille' => '⠥'],
            ['caracterEspanol' => 'v', 'braille' => '⠧'],
            ['caracterEspanol' => 'w', 'braille' => '⠺'],
            ['caracterEspanol' => 'x', 'braille' => '⠭'],
            ['caracterEspanol' => 'y', 'braille' => '⠽'],
            ['caracterEspanol' => 'z', 'braille' => '⠵'],
            ['caracterEspanol' => 'á', 'braille' => '⠷'],
            ['caracterEspanol' => 'é', 'braille' => '⠮'],
            ['caracterEspanol' => 'í', 'braille' => '⠌'],
            ['caracterEspanol' => 'ó', 'braille' => '⠬'],
            ['caracterEspanol' => 'ú', 'braille' => '⠾'],
            ['caracterEspanol' => 'ü', 'braille' => '⠳'],
            ['caracterEspanol' => ' ', 'braille' => ' '],

            // Signos de puntuación
            ['caracterEspanol' => '.', 'braille' => '⠲'],
            ['caracterEspanol' => ',', 'braille' => '⠂'],
            ['caracterEspanol' => ';', 'braille' => '⠆'],
            ['caracterEspanol' => ':', 'braille' => '⠒'],
            ['caracterEspanol' => '¿', 'braille' => '⠢'],
            ['caracterEspanol' => '¡', 'braille' => '⠖'],
            ['caracterEspanol' => '"', 'braille' => '⠶'],
            ['caracterEspanol' => '(', 'braille' => '⠶'],
            ['caracterEspanol' => ')', 'braille' => '⠶'],
            ['caracterEspanol' => '-', 'braille' => '⠤'],
            ['caracterEspanol' => '/', 'braille' => '⠌'],
            ['caracterEspanol' => '@', 'braille' => '⠈⠁'],
            ['caracterEspanol' => '#', 'braille' => '⠼'],
            ['caracterEspanol' => '&', 'braille' => '⠯'],
            ['caracterEspanol' => '*', 'braille' => '⠡'],
            ['caracterEspanol' => '=', 'braille' => '⠿'],
            ['caracterEspanol' => '+', 'braille' => '⠐⠖'],
            ['caracterEspanol' => '<', 'braille' => '⠐⠶'],
            ['caracterEspanol' => '>', 'braille' => '⠰⠶'],
            ['caracterEspanol' => '$', 'braille' => '⠈⠎'],
            ['caracterEspanol' => '%', 'braille' => '⠨⠴'],
            ['caracterEspanol' => '^', 'braille' => '⠘⠡'],
            ['caracterEspanol' => '_', 'braille' => '⠤'],
            ['caracterEspanol' => '[', 'braille' => '⠨⠶'],
            ['caracterEspanol' => ']', 'braille' => '⠨⠶'],
            ['caracterEspanol' => '{', 'braille' => '⠦⠶'],
            ['caracterEspanol' => '}', 'braille' => '⠶⠦'],
            ['caracterEspanol' => '\\', 'braille' => '⠸⠌'],
            ['caracterEspanol' => '|', 'braille' => '⠸⠶'],
            ['caracterEspanol' => '~', 'braille' => '⠘⠹'],
            ['caracterEspanol' => '`', 'braille' => '⠐'],

            // Números
            ['caracterEspanol' => '1', 'braille' => '⠁'],
            ['caracterEspanol' => '2', 'braille' => '⠃'],
            ['caracterEspanol' => '3', 'braille' => '⠉'],
            ['caracterEspanol' => '4', 'braille' => '⠙'],
            ['caracterEspanol' => '5', 'braille' => '⠑'],
            ['caracterEspanol' => '6', 'braille' => '⠋'],
            ['caracterEspanol' => '7', 'braille' => '⠛'],
            ['caracterEspanol' => '8', 'braille' => '⠓'],
            ['caracterEspanol' => '9', 'braille' => '⠊'],
            ['caracterEspanol' => '0', 'braille' => '⠚'],

            // Signos específicos de otras lenguas oficiales del Estado español
            ['caracterEspanol' => 'à', 'braille' => '⠷'],
            ['caracterEspanol' => 'è', 'braille' => '⠮'],
            ['caracterEspanol' => 'ò', 'braille' => '⠬'],
            ['caracterEspanol' => 'ï', 'braille' => '⠳'],
            ['caracterEspanol' => 'ç', 'braille' => '⠯'],
            //tildes mayusculas
            ['caracterEspanol' => 'Á', 'braille' => '⠨⠷'],
            ['caracterEspanol' => 'É', 'braille' => '⠨⠮'],
            ['caracterEspanol' => 'Í', 'braille' => '⠨⠌'],
            ['caracterEspanol' => 'Ó', 'braille' => '⠨⠬'],
            ['caracterEspanol' => 'Ú', 'braille' => '⠨⠾'],


        ];

        DB::table('translations')->insert($translations);


    DB::table('translationsBrailleEsp')->truncate();
    $translationsBrailleEsp = [
        ['braille' => '⠁', 'character' => 'a'],
        ['braille' => '⠃', 'character' => 'b'],
        ['braille' => '⠉', 'character' => 'c'],
        ['braille' => '⠙', 'character' => 'd'],
        ['braille' => '⠑', 'character' => 'e'],
        ['braille' => '⠋', 'character' => 'f'],
        ['braille' => '⠛', 'character' => 'g'],
        ['braille' => '⠓', 'character' => 'h'],
        ['braille' => '⠊', 'character' => 'i'],
        ['braille' => '⠚', 'character' => 'j'],
        ['braille' => '⠅', 'character' => 'k'],
        ['braille' => '⠇', 'character' => 'l'],
        ['braille' => '⠍', 'character' => 'm'],
        ['braille' => '⠝', 'character' => 'n'],
        ['braille' => '⠕', 'character' => 'o'],
        ['braille' => '⠏', 'character' => 'p'],
        ['braille' => '⠟', 'character' => 'q'],
        ['braille' => '⠗', 'character' => 'r'],
        ['braille' => '⠎', 'character' => 's'],
        ['braille' => '⠞', 'character' => 't'],
        ['braille' => '⠥', 'character' => 'u'],
        ['braille' => '⠧', 'character' => 'v'],
        ['braille' => '⠺', 'character' => 'w'],
        ['braille' => '⠭', 'character' => 'x'],
        ['braille' => '⠽', 'character' => 'y'],
        ['braille' => '⠵', 'character' => 'z'],
        ['braille' => '  ', 'character' => ' '],
        // Números
        ['braille' => '⠁', 'character' => '1'],
        ['braille' => '⠃', 'character' => '2'],
        ['braille' => '⠉', 'character' => '3'],
        ['braille' => '⠙', 'character' => '4'],
        ['braille' => '⠑', 'character' => '5'],
        ['braille' => '⠋', 'character' => '6'],
        ['braille' => '⠛', 'character' => '7'],
        ['braille' => '⠓', 'character' => '8'],
        ['braille' => '⠊', 'character' => '9'],
        ['braille' => '⠚', 'character' => '0'],
        // Símbolos
        ['braille' => '⠲', 'character' => '.'],
        ['braille' => '⠂', 'character' => ','],
        ['braille' => '⠆', 'character' => ';'],
        ['braille' => '⠒', 'character' => ':'],
        ['braille' => '⠖', 'character' => '!'],
        ['braille' => '⠦', 'character' => '?'],
        ['braille' => '⠶', 'character' => '('],
        ['braille' => '⠶', 'character' => ')'],
        ['braille' => '⠤', 'character' => '-'],
        ['braille' => '⠌', 'character' => '/'],
        ['braille' => '⠈⠁', 'character' => '@'],
        ['braille' => '⠼', 'character' => '#'],
        ['braille' => '⠯', 'character' => '&'],
        ['braille' => '⠡', 'character' => '*'],
        ['braille' => '⠐⠦', 'character' => '"'],
        ['braille' => '⠄', 'character' => "'"],
        ['braille' => '⠿', 'character' => '='],
        ['braille' => '⠐⠖', 'character' => '+'],
        ['braille' => '⠐⠶', 'character' => '<'],
        ['braille' => '⠰⠶', 'character' => '>'],
        ['braille' => '⠈⠎', 'character' => '$'],
        ['braille' => '⠨⠴', 'character' => '%'],
        ['braille' => '⠘⠡', 'character' => '^'],
        ['braille' => '⠤', 'character' => '_'],
        ['braille' => '⠨⠶', 'character' => '['],
        ['braille' => '⠨⠶', 'character' => ']'],
        ['braille' => '⠦⠶', 'character' => '{'],
        ['braille' => '⠶⠦', 'character' => '}'],
        ['braille' => '⠸⠌', 'character' => '\\'],
        ['braille' => '⠸⠶', 'character' => '|'],
        ['braille' => '⠘⠹', 'character' => '~'],
        ['braille' => '⠐', 'character' => '`'],
    ];

    DB::table('translationsBrailleEsp')->insert($translationsBrailleEsp);

}
}