<script setup>
import {defineAsyncComponent} from 'vue'


// import CHeader from "./include/header.vue" // c-header
const CHeader = defineAsyncComponent(() =>
    import('@/vue/layouts/include/header.vue'),
)

const CFooter = defineAsyncComponent(() =>
    import('@/vue/layouts/include/footer.vue'),
)

</script>

<template>
    <c-header/>
    <slot></slot>

</template>

<style scoped>

</style>
