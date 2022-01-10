<template>
    <div class="my-5">
        <div v-if="!products">
            <b-spinner small type="grow"></b-spinner>
        </div>
        <div v-else>
            <b-row cols-sm="1" cols-md="2" cols-lg="4" cols-xl="4" class="align-items-stretch">
                <b-col class="mb-3" v-for="(p) in products" :key="p.id">
                    <b-card
                        :title="p.title"
                        :img-src="p.image"
                        :img-alt="p.title"
                        img-top
                        tag="article"
                        class="h-100 product_item"
                    >
                        <calification :count="p.score" />                        
                        
                        <template #footer>
                            <b-button href="#" variant="primary">
                                <b-icon icon="cart-plus-fill"></b-icon> Añadir al carrito
                            </b-button>
                        </template>
                    </b-card>
                </b-col>
            </b-row>
        </div>
    </div>
</template>
<style>
    .product_item .card-footer {
        padding: 0;
    }
    .product_item .card-title {
        font-family: 'TrushthaCausten-Medium';
    }
    .product_item .card-footer .btn {
        width: 100%;
    }
</style>
<script>
import calification from './calification.vue';
import axios from 'axios';
export default {
    components: {
        'calification': calification
    },
    data(){
        return {
            products: null
        }
    },
    methods: {
        async findProducts(){
            let {data, status} = await axios.get('http://localhost:8000/api/products');
            if(status === 200){
                this.products = data;
            }
        }
    },
    mounted(){
        this.findProducts();
    }
};
</script>
