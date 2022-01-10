<template>
    <div>
        <b-container class="bv-example-row">
            <slider-home></slider-home>
            <categories></categories>
            <products></products>
            <footer-page></footer-page>
        </b-container>
        <fixed-element/>
    </div>
</template>
<script>
import SliderHome from '../components/SliderHome.vue';
import CategoryMenu from '../components/categories.vue';
import Products from '../components/Products.vue';
import fixedElements from '../components/fixedelements.vue';
import Footer from '../components/footer.vue';

export default {
    components: {
        'slider-home'  : SliderHome,
        'categories'   : CategoryMenu,
        'products'     : Products,
        'fixed-element': fixedElements,
        'footer-page'  : Footer
    }
}
</script>