<template>
  <div class="keyboard">
    <div class="letters-section">
      <h3>Letras</h3>
      <div
        v-for="letter in letters"
        :key="letter.id"
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
        :key="number.id"
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
        :key="specialLetter.id"
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
  methods: {
    handleKeyClick(character) {
      this.$emit('key-click', character); // Emitir el carácter Braille en lugar del objeto completo
    }
  }
};
</script>