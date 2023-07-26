<script>
import layout from '@/vue/layouts/template.vue'

export default {layout}
</script>

<template>
    <c-breadcumbs/>
    <c-table :table="tableConfig"/>
</template>

<script setup>

import {reactive} from "vue";
import {usePage} from '@inertiajs/vue3'

const viewData = usePage().props
console.log(viewData)

const data = reactive({
    display: true,
    tableKey: 0,
    tableConfig: {
        name: 'agent',
        routeName: 'agent',
        config: {
            action: true,
            actionComponent: [
                {
                    name: 'edit',
                    active: true,
                    url: "agent.edit",
                    columns: "id_system_user"
                },
                // {
                //     name: 'delete',
                //     active: true,
                //     url: "agent.delete",
                //     columns: "id_system_user"
                // }
            ],
            sortable: true,
            downloadable: false,
            paginator: true,
            pageLimit: [15, 25, 50, 100],
            pageDefault: 15,
            operatorFiled: false,
            createdField: false,
        },
        api: {
            table: route('agent.table'),
            download: route('agent.table')
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
const tableConfig = {

    // setting
    settings: {
        showEntries: true,
        pagination: true,
    },

    // headers
    headers: [
        {
            // colspan:
            title: "Test",
        },
        {
            // colspan:
            title: "Nama",
        },
        {
            // colspan:
            title: "Item",
        },
        {
            // colspan:
            title: "Barang",
        },
        {
            // colspan:
            title: "Action",
        }
    ],

    //columns
    columns:
        [
            {
                row: 2,
                value: "Name",
                type: 'phone',
            },
            {
                row: 2,
                value: "Name",
                type: 'number',
            },
            {
                row: 2,
                value: "Name",
                type: 'number',
            },
            {
                row: 2,
                value: "Name",
                type: 'number',
            },
            {
                row: 2,
                value: "Name",
                type: 'number',
            }
        ]
}
</script>
