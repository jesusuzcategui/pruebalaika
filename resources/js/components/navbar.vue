<template>
    <div>
        <div class="bg-black">
            <div class="container">
                <b-row>
                    <b-col cols="7">
                        <div class="d-flex justify-content-space-between">
                            <ul class="header--top-left">
                                <li class="header--top-left_item" v-for="(item, i) in items" :key="i">
                                    <a :href="(!item.url) ? '#' : item.url">
                                        <b-icon :icon="item.icon" aria-hidden="true"></b-icon> {{item.name}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </b-col>
                    <b-col  cols="5">
                        <div class="col-12 d-flex align-items-end">
                            <div class="header--top-contact">
                                <span>Llamanos</span>
                                <b-icon icon="telephone-fill" aria-hidden="true"></b-icon>
                                <span>| {{contacto.phone.number}}</span>
                            </div>
                            <ul class="header--top-right">
                                <li class="header--top-right_item">
                                    <span>Escribenos</span>
                                </li>
                                <li class="header--top-right_item" v-for="(item, i) in contacto.socialNetwork" :key="i">
                                    <a :href="(!item.url) ? '#' : item.url">
                                        <b-icon :icon="item.icon" aria-hidden="true"></b-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </b-col>
                </b-row>
            </div>
        </div>
        <header class="bg-purple p-3">
            <div class="container">
                <b-row>
                    <b-col cols="1">
                        <img src="/images/LaikaMascotas.svg" alt="Logo de laika" />
                    </b-col>
                    <b-col cols="6">
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
                    <b-col cols="1">
                        <vue-country-code :onlyCountries="['co', 'cl']"></vue-country-code>
                    </b-col>
                    <b-col cols="2">
                        <button class="my-account-btn btn btn-link">
                            <span class="icon-rounded">
                                <b-icon icon="person-fill"></b-icon>
                            </span>
                            Mi cuenta
                        </button>
                    </b-col>
                    <b-col cols="2">
                        <button type="button" class="cart_btn btn btn-primary">
                            <b-icon icon="cart3" font-scale="2"></b-icon>
                            <span class="badge badge-warning">0</span>
                        </button>
                    </b-col>
                </b-row>
            </div>
        </header>
        <nav class="bg-ligth">
            <div class="container">
                <ul class="header--main-navigation">
                    <li v-for="(item, i) in navigation" :key="i">
                        <a :href="item.url">
                            <img v-if="item.image" alt="Imagen de item de menu" :src="item.image">
                            <span v-if="item.name">{{item.name}}</span>
                            <b-icon v-if="item.icon" icon="chevron-right"></b-icon>
                        </a>
                        <nav v-if="item.submenu" class="header--main-navigation_submenu">
                            <ul class="header--main-navigation_navigation" v-if="item.submenu.items.length > 0">
                                <li v-for="(subitem, j) in item.submenu.items" :key="j">
                                    <a :href="subitem.url">
                                        <img :src="subitem.icon" /> {{subitem.name}}
                                    </a>
                                </li>
                            </ul>
                            <img :src="item.submenu.image" />
                        </nav>
                    </li>
                </ul>
            </div>            
        </nav>
    </div>
</template>
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
    }
}
</script>