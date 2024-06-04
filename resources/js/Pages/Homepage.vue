<template>
  <div id="home-page">
    <HeaderComponent></HeaderComponent>
    <div class="main-content">
      <h1>Bienvenido a Braille Cat Traducciones</h1>
      <div class="translation-sections">
        <div class="section translation-container">
          <h2>Braille a Español</h2>
          <div class="translation-box">
            <textarea v-model="brailleInput" placeholder="Introducir texto en Braille"></textarea>
            <h2>Teclado Braille</h2>
            <div class="braille-keyboard">
              <div v-for="button in brailleKeyboard" :key="button.braille" class="braille-key" @click="insertBraille(button.braille)">
                {{ button.letter }}
              </div>
            </div>
            <button @click="translateBrailleToSpanish">Traducir</button>
          </div>
          <div class="result-box">
            <p>{{ brailleToSpanishResult }}</p>
          </div>
        </div>
        <div class="section translation-container">
          <h2>Español a Braille</h2>
          <div class="translation-box">
            <textarea v-model="spanishInput" placeholder="Introducir texto en Español"></textarea>
            <button @click="translateSpanishToBraille">Traducir</button>
          </div>
          <div class="result-box">
            <div>
              <h3>Lectura:</h3>
              <p>{{ spanishToBrailleResult }}</p>
            </div>
            <div>
              <h3>Escritura Manual:</h3>
              <p class="rtl">{{ spanishToBrailleResult }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <FooterComponent></FooterComponent>
  </div>
</template>

<script>
import HeaderComponent from '../Components/HeaderComponet.vue';
import FooterComponent from '../Components/FooterComponent.vue';
import axios from 'axios';

export default {
  name: 'HomePage',
  components: {
    HeaderComponent,
    FooterComponent
  },
  data() {
    return {
      brailleInput: '',
      spanishInput: '',
      brailleToSpanishResult: '',
      spanishToBrailleResult: '',
      brailleKeyboard: [
        { braille: '⠁', letter: 'a' }, { braille: '⠃', letter: 'b' }, { braille: '⠉', letter: 'c' },
        { braille: '⠙', letter: 'd' }, { braille: '⠑', letter: 'e' }, { braille: '⠋', letter: 'f' },
        { braille: '⠛', letter: 'g' }, { braille: '⠓', letter: 'h' }, { braille: '⠊', letter: 'i' },
        { braille: '⠚', letter: 'j' }, { braille: '⠅', letter: 'k' }, { braille: '⠇', letter: 'l' },
        { braille: '⠍', letter: 'm' }, { braille: '⠝', letter: 'n' }, { braille: '⠕', letter: 'o' },
        { braille: '⠏', letter: 'p' }, { braille: '⠟', letter: 'q' }, { braille: '⠗', letter: 'r' },
        { braille: '⠎', letter: 's' }, { braille: '⠞', letter: 't' }, { braille: '⠥', letter: 'u' },
        { braille: '⠧', letter: 'v' }, { braille: '⠺', letter: 'w' }, { braille: '⠭', letter: 'x' },
        { braille: '⠽', letter: 'y' }, { braille: '⠵', letter: 'z' },
        { braille: '⠼⠁', letter: '1' }, { braille: '⠼⠃', letter: '2' }, { braille: '⠼⠉', letter: '3' },
        { braille: '⠼⠙', letter: '4' }, { braille: '⠼⠑', letter: '5' }, { braille: '⠼⠋', letter: '6' },
        { braille: '⠼⠛', letter: '7' }, { braille: '⠼⠓', letter: '8' }, { braille: '⠼⠊', letter: '9' },
        { braille: '⠼⠚', letter: '0' },
        { braille: '⠲', letter: '.' }, { braille: '⠂', letter: ',' }, { braille: '⠆', letter: ';' },
        { braille: '⠒', letter: ':' }, { braille: '⠖', letter: '!' }, { braille: '⠦', letter: '?' },
        { braille: '⠶', letter: '(' }, { braille: '⠶', letter: ')' }, { braille: '⠤', letter: '-' },
        { braille: '⠌', letter: '/' }, { braille: '⠈⠁', letter: '@' }, { braille: '⠼', letter: '#' },
        { braille: '⠯', letter: '&' }, { braille: '⠡', letter: '*' }, { braille: '⠐⠦', letter: '"' },
        { braille: '⠄', letter: "'" }, { braille: '⠿', letter: '=' }, { braille: '⠐⠖', letter: '+' },
        { braille: '⠐⠶', letter: '<' }, { braille: '⠰⠶', letter: '>' }, { braille: '⠈⠎', letter: '$' },
        { braille: '⠨⠴', letter: '%' }, { braille: '⠘⠡', letter: '^' }, { braille: '⠤', letter: '_' },
        { braille: '⠨⠶', letter: '[' }, { braille: '⠨⠶', letter: ']' }, { braille: '⠦⠶', letter: '{' },
        { braille: '⠶⠦', letter: '}' }, { braille: '⠸⠌', letter: '\\' },{ braille: '⠸⠶', letter: '|' }, { braille: '⠘⠹', letter: '~' }, { braille: '⠐', letter: '`' }
      ]
    };
  },
  methods: {
    translateBrailleToSpanish() {
      axios.post('/translate-to-espanol', { brailleTextInput: this.brailleInput })
        .then(response => {
          this.brailleToSpanishResult = response.data.espanol;
        })
        .catch(error => {
          console.error(error);
        });
    },

    translateSpanishToBraille() {
      axios.post('/translate-to-braille', { text: this.spanishInput })
        .then(response => {
          this.spanishToBrailleResult = response.data.braille;
        })
        .catch(error => {
          console.error(error);
        });
    },

    insertBraille(brailleChar) {
      this.brailleInput += brailleChar;
    }
  }
}
</script>

<style scoped>
.translation-sections {
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.translation-container {
  flex: 1;
  margin: 0 10px;
}

.translation-box {
  margin-bottom: 20px;
}

.braille-keyboard {
  display: grid;
  grid-template-columns: repeat(20, 1fr);
  grid-gap: 5px;
  margin-bottom: 10px;
}

.braille-key {
  border: 1px solid #ccc;
  border-radius: 3px;
  padding: 5px;
  cursor: pointer;
  text-align: center;
}

.result-box {
  border: 1px solid #ccc;
  padding: 10px;
  margin-top: 10px;
}

.rtl {
  direction: rtl;
}

button {
  margin-top: 10px;
}
</style>

