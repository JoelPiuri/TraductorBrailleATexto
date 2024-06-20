<template>
  <div class="section translation-container">
    <h2>Braille a Español</h2>
    <div class="translation-box">
      <textarea v-model="brailleInput" placeholder="Introducir texto en Braille"></textarea>
      <!-- Mostrar el teclado braille -->
      <TecladoBraille :letters="letters" :numbers="numbers" :specialLetters="caracterSpecial" @key-click="addBrailleCharacter" />
      <ul class="button-list">
        <li class="left-button">
          <button @click="deleteText" class="clear-button">Eliminar texto</button>
        </li>
        <li class="right-button">
          <button @click="translateBrailleToSpanish">Traducir</button>
        </li>
      </ul>
    </div>
    <div class="result-box">
      <p>{{ brailleToSpanishResult }}</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import TecladoBraille from './TecladoBraille.vue';

export default {
  name: 'BrailleToEspanol',
  components: {
    TecladoBraille
  },
  data() {
    return {
      brailleInput: '',
      brailleToSpanishResult: '',
      letters: [], // Aquí almacenaremos temporalmente las letras para el teclado
      numbers: [],
      caracterSpecial: []
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
    deleteText() {
      this.brailleInput = '';
      this.brailleToSpanishResult = '';
    },
    addBrailleCharacter(brailleCharacter) {
      this.brailleInput += brailleCharacter.braille;
    },
    fetchLetters() {
      axios.post('/teclado-braille')
        .then(response => {
          this.letters = response.data;
        })
        .catch(error => {
          console.error('Error al cargar las letras:', error);
        });
    },
    fetchNumber() {
      axios.post('/teclado-braille-number')
        .then(response => {
          this.numbers = response.data;
        })
        .catch(error => {
          console.error('Error al cargar los números:', error);
        });
    },
    fetchCharacterEsp() {
      axios.post('/teclado-braille-characterEsp')
        .then(response => {
          this.caracterSpecial = response.data;
        })
        .catch(error => {
          console.error('Error al cargar los caracteres especiales:', error);
        });
    }
  },
  mounted() {
    this.fetchLetters();
    this.fetchNumber();
    this.fetchCharacterEsp();
  }
};
</script>
