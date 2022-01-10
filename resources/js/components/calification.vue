<template>
    <div>
        <ul class="calification_list">
            <li v-for="(n, index) in count" :key="index">
                <a href="javascript:void(0)">
                    <b-icon icon="star-fill"></b-icon>
                </a>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    props: {
        count: 0,
    },
    data(){
        return {}
    },
    mounted(){

    }
};
</script>
<style>
    .calification_list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        column-gap: .5rem;
    }

    .calification_list li a {
        color: rgb(235, 211, 0);
    }

    .calification_list li a:hover {
        color: rgb(201, 181, 0);
    }
</style>