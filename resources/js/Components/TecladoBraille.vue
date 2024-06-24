<template>
  <div class="keyboard">
    <div
      v-for="letter in letters"
      :key="letter.id"
      class="key"
      @click="handleKeyClick(letter)"
    >
      {{ letter.braille }}
    </div>
    <div
      v-for="number in numbers"
      :key="number.id"
      class="key"
      @click="handleKeyClick(number)"
    >
      {{ number.braille }}
    </div>
    <div
      v-for="specialLetter in lettersSpecial"
      :key="specialLetter.id"
      class="key"
      @click="handleKeyClick(specialLetter)"
    >
      {{ specialLetter.braille }}
    </div>
  </div>
</template>

<script>
export default {
  props: ['letters', 'numbers', 'lettersSpecial'],
  methods: {
    handleKeyClick(character) {
      this.$emit('key-click', character); // Emitir el carácter Braille en lugar del objeto completo
    }
  }
};
</script>
e