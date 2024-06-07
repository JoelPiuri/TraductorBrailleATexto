<template>
    <div class="section translation-container">
        <h2>Braille a Español</h2>
        <div class="translation-box">
            <textarea v-model="brailleInput" placeholder="Introducir texto en Braille"></textarea>
            <button @click="translateBrailleToSpanish">Traducir</button>
        </div>
        <div class="result-box">
            <p>{{ brailleToSpanishResult }}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'HomePage',
    data() {
        return {
            brailleInput: '',
            brailleToSpanishResult: ''
        };
    },
    methods: {
        translateBrailleToSpanish() {

            this.brailleToSpanishResult = 'Traducción simulada';
        }
    }
}
</script>