<script>
import layout from '@/vue/layouts/template.vue'

export default {layout}
</script>

<template>
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Dashboard</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="#"
                           class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <a href="#"
                               class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Dashboard</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body">
                <div>
                    <div class="grid grid-cols-12 gap-5 items-center">
                        <div class="col-span-6">
                            <span class="text-gray-700 dark:text-zinc-100">My Wallet</span>
                            <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                $
                                <span class="counter-value" data-target="865.2">865.2</span>
                                k
                            </h4>
                        </div>
                        <div class="col-span-6">
                            <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                                <span
                                    class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">+ $20.9k</span>
                    <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                </div>
            </div>
        </div>
        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body">
                <div>
                    <div class="grid grid-cols-12 gap-5 items-center">
                        <div class="col-span-6">
                            <span class="text-gray-700 dark:text-zinc-100">Number of Trades</span>
                            <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                <span class="counter-value" data-target="865.2">6258</span>
                            </h4>
                        </div>
                        <div class="col-span-6">
                            <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                                <span
                                    class="text-xs py-[1px] px-1 bg-red-50/60 text-red-500 rounded font-medium dark:bg-red-500/30">- 29 Trades</span>
                    <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                </div>
            </div>
        </div>
        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body">
                <div>
                    <div class="grid grid-cols-12 gap-5 items-center">
                        <div class="col-span-6">
                            <span class="text-gray-700 dark:text-zinc-100">Invested Amount</span>
                            <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                $
                                <span class="counter-value" data-target="865.2">4.32</span>
                                M
                            </h4>
                        </div>
                        <div class="col-span-6">
                            <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                                <span
                                    class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">+ $2.8k</span>
                    <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                </div>
            </div>
        </div>
        <div class="card  dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body">
                <div>
                    <div class="grid grid-cols-12 gap-5 items-center">
                        <div class="col-span-6">
                            <span class="text-gray-700 dark:text-zinc-100">Profit Ration</span>
                            <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                <span class="counter-value" data-target="865.2">12.57%</span>
                            </h4>
                        </div>
                        <div class="col-span-6">
                            <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                                <span
                                    class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">+ 2.95%</span>
                    <span class="ltr:ml-1.5 rtl:mr-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

</script>

