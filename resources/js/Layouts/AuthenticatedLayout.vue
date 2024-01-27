<script setup>
import { ref } from 'vue';
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import BreezeDropdown from '@/Components/Dropdown.vue';
import BreezeDropdownLink from '@/Components/DropdownLink.vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <!-- Main background -->
        <div class="min-h-screen w-auto h-auto bg-green-200">
            <nav class="bg-green-300 border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 lg:px-8">
                    <div class="flex justify-between h-16 lg:h-12">
                        <div class="flex">

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                                <BreezeNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Book of Mormon
                                </BreezeNavLink>
                            </div>
                            <!-- <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                                <BreezeNavLink :href="route('history2')" :active="route().current('history2')">
                                    Conversion Stories 2
                                </BreezeNavLink>
                            </div> -->
                            <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                                <BreezeNavLink :href="route('history')" :active="route().current('history')">
                                    Conversion Stories
                                </BreezeNavLink>
                            </div>
                            <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                                <BreezeNavLink :href="route('reader')" :active="route().current('reader')">
                                    FAQ
                                </BreezeNavLink>
                            </div>
                        </div>

                        <div class="hidden lg:flex lg:items-center lg:ml-6 h-28 lg:h-12">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <BreezeDropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-xl sm:text-sm leading-4 font-medium rounded-md text-gray-600 bg-green-100 hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <!-- this is the down facing caret svg -->
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content class="bg-green-200">
                                        <BreezeDropdownLink :href="route('reader')" method="get" as="button" >
                                            FAQ
                                        </BreezeDropdownLink>
                                        <!-- <BreezeDropdownLink :href="route('history2')" method="get" as="button" >
                                            Conversion Stories 2
                                        </BreezeDropdownLink> -->
                                        <BreezeDropdownLink :href="route('history')" method="get" as="button" >
                                            Conversion Stories
                                        </BreezeDropdownLink>
                                        <BreezeDropdownLink :href="route('logout')" method="post" as="button">
                                            Log out
                                        </BreezeDropdownLink>
                                    </template>
                                </BreezeDropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center lg:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-blue-500 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-blue-600 transition duration-150 ease-in-out">
                                <svg class="h-12 w-12" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="lg:hidden">
                    <div class="pt-2 pb-3 space-y-1 text-xl">
                        <BreezeResponsiveNavLink class="text-3xl" :href="route('dashboard')" :active="route().current('dashboard')">
                            Book of Mormon
                        </BreezeResponsiveNavLink>
                    </div>
                    <!-- <div class="pt-2 pb-3 space-y-1">
                        <BreezeResponsiveNavLink class="text-3xl" :href="route('history2')" :active="route().current('history2')">
                            Conversion Stories 2
                        </BreezeResponsiveNavLink>
                    </div> -->
                    <div class="pt-2 pb-3 space-y-1">
                        <BreezeResponsiveNavLink class="text-3xl" :href="route('history')" :active="route().current('history')">
                            Conversion Stories
                        </BreezeResponsiveNavLink>
                    </div>
                    <div class="pt-2 pb-3 space-y-1">
                        <BreezeResponsiveNavLink class="text-3xl" :href="route('reader')" :active="route().current('reader')">
                            FAQ
                        </BreezeResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-xl text-gray-800">{{ $page.props.auth.user.name }}</div>
                            <div class="font-medium text-xl text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <BreezeResponsiveNavLink class="text-3xl" :href="route('logout')" method="post" as="button">
                                Log out
                            </BreezeResponsiveNavLink> 
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content. Audio.vue -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
