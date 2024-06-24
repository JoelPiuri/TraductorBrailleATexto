<!-- TecladoBraille.vue -->
<template>
  <div class="keyboard">
    <div class="letters-section">
      <h3>Letras</h3>
      <div
        v-for="letter in letters"
        :key="letter.braille"
        class="key"
        @click="handleKeyClick(letter, 'letra')"
      >
        {{ isUpperCase ? getUpperCaseBraille(letter.braille) : letter.braille }}
      </div>
    </div>
    <div class="numbers-section">
      <h3>Números</h3>
      <div
        v-for="number in numbers"
        :key="number.braille"
        class="key"
        @click="handleKeyClick(number, 'numero')"
      >
        {{ number.braille }}
      </div>
    </div>
    <div class="special-letters-section">
      <h3>Caracteres Especiales</h3>
      <div
        v-for="specialLetter in specialLetters"
        :key="specialLetter.braille"
        class="key"
        @click="handleKeyClick(specialLetter, 'caracterEspecial')"
      >
        {{ specialLetter.braille }}
      </div>
    </div>
    <div class="utility-keys">
      <div class="key" @click="handleKeyClick(' ', 'espacio')">Espacio</div>
      <div class="key" @click="handleKeyClick('⠸⠲', 'enter')">Enter</div>
      <div class="key" @click="handleKeyClick('⠼⠂', 'tab')">Tab</div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    letters: Array,
    numbers: Array,
    specialLetters: Array,
    isUpperCase: Boolean
  },
  methods: {
    handleKeyClick(character, type) {
      if (type === 'espacio' || type === 'enter' || type === 'tab') {
        this.$emit('key-click', character);
      } else {
        let brailleCharacter = character.braille;

        if (type === 'numero') {
          brailleCharacter = '⠼' + character.braille;
        }

        this.$emit('key-click', brailleCharacter);
      }
    },
    getUpperCaseBraille(brailleCharacter) {
      const uppercaseEntry = this.letters.find(entry => {
        return entry.tipoCaracter === 'letraMayuscula' && entry.braille.toLowerCase() === brailleCharacter;
      });

      return uppercaseEntry ? uppercaseEntry.braille : brailleCharacter;
    }
  }
};
</script>

