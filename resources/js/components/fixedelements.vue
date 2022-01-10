<template>
    <div>
        <a class="btn_sugerencias" href="#">
            <b-icon icon="chat-left"></b-icon>
            Sugerencias
        </a>
        <a class="btn_whatsapp" href="#">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</template>
<style>
    .btn_sugerencias {
        background: crimson;
        color: white;
        text-decoration: none;
        position: fixed;
        right: -50px;
        top: 50%;
        display: inline-block;
        padding: .5rem 1rem;
        transform: rotate(-90deg);
        transition: all ease .5s;
        border-radius: 5px 5px 0px 0px;
    }

    .btn_sugerencias:hover {
        color: #fff;
        right: -45px;
    }

    .btn_whatsapp {
        background: rgb(39, 167, 0);
        color: white;
        text-decoration: none;
        position: fixed;
        right: 1rem;
        bottom: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: .5rem 1rem;
        font-size: 3rem;
        border-radius: 50%;
        width: 80px;
        height: 80px;
    }

    .btn_whatsapp:hover {
        color: #fff;
    }

    @media screen and (max-width: 1024px){
        .btn_whatsapp{
            bottom: 200px;
        }   
    }
</style>
<script>
export default {

};
</script>