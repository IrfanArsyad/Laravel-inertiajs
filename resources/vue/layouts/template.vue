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
    <div class="main-content ">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
