<template>
    <div>
        <header class="bg-purple pt-4 pb-4">
            <div class="container-fluid">
                <b-row class="mb-3 px-3">
                    <b-col cols="2">
                        <b-button class="btn_menu" variant="link"  v-b-toggle.sidebar-mobile>
                            <i class="fas fa-bars"></i>
                        </b-button>
                    </b-col>
                    <b-col cols="5">
                        <div class="col-12 text-center">
                            <img src="/images/LaikaMascotas.svg" alt="Logo de laika" />
                        </div>
                    </b-col>
                    <b-col cols="3">
                        <vue-country-code :onlyCountries="['co', 'cl']"></vue-country-code>
                    </b-col>
                    <b-col cols="2">
                        <div class="col-12 text-rigth">
                            <button type="button" class="cart_btn btn btn-primary">
                                <b-icon icon="cart3" font-scale="2"></b-icon>
                                <span class="badge badge-warning">0</span>
                            </button>
                        </div>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col cols="12">
                        <div class="header--top-searchbar">
                            <b-input-group>
                                <b-form-input placeholder="Encuentra lo mejor para tu mascota"></b-form-input>
                                <template #append>
                                    <b-input-group-text>
                                        <b-icon icon="search" />
                                    </b-input-group-text>
                                </template>
                            </b-input-group>
                        </div>
                    </b-col>
                </b-row>
            </div>
        </header>
        <b-sidebar id="sidebar-mobile" :title="null" backdrop-variant="transparent" backdrop shadow>
            <div class="px-3 py-2">
                <ul class="header--main-navigation_mobile">
                    <li @click="openItem(item, 'submenuitem-'+i)" v-for="(item, i) in navigation" :key="i">
                        <a :href="item.url">
                            <img v-if="item.image" alt="Imagen de item de menu" :src="item.image">
                            <span v-if="item.name">{{item.name}}</span>
                            <b-icon v-if="item.icon" icon="chevron-right"></b-icon>
                        </a>
                        <nav :id="'submenuitem-'+i" v-if="item.submenu" class="header--main-navigation_submenu">
                            <ul class="header--main-navigation_navigation" v-if="item.submenu.items.length > 0">
                                <li v-for="(subitem, j) in item.submenu.items" :key="j">
                                    <a :href="subitem.url">
                                        <img :src="subitem.icon" /> {{subitem.name}}
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </div>
        </b-sidebar>
    </div>
</template>
<style>
.b-sidebar-header .close {
    background: #603e85;
    color: white !important;
    border: none;
    outline: none;
    font-size: 1.2rem;
    border-radius: 50%;
}
</style>
<script>
export default {
    data(){
        return {
            items: [
                {name: "Compras seguras online", url: null, icon: "shield-check"},
                {name: "Pago contra entrega", url: null, icon: "cash"},
                {name: "Entregas el mismo dia", url: null, icon: "truck"}
            ],
            navigation: [
                {
                    image: '/images/dog_mc.svg', 
                    name: "Compra para perro", 
                    url: "#", 
                    icon: true,
                    submenu: {
                        image: "/images/para_perros_sub_menu_images.png",
                        items: [
                            { url: "#", name: "Alimento", icon: "/images/category_icons/alimento.png" },
                            { url: "#", name: "Snacks", icon: "/images/category_icons/snacks.png" },
                            { url: "#", name: "Farmapet", icon: "/images/category_icons/farmapet.png" },
                            { url: "#", name: "Cuidado e Higiene", icon: "/images/category_icons/higiene.png" },
                            { url: "#", name: "Juguetes", icon: "/images/category_icons/juguetes.png" },
                            { url: "#", name: "Accesorios", icon: "/images/category_icons/accesorios.png" },
                            { url: "#", name: "Para PetLovers", icon: "/images/category_icons/petlovers.png" },
                        ]
                    }
                },
                {image: '/images/cat_mc_s.svg', name: "Compra para gato", url: "#", icon: true},
                {image: null, name: "Ofertas", url: "#", icon: true},
                {image: null, name: "Servicios", url: "#", icon: true},
                {image: null, name: "Blog", url: "#", icon: false},
                {image: '/images/membership_logo.png', name: null, url: "#", icon: false},
            ],
            contacto: {
                phone: {
                    number: "3009108496"
                },
                socialNetwork: [
                    {icon: "youtube", url: null},
                    {icon: "instagram", url: null},
                    {icon: "facebook", url: null},
                ]
            }
        }
    },
    methods: {
        openItem(element, divsubmenu){
            if(!element.submenu){
                window.location.href = element.url;
            } else {
                let submenuHtml = document.querySelector("#" + divsubmenu);
                submenuHtml.classList.toggle('openned');
                console.log(divsubmenu);
            }
        }
    }
}
</script>