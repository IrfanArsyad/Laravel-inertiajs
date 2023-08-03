<script>
import layout from '@/vue/layouts/template.vue'

export default {layout}
</script>

<template>
    <c-breadcumbs/>
    <c-table :table="tableConfig"/>
</template>

<script setup>

import {inject, reactive} from "vue";
import {usePage} from '@inertiajs/vue3'

const route = inject('route')

const viewData = usePage().props
const collumn = [];

const response = await fetch('/example/table/table');
const Ziggy = await response.json();

console.log(Ziggy)
/*
 * Table Config
 */
const tableConfig = reactive({
    display: true,
    tableKey: 0,
    tableConfig: {
        name: 'User Lists',
        routeName: 'example',
        config: {
            action: true,
            actionComponent: [],
            sortable: true,
            downloadable: false,
            paginator: true,
            pageLimit: [15, 25, 50, 100],
            pageDefault: 15,
            operatorFiled: false,
            createdField: false,
        },
        api: {
            table: route('example.table.table'),
            download: route('example.table.table')
        },
        filter: [
            {
                active: true,
                name: 'search',
                default: 'sm1',
                placeholder: 'Search',
                option: []
            }
        ],
        columns: collumn
    }
})

</script>
