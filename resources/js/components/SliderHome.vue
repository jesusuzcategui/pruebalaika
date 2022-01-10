<template>
    <div>
        <slick :options="slickOptions">
            <img src="/images/slider/1.jpg" alt="Imagen 1">
            <img src="/images/slider/2.jpg" alt="Imagen 2">
        </slick>
    </div>
</template>
<style>
.slick-arrow {
    position: absolute;
    z-index: 999;
    border: none;
    outline: none;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    color: #603e85;
    top: 35%;
}
.slick-prev {
    left: 10px;
}
.slick-next {
    right: 10px;
}
.slick-dots {
    list-style: none;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: .5rem 0;
    margin-bottom: 0;
}
.slick-dots li:not(:last-child) {
    margin-right: 1rem;
}
.slick-dots .slick-active button {
    background: #603e85;
}
.slick-dots li button {
    color: transparent;
    border: none;
    outline: none;
    border-radius: 50%;
    width: 15px;
    height: 15px;
    background: rgb(219, 219, 219);
}
</style>
<script>
import Slick from 'vue-slick';
import 'slick-carousel/slick/slick.css';

export default {
    data(){
        return {
            slickOptions: {
                dots: true,
                slideToShow: 1,
                prevArrow: `<button type="button" class="slick-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>`,
                nextArrow: `<button type="button" class="slick-next">
                    <i class="fas fa-chevron-right"></i>
                </button>`
            }
        }
    },
    components: {
        Slick
    }
};
</script>
