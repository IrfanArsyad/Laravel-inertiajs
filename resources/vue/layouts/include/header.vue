<script>

export default {name: 'c-header'}

// import {defineAsyncComponent, ref} from 'vue'
</script>

<template>

    <!-- leftbar-tab-menu -->
    <nav
        class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">
        <div class="flex items-center justify-between w-full">
            <div class="topbar-brand flex items-center">
                <div
                    class="navbar-brand flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                    <a href="#" class="flex items-center font-bold text-lg  dark:text-white sm:hidden">
                        <img src="/images/logo-sm.svg" alt="" class="ltr:mr-2 rtl:ml-2 sm:pl-2 inline-block mt-1 h-6"/>
                        <span class="hidden xl:block align-middle">Minia</span>
                    </a>
                </div>
                <button type="button"
                        class="text-gray-600 dark:text-white h-[70px] ltr:-ml-10 ltr:mr-6 rtl:-mr-10 rtl:ml-10 vertical-menu-btn"
                        @click="verticalMenuButton">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <form class="app-search hidden xl:block px-5">
                    <div class="relative inline-block">
                        <input type="text"
                               class="bg-gray-50/30 dark:bg-zinc-700/50 border-0 rounded focus:ring-0 placeholder:text-sm px-4 dark:placeholder:text-gray-200 dark:text-gray-100 dark:border-zinc-700 "
                               placeholder="Search...">
                        <button
                            class="py-1.5 px-2.5 text-white bg-violet-500 inline-block absolute ltr:right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900 rtl:left-1 rtl:right-auto"
                            type="button"><i class="bx bx-search-alt align-middle"></i></button>
                    </div>
                </form>
            </div>
            <div class="flex items-center">

                <div>
                    <div class="dropdown relative sm:hidden block">
                        <button type="button"
                                class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle"
                                data-dropdown-toggle="navNotifications">
                            <i data-feather="search" class="h-5 w-5"></i>
                        </button>

                        <div
                            class="dropdown-menu absolute px-4 -left-36 top-0 mx-4 w-72 z-50 hidden list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300"
                            id="navNotifications">
                            <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                <div class="form-group m-0">
                                    <div class="flex w-full">
                                        <input type="text"
                                               class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit"
                                               placeholder="Search ..." aria-label="Search Result">
                                        <button
                                            class="btn btn-primary border-l-0 rounded-l-none bg-violet-500 border-transparent text-white"
                                            type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="dropdown relative language hidden sm:block">

                    <div
                        class="dropdown-menu absolute -left-24 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800"
                        id="navNotifications">
                        <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                            <li>
                                <a href="#"
                                   class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                    src="/images/flags/us.jpg" alt="user-image" class="mr-1 inline-block h-3">
                                    <span class="align-middle">English</span></a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                    src="/images/flags/spain.jpg" alt="user-image" class="mr-1 inline-block h-3">
                                    <span class="align-middle">Spanish</span></a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                    src="/images/flags/germany.jpg" alt="user-image"
                                    class="mr-1 inline-block h-3"> <span class="align-middle">German</span></a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                    src="/images/flags/italy.jpg" alt="user-image" class="mr-1 inline-block h-3">
                                    <span class="align-middle">Italian</span></a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div>
                    <div class="dropdown relative ">
                        <div class="relative">
                            <button type="button"
                                    class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-100"
                                    aria-expanded="false" data-dropdown-toggle="notification">
                                <i data-feather="bell" class="h-5 w-5"></i>
                            </button>
                            <span
                                class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-2.5">5</span>
                        </div>
                        <div
                            class="dropdown-menu absolute z-50 hidden w-80 list-none rounded bg-white shadow dark:bg-zinc-800 "
                            id="notification">
                            <div class="border border-gray-50 dark:border-gray-700 rounded"
                                 aria-labelledby="notification">
                                <div class="grid grid-cols-12 p-4">
                                    <div class="col-span-6">
                                        <h6 class="m-0 text-gray-700 dark:text-gray-100"> Notifications </h6>
                                    </div>
                                    <div class="col-span-6 justify-self-end">
                                        <a href="#!" class="text-xs underline dark:text-gray-400"> Unread (3)</a>
                                    </div>
                                </div>
                                <div class="max-h-56" data-simplebar>
                                    <div>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="/images/users/avatar-3.jpg"
                                                         class="rounded-full h-8 w-8" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">James Lemire</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">It will seem like simplified
                                                            English.</p>
                                                        <p class="mb-0"><i
                                                            class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>1 hour ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <div class="h-8 w-8 bg-violet-500 rounded-full text-center">
                                                        <i class="bx bx-cart text-xl leading-relaxed text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your order is
                                                        placed</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">If several languages coalesce
                                                            the grammar</p>
                                                        <p class="mb-0"><i
                                                            class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>3 min ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <div class="h-8 w-8 bg-green-500 rounded-full text-center">
                                                        <i class="bx bx-badge-check text-xl leading-relaxed text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your item is
                                                        shipped</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">If several languages coalesce
                                                            the grammar</p>
                                                        <p class="mb-0"><i
                                                            class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>3 min ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="/images/users/avatar-6.jpg"
                                                         class="rounded-full h-8 w-8" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Salena
                                                        Layfield</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">As a skeptical Cambridge
                                                            friend of mine occidental.</p>
                                                        <p class="mb-0"><i
                                                            class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>1 hour ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-1 border-t grid border-gray-50 dark:border-zinc-600 justify-items-center">
                                    <a class="btn border-0 text-violet-500" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle mr-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class=" relative ltr:mr-4 rtl:ml-4">
                        <button
                            @click="isProfileShow = !isProfileShow"
                            class="flex items-center px-4 py-5 border-x border-gray-50 bg-gray-50/30  dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100">
                            <img class="h-8 w-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2"
                                 src="/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="fw-medium  xl:block">Shawn L.</span>
                            <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                        </button>

                        <template v-if="isProfileShow">
                            <div
                                class="absolute top-0 ltr:-left-3 rtl:-right-3 z-50 show w-40 list-none rounded bg-white shadow dark:bg-zinc-800 show"
                                id="profile_log"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 72px);">
                                <div class="border border-gray-50 dark:border-zinc-600"
                                     aria-labelledby="navNotifications">
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50"
                                           href="">
                                            <i class="mdi mdi-face-man text-16 align-middle mr-1"></i> Profile
                                        </a>
                                    </div>
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50"
                                           href="">
                                            <i class="mdi mdi-lock text-16 align-middle mr-1"></i> Lock Screen
                                        </a>
                                    </div>
                                    <hr class="border-gray-50 dark:border-gray-700">
                                    <div class="dropdown-item dark:text-gray-100">
                                        <a class="p-3 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50"
                                           href="">
                                            <i class="mdi mdi-logout text-16 align-middle mr-1"></i> Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="hidden">
        <div class="fixed inset-0 bg-black/40 transition-opacity z-40"></div>
        <div class="h-screen z-50 bg-white fixed w-80 right-0" data-simplebar>
            <div class="flex items-center p-4 border-b border-gray-100">
                <h5 class="m-0 mr-2">Theme Customizer</h5>
                <a href="javascript:void(0);" class="h-6 w-6 text-center bg-gray-700 ml-auto rounded-full">
                    <i class="mdi mdi-close text-15 align-middle text-white leading-relaxed"></i>
                </a>
            </div>
            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout" id="layout-vertical"
                               value="vertical">
                        <label class="align-middle" for="layout-vertical">Vertical</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal"
                               value="horizontal">
                        <label class="align-middle" for="layout-horizontal">Horizontal</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-mode" id="layout-mode-light"
                               value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-width" id="layout-width-fuild"
                               value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed"
                               value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-position"
                               id="layout-position-fixed" value="fixed"
                               onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-position"
                               id="layout-position-scrollable" value="scrollable"
                               onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="topbar-color" id="topbar-color-light"
                               value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
                               onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>
                </div>
                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>
                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked type="radio" name="sidebar-size" id="sidebar-size-default"
                               value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact"
                               value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small"
                               value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked type="radio" name="sidebar-color" id="sidebar-color-light"
                               value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark"
                               value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand"
                               value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>
                <div class="space-y-1">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-direction"
                               id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl"
                               value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   left sidebar  -->
    <c-sidebar/>

</template>

<script setup>

import {ref, onMounted} from 'vue'
import MetisMenu from "metismenujs";
import feather from 'feather-icons';


var isProfileShow = ref(false)

// initLeftMenuCollapse
function initLeftMenuCollapse() {
    var currentSIdebarSize = document.body.getAttribute('data-sidebar-size');
    window.onload = function () {
        if (window.innerWidth >= 1024 && window.innerWidth <= 1366) {
            document.body.setAttribute('data-sidebar-size', 'sm');
            updateRadio('sidebar-size-small')
        }
    }
    var verticalButton = document.getElementsByClassName("vertical-menu-btn");
    for (var i = 0; i < verticalButton.length; i++) {
        (function (index) {
            verticalButton[index] && verticalButton[index].addEventListener('click', function (event) {
                event.preventDefault();
                document.body.classList.toggle('sidebar-enable');
                if (window.innerWidth >= 992) {
                    if (currentSIdebarSize == null) {
                        (document.body.getAttribute('data-sidebar-size') == null || document.body.getAttribute('data-sidebar-size') == "lg") ? document.body.setAttribute('data-sidebar-size', 'sm') : document.body.setAttribute('data-sidebar-size', 'lg')
                    } else if (currentSIdebarSize == "md") {
                        (document.body.getAttribute('data-sidebar-size') == "md") ? document.body.setAttribute('data-sidebar-size', 'sm') : document.body.setAttribute('data-sidebar-size', 'md')
                    } else {
                        (document.body.getAttribute('data-sidebar-size') == "sm") ? document.body.setAttribute('data-sidebar-size', 'lg') : document.body.setAttribute('data-sidebar-size', 'sm')
                    }
                } else {
                    initMenuItemScroll();
                }
            });
        })(i);
    }
}


function initMetisMenu() {
    new MetisMenu('#side-menu')
}

//
// function ligthDarkMode() {
//
//     var body = document.body;
//     data.settings.darkMode = !data.settings.darkMode;
//     if (data.settings.darkMode) {
//         document.body.setAttribute('data-mode', 'light')
//     } else {
//         document.body.setAttribute('data-mode', 'dark')
//     }
// }


onMounted(() => {

    initLeftMenuCollapse()
    // toogle sidebar

    initMetisMenu()
    // ligthDarkMode()


    // use feater icon
    feather.replace()
})


</script>
