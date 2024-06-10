<template>
    <div class="section translation-container">
        <h2>Braille a Español</h2>
        <div class="translation-box">
            <textarea v-model="brailleInput" placeholder="Introducir texto en Braille"></textarea>
            <ul class="button-list">
                <li class="left-button"><button @click="deleatText" class="clear-button">Eliminar texto</button></li>
                <li class="right-button"><button @click="translateBrailleToSpanish">Traducir</button></li>
            </ul>
        </div>
        <div class="result-box">
            <p>{{ brailleToSpanishResult }}</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'BrailleToEspanol',
    data() {
        return {
            brailleInput: '',
            brailleToSpanishResult: ''
        };
    },
    methods: {
        translateBrailleToSpanish() {
            axios.post('/translate-to-espanol', { text: this.brailleInput })
                .then(response => {
                    this.brailleToSpanishResult = response.data.espanol;
                })
                .catch(error => {
                    console.error(error);
                });
        },
        deleatText() {
            this.brailleInput = '';
            this.brailleToSpanishResult = '';
        }
    }
}
</script>
