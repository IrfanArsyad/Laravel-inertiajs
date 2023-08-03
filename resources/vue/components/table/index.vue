<script setup>
import _ from 'lodash'
import {inject, onMounted, reactive} from "vue";
import axios from "axios";
const route = inject('route')

console.log(route)
const props = defineProps({
    table: Object
})

// Define table
const table = props.table;

onMounted(function (){
    console.log(table.tableConfig)
    // console.log(axios.get(route('example.table.table')))
    console.log('on mounted')
})

const dataTable = reactive({

})
// console.log(table)
// console.log(table)
// console.log(_.isSet(table.display))
//
// console.log(tableConfig)
// import CTableUsername from "@/vue/components/table/c-table-username.vue";
</script>

<template>

    <div class="grid grid-cols-1">
        <div class="grid grid-cols-12 items-stretch">
            <div class="col-span-12 lg:col-span-6 self-center">
                <h5 class="text-15 text-gray-600 dark:text-gray-100">Contact List <span
                    class="text-gray-500 font-normal ml-2 dark:text-zinc-100">(834)</span></h5>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div class="flex flex-wrap items-center gap-2 mt-5 lg:mt-0 lg:justify-end">
                    <div>
                        <a href="#"
                           class="btn bg-gray-50 border-gray-50 dark:bg-zinc-600/50 dark:border-zinc-600 dark:text-gray-100"><i
                            class="bx bx-plus me-1"></i> Add New</a>
                    </div>
                    <div>
                        <div class="dropstart text-end relative ">
                            <a class="btn border-transparent py-1 text-16 text-gray-500 shadow-none dropdown-toggle dark:text-gray-100"
                               href="#" role="button" data-bs-toggle="dropdown" id="dropdownMenu1"
                               aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </a>
                            <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 top-5 list-none text-left ltr:-right-10 rtl:-left-10 w-40
                                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-800"
                                aria-labelledby="dropdownMenu1">
                                <li><a
                                    class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:text-gray-100"
                                    href="#">Action</a>
                                </li>
                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                            bg-transparent text-gray-700  hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:text-gray-100"
                                       href="#">Another action</a>
                                </li>
                                <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                            text-gray-700  hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:text-gray-100"
                                       href="#">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="flex flex-wrap items-center">
                <div>
                    <label for="countries_multiple" class="text-gray-600 dark:text-gray-100">Show
                        <select id="countries"
                                class="py-0.5 w-16 inline-block text-11 bg-white border border-gray-100 text-gray-900 rounded p-2.5 focus:ring-1 focus:ring-violet-50 dark:focus:ring-zinc-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100">
                            <option selected>10</option>
                            <option value="US">20</option>
                            <option value="CA">30</option>
                            <option value="FR">40</option>
                            <option value="DE">50</option>
                        </select>
                        entries</label>
                </div>
                <div class="ltr:md:ml-auto rtl:md:mr-auto mt-4 md:mt-0">
                    <label class="dark text-gray-100">Search:
                        <input type="search"
                               class="py-0.5 px-1 w-40 rounded border-gray-100 ml-2 dark:bg-zinc-700/50 dark:border-zinc-600"
                               placeholder="" aria-controls="">
                    </label>
                </div>
            </div>
        </div>


        <!-- start table  -->
        <div class="mt-5 relative overflow-x-auto">
            <table class="w-full">
                <thead class="border-b border-gray-50 cursor-pointer dark:border-zinc-600">
                <tr class="text-gray-700 dark:text-gray-100">
                    <template v-for="t_header in table.tableConfig.columns">
                        <th class="relative text-start p-2 dark:text-gray-100">
                            <div>Test</div>
                        </th>
                    </template>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b border-gray-50 text-gray-600 dark:border-zinc-600">
                    <td>
                        <div class="p-2">
                            dasdas
                            <!--                                <input type="checkbox" value=""-->
                            <!--                                       class="w-4 h-4 ring-0 border-gray-100 rounded checked:bg-violet-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:checked:bg-violet-500 dark:border-zinc-500">-->
                            <!--                                {{ item.field }}-->
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="flex items-center place-content-between mt-4 mb-16">

            <div class="mt-4 mb-2">
                <!--                <template v-if="table.columns.length > 0">-->
                <!--                    <p class="text-gray-600 dark:text-zinc-100">Showing 1 to 10 of 12 entries</p>-->
                <!--                </template>-->


            </div>

            <!--            <div class="flex mt-2.5">-->
            <!--                <template v-if="dataTables.settings.pagination">-->
            <!--                    <nav aria-label="Page navigation example border">-->
            <!--                        <ul class="flex list-style-none">-->
            <!--                            <li class="border rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800" disabled>-->
            <!--                                <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-400 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none"-->
            <!--                                   href="#">Previous</a></li>-->
            <!--                            <li class="border border-l-0 border-r-0 border-violet-500 group hover:border-gray-200 transition-all duration-300 dark:border-zinc-500 dark:bg-zinc-800">-->
            <!--                                <a class="page-link relative block py-2 px-3 border-0 group-hover bg-violet-500 outline-none text-white hover:text-violet-500 group-hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none transition-all duration-300"-->
            <!--                                   href="#">1</a></li>-->
            <!--                            <li class="border border-l-0 border-r-0 border-gray-100 dark:border-zinc-500 dark:bg-zinc-800">-->
            <!--                                <a-->
            <!--                                    class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-500 dark:text-zinc-100 hover:text-violet-500 hover:bg-gray-50/50 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 focus:shadow-none"-->
            <!--                                    href="#">2</a></li>-->
            <!--                            <li class="border rounded-l border-gray-100 dark:border-zinc-500 dark:bg-zinc-800" disabled>-->
            <!--                                <a class="page-link relative block py-2 px-3 border-0 bg-transparent outline-none transition-all duration-300 text-gray-100 hover:text-violet-500 focus:shadow-none hover:bg-gray-200 dark:hover:bg-zinc-500/50 dark:hover:text-gray-100 pointer-events-none"-->
            <!--                                   href="#">Next</a></li>-->
            <!--                        </ul>-->
            <!--                    </nav>-->
            <!--                </template>-->
            <!--            </div>-->
        </div>
        <!-- end table -->
    </div>
</template>

