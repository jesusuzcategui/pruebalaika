<template>
    <div>
        <h3 class="laika_menu_cats_title">Categorías</h3>
        <nav class="laika_menu_cats">
            <ul>
                <li v-for="(element, i) in items" :key="i">
                    <a :href="element.url">
                        <img :src="element.icon" :alt="element.name" />
                        {{element.name}}
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</template>
<script>
export default {

    data(){
        return {
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
    }

}
</script>
<style scoped>
    .laika_menu_cats_title {
        font-size: 2rem;
        font-family: 'TrushthaCausten-ExtraBold';
        color: #603e85;
    }

    .laika_menu_cats ul {
        list-style: none;
        margin-bottom: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        column-gap: 1rem;
        row-gap: 1rem;
        box-sizing: border-box;
    }

    .laika_menu_cats ul li {
        flex: 0 0 20%;
        max-width: 20%;
        text-align: center;
        justify-content: center;
        background: white;
        box-shadow: 0 0 5px rgba(0,0,0,.5);
        padding: 1rem .5rem;
        border-radius: 5px;
    }

    .laika_menu_cats ul li a {
        font-family: 'TrushthaCausten-Bold';
        color: #603e85;
        text-decoration: none;
        font-size: 1.2rem;
    }

    .laika_menu_cats ul li a img {
        width: 30px;
        margin-right: 1rem;
    }

    @media screen and (max-width: 1024px) {
        .laika_menu_cats ul {
            flex-direction: column;
        }

        .laika_menu_cats ul li {
            flex: 0 0 100%;
            max-width: 100%;
            width: 100%;
        }

        .laika_menu_cats_title {
            text-align: center;
        }
    }
</style>