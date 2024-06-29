<template>
    <div id="home-page">
        <HeaderComponent></HeaderComponent>
        <div class="main-content">
            <h1>Bienvenido al Diccionario de Cat Traducciones</h1>
        </div>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
import HeaderComponent from '../Components/HeaderComponet.vue';
import FooterComponent from '../Components/FooterComponent.vue';
export default {
    name: 'Dictionary',
    components: {
        HeaderComponent,
        FooterComponent,
    }
}
</script>

