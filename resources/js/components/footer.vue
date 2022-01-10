<template>
    <footer>
        <b-row class="footer_row" cols-sm="1" cols-md="1" cols-lg="5" cols-xl="5">
            <b-col>
                <div class="footer_brand">
                    <img src="/images/LAIKA.png" />
                    <h4>Síguenos:</h4>
                    <ul class="footer_brand_social">
                        <li>
                            <a href="#" target="_blank">
                                <b-icon icon="youtube"></b-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <b-icon icon="instagram"></b-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <b-icon icon="facebook"></b-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </b-col>
            <b-col>
                <div class="footer_widget">
                    <h4>{{acerca_de.titulo}}</h4>
                    <ul>
                        <li v-for="(link, i) in acerca_de.items" :key="i">
                            <a :href="link.url">{{link.title}}</a>
                        </li>
                    </ul>
                </div>
            </b-col>
            <b-col>
                <div class="footer_widget">
                    <h4>{{link_interes.titulo}}</h4>
                    <ul>
                        <li v-for="(link, i) in link_interes.items" :key="i">
                            <a :href="link.url">{{link.title}}</a>
                        </li>
                    </ul>
                </div>
            </b-col>
            <b-col>
                <div class="footer_widget">
                    <h4>INFORMACIÓN</h4>
                    <ul>
                        <li>Teléfono: 3009108946</li>
                        <li>serviciocliente@laika.com.co</li>
                        <li>Bogota D.C., Colombia</li>
                    </ul>
                </div>
            </b-col>
            <b-col>
                <div class="footer_widget">
                    <h4>SUSCRÍBETE</h4>
                    <p>Recibe noticias y promociones al instante.</p>
                    <form>
                        <b-input-group>
                            <b-form-input placeholder="Escriba su email" type="email"></b-form-input>
                            <b-input-group-append>
                                <b-button variant="outline-secondary">
                                    <b-icon icon="chevron-right"></b-icon>
                                </b-button>
                            </b-input-group-append>
                        </b-input-group>
                        <b-form-checkbox class="footer_acepta" id="checkbox-1" name="checkbox-1" value="accepted" unchecked-value="not_accepted">
                            He leído y acepto las políticas de privacidad.
                        </b-form-checkbox>
                    </form>
                </div>
            </b-col>
        </b-row>
        <b-row class="last_row">
            <b-col col="12" sm="12" md="6" lg="6" xl="6">
                <b-row class="payment_method" cols-sm="12">
                    <img src="/images/payment/Mercado_pago.png" alt="">
                    <img src="/images/payment/MASTER.png" alt="">
                    <img src="/images/payment/epayco.png" alt="">
                    <img src="/images/payment/AMERICAN.png" alt="">
                    <img src="/images/payment/PSE.png" alt="">
                    <img src="/images/payment/DINERS.png" alt="">
                    <img src="/images/payment/kushki.svg" alt="">
                </b-row>
            </b-col>
            <b-col col="12" sm="12" md="6" lg="6" xl="6">
                <b-row class="download_method" cols="3" cols-sm="12">
                    <b-col>
                        <img src="/images/APP.png" alt="botton" />
                    </b-col>
                    <b-col>
                        <img src="/images/GOOGLEP.png" alt="botton" />
                    </b-col>
                    <b-col>
                        <img src="/images/huaweiGallery.png" alt="boton" />
                    </b-col>
                </b-row>
            </b-col>
        </b-row>
    </footer>    
</template>
<style>
.footer_brand {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.footer_brand img {
    width: 150px;
}

.footer_brand .footer_brand_social {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    column-gap: .5rem;
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
}

.footer_brand h4 {
    color: #603e85;
}

.footer_brand .footer_brand_social li a {
    font-size: 2rem;
    color: #603e85;
    text-decoration: none;
}

.footer_widget h4 {
    color: #603e85;
    font-size: 1.3rem;
}

.footer_widget ul {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
}

.footer_widget p {
    font-family: 'TrushthaCausten-Medium';
    font-size: .9rem;
}

.footer_widget ul li a,
.footer_widget ul li {
    font-family: 'TrushthaCausten-Medium';
    text-decoration: none;
    color: #603e85;
}

.footer_acepta {
    margin-top: .5rem;
}

.payment_method img {
    width: 80px;
}

@media screen and (max-width: 1024px) {
    .footer_row .col {
        flex: 1 0 100%;
        margin-bottom: 1rem;
    }

    .footer_acepta {
        font-size: .8rem;
    }

    .last_row {
        flex-direction: column;
    }

    .payment_method img {
        width: 50px;
    }

    .download_method img {
        width: 100%;
    }
}
</style>
<script>
export default {
    data(){
        return {
            acerca_de: {
                titulo: "ACERCA DE LAIKA",
                items: [
                    {url: "#", title: "Sobre Laika"},
                    {url: "#", title: "Servicios"},
                    {url: "#", title: "Trabaja con nosotros"},
                    {url: "#", title: "Blog"},
                    {url: "#", title: "Términos y condiciones"},
                ]
            },
            link_interes: {
                titulo: "LINKS DE INTERÉS",
                items: [
                    {url: "#", title: "Preguntas frecuentes"},
                    {url: "#", title: "¿Cómo comprar en Laika?"},
                    {url: "#", title: "Política de Privacidad"},
                    {url: "#", title: "Contáctenos"},
                    {url: "#", title: "Políticas de Entrega"},
                ]
            }
        }
    }
};
</script>
