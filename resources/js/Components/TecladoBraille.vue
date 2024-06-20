<template>
  <div class="keyboard">
    <button @click="toggleCase">Mayúsculas/Minúsculas</button>
    <div class="letters-section">
      <h3>Letras</h3>
      <div
        v-for="letter in letters"
        :key="letter.braille"
        class="key"
        @click="handleKeyClick(letter)"
      >
        {{ letter.braille }}
      </div>
    </div>
    <div class="numbers-section">
      <h3>Números</h3>
      <div
        v-for="number in numbers"
        :key="number.braille"
        class="key"
        @click="handleKeyClick(number)"
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
        @click="handleKeyClick(specialLetter)"
      >
        {{ specialLetter.braille }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    letters: Array,
    numbers: Array,
    specialLetters: Array
  },
  data() {
    return {
      isUpperCase: false
    };
  },
  methods: {
    toggleCase() {
      this.isUpperCase = !this.isUpperCase;
    },
    handleKeyClick(character) {
      if (this.isUpperCase && character.tipoCaracter === 'letra') {
        character.caracterEspanol = character.caracterEspanol.toUpperCase();
      } else {
        character.caracterEspanol = character.caracterEspanol.toLowerCase();
      }
      this.$emit('key-click', character);
    }
  }
};
</script>