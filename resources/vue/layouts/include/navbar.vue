<template>

    <!-- ========== Left Sidebar Start ========== -->
    <div
        class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

        <div data-simplebar class="h-full">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default"
                        data-key="t-menu">Menu
                    </li>
                    <li>
                        <a-link href="/"
                                class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"
                        ><i data-feather="home"></i>
                            <span data-key="t-dashboard"> Dashboard</span>
                        </a-link>
                    </li>
                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                           class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="grid"></i>
                            <span data-key="t-apps"> Apps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="app-calendar.html"
                                   class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                            </li>
                            <li>
                                <a href="app-chat.html"
                                   class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chat</a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                   class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Email</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-email-inbox.html"
                                           class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html"
                                           class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Read
                                            Email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                   class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Invoices</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-invoices-list.html"
                                           class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-invoices-detail.html"
                                           class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                            Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                   class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Contacts</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-contacts-grid.html"
                                           class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                            Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-list.html"
                                           class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-profile.html"
                                           class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
</template>

<script>
export default {
    name: "navbar"
}
</script>

<style scoped>

</style>
