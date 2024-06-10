<template>
    <div class="section translation-container">
        <h2>Español a Braille</h2>
        <div class="translation-box">
            <textarea v-model="spanishInput" placeholder="Introducir texto en Español"></textarea>
            <ul class="button-list">
                <li class="left-button"><button @click="deleatText" class="clear-button">Eliminar texto</button></li>
                <li class="right-button"><button @click="translateSpanishToBraille">Traducir</button></li>
            </ul>
        </div>
        <div class="result-box">
            <div>
                <h3>Lectura:</h3>
                <p>{{ spanishToBrailleResult }}</p>
                <button @click="saveAsImage" class="otherbutton">Descargar Imagen</button>
            </div>
            <div>
                <h3>Escritura Manual:</h3>
                <p class="mirror-text">{{ spanishToBrailleResult }}</p>
                <button @click="saveAsPDF" class="otherbutton">Descargar PDF</button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "EspanolToBraille",
    data() {
        return {
            spanishInput: '',
            spanishToBrailleResult: ''
        };
    },
    methods: {
        translateSpanishToBraille() {
            axios.post('/translate-to-braille', { text: this.spanishInput })
                .then(response => {
                    this.spanishToBrailleResult = response.data.braille;
                })
                .catch(error => {
                    console.error(error);
                });
        },
        deleatText() {
            this.spanishInput = '';
            this.spanishToBrailleResult = '';
        },
        saveAsImage() {

            if (!this.spanishToBrailleResult) {
                console.error('No braille text to save as image.');
                return;
            }
            axios.post('/download-image', { braille: this.spanishToBrailleResult }, {
                responseType: 'blob'
            }).then(response => {
                const url = window.URL.createObjectURL(new Blob([response.data]));
                const link = document.createElement('a');
                link.href = url;
                link.setAttribute('download', 'translated-text.png');
                document.body.appendChild(link);
                link.click();
                link.remove();
            }).catch(error => {
                console.error('Error downloading image:', error);
            });
        },
        saveAsPDF() {
            axios.get('/download-pdf', {
                params: {
                    text: this.spanishInput
                },
                responseType: 'blob'
            }).then(response => {
                const url = window.URL.createObjectURL(new Blob([response.data]));
                const link = document.createElement('a');
                link.href = url;
                link.setAttribute('download', 'manual-writing.pdf');
                document.body.appendChild(link);
                link.click();
                link.remove();
            }).catch(error => {
                console.error('Error downloading PDF:', error);
            });
        }
    }
}
</script>
