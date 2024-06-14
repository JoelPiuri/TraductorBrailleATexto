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
        ['braille' => '⠁', 'caracterEspanol' => 'a', 'tipoCaracter' => 'letra'],
        ['braille' => '⠃', 'caracterEspanol' => 'b','tipoCaracter' => 'letra'],
        ['braille' => '⠉', 'caracterEspanol' => 'c','tipoCaracter' => 'letra'],
        ['braille' => '⠙', 'caracterEspanol' => 'd','tipoCaracter' => 'letra'],
        ['braille' => '⠑', 'caracterEspanol' => 'e','tipoCaracter' => 'letra'],
        ['braille' => '⠋', 'caracterEspanol' => 'f','tipoCaracter' => 'letra'],
        ['braille' => '⠛', 'caracterEspanol' => 'g','tipoCaracter' => 'letra'],
        ['braille' => '⠓', 'caracterEspanol' => 'h','tipoCaracter' => 'letra'],
        ['braille' => '⠊', 'caracterEspanol' => 'i','tipoCaracter' => 'letra'],
        ['braille' => '⠚', 'caracterEspanol' => 'j','tipoCaracter' => 'letra'],
        ['braille' => '⠅', 'caracterEspanol' => 'k','tipoCaracter' => 'letra'],
        ['braille' => '⠇', 'caracterEspanol' => 'l','tipoCaracter' => 'letra'],
        ['braille' => '⠍', 'caracterEspanol' => 'm','tipoCaracter' => 'letra'],
        ['braille' => '⠝', 'caracterEspanol' => 'n','tipoCaracter' => 'letra'],
        ['braille' => '⠕', 'caracterEspanol' => 'o','tipoCaracter' => 'letra'],
        ['braille' => '⠏', 'caracterEspanol' => 'p','tipoCaracter' => 'letra'],
        ['braille' => '⠟', 'caracterEspanol' => 'q','tipoCaracter' => 'letra'],
        ['braille' => '⠗', 'caracterEspanol' => 'r','tipoCaracter' => 'letra'],
        ['braille' => '⠎', 'caracterEspanol' => 's','tipoCaracter' => 'letra'],
        ['braille' => '⠞', 'caracterEspanol' => 't','tipoCaracter' => 'letra'],
        ['braille' => '⠥', 'caracterEspanol' => 'u','tipoCaracter' => 'letra'],
        ['braille' => '⠧', 'caracterEspanol' => 'v','tipoCaracter' => 'letra'],
        ['braille' => '⠺', 'caracterEspanol' => 'w','tipoCaracter' => 'letra'],
        ['braille' => '⠭', 'caracterEspanol' => 'x','tipoCaracter' => 'letra'],
        ['braille' => '⠽', 'caracterEspanol' => 'y','tipoCaracter' => 'letra'],
        ['braille' => '⠵', 'caracterEspanol' => 'z','tipoCaracter' => 'letra'],
        ['braille' => '  ', 'caracterEspanol' => ' ','tipoCaracter' => 'espacio'],
        //Tilde
        ['braille' => '⠁', 'caracterEspanol' => 'á','tipoCaracter' => 'vocalConTilde'],
        ['braille' => '⠑', 'caracterEspanol' => 'é','tipoCaracter' => 'vocalConTilde'],
        ['braille' => '⠊', 'caracterEspanol' => 'í','tipoCaracter' => 'vocalConTilde'],
        ['braille' => '⠕', 'caracterEspanol' => 'ó','tipoCaracter' => 'vocalConTilde'],
        ['braille' => '⠥', 'caracterEspanol' => 'ú','tipoCaracter' => 'vocalConTilde'],
        ['braille' => '⠈', 'caracterEspanol' => 'ü','tipoCaracter' => 'vocalConTilde'],
        // Números
        ['braille' => '⠁', 'caracterEspanol' => '1','tipoCaracter' => 'numero'],
        ['braille' => '⠃', 'caracterEspanol' => '2','tipoCaracter' => 'numero'],
        ['braille' => '⠉', 'caracterEspanol' => '3','tipoCaracter' => 'numero'],
        ['braille' => '⠙', 'caracterEspanol' => '4','tipoCaracter' => 'numero'],
        ['braille' => '⠑', 'caracterEspanol' => '5','tipoCaracter' => 'numero'],
        ['braille' => '⠋', 'caracterEspanol' => '6','tipoCaracter' => 'numero'],
        ['braille' => '⠛', 'caracterEspanol' => '7','tipoCaracter' => 'numero'],
        ['braille' => '⠓', 'caracterEspanol' => '8','tipoCaracter' => 'numero'],
        ['braille' => '⠊', 'caracterEspanol' => '9','tipoCaracter' => 'numero'],
        ['braille' => '⠚', 'caracterEspanol' => '0','tipoCaracter' => 'numero'],
        // Símbolos
        ['braille' => '⠲', 'caracterEspanol' => '.','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠂', 'caracterEspanol' => ',','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠆', 'caracterEspanol' => ';','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠒', 'caracterEspanol' => ':','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠖', 'caracterEspanol' => '!','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠦', 'caracterEspanol' => '?','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠶', 'caracterEspanol' => '(','tipoCaracter' => 'caracterEspecial'],
        // ['braille' => '⠶', 'caracterEspanol' => ')'], // eliminar esta línea
        ['braille' => '⠤', 'caracterEspanol' => '-','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠌', 'caracterEspanol' => '/','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠈⠁', 'caracterEspanol' => '@','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠼', 'caracterEspanol' => '#','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠯', 'caracterEspanol' => '&','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠡', 'caracterEspanol' => '*','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠐⠦', 'caracterEspanol' => '"','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠄', 'caracterEspanol' => "'",'tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠿', 'caracterEspanol' => '=','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠐⠖', 'caracterEspanol' => '+','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠐⠶', 'caracterEspanol' => '<','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠰⠶', 'caracterEspanol' => '>','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠈⠎', 'caracterEspanol' => '$','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠨⠴', 'caracterEspanol' => '%','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠘⠡', 'caracterEspanol' => '^','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠤', 'caracterEspanol' => '_','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠨⠶', 'caracterEspanol' => '[','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠨⠶', 'caracterEspanol' => ']','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠦⠶', 'caracterEspanol' => '{','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠶⠦', 'caracterEspanol' => '}','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠸⠌', 'caracterEspanol' => '\\','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠸⠶', 'caracterEspanol' => '|','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠘⠹', 'caracterEspanol' => '~','tipoCaracter' => 'caracterEspecial'],
        ['braille' => '⠐', 'caracterEspanol' => '`','tipoCaracter' => 'caracterEspecial'],
        
    ];

    DB::table('translationsBrailleEsp')->insert($translationsBrailleEsp);

    }
}
