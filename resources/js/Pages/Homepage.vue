<template>
    <div id="home-page">
        <HeaderComponent></HeaderComponent>
        <div class="main-content">
            <h1>Bienvenido a Braille Cat Traducciones</h1>
            <div class="translation-sections">
                <BrailleToEspanol></BrailleToEspanol>
                <EspanolToBraille></EspanolToBraille>
            </div>
            <TecladoBraille></TecladoBraille>
        </div>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>

import HeaderComponent from '../Components/HeaderComponet.vue';
import FooterComponent from '../Components/FooterComponent.vue';
import EspanolToBraille from '../Components/EspanolToBraille.vue';
import BrailleToEspanol from '../Components/BrailleToEspanol.vue';
import TecladoBraille from '../Components/TecladoBraille.vue';
import axios from 'axios';



export default {
    name: 'HomePage',
    components: {
        HeaderComponent,
        FooterComponent,
        EspanolToBraille,
        BrailleToEspanol
    }
}
</script>
