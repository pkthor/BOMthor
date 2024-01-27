<script setup>

import Moroni from '@/Components/Moroni.vue';
import Christus from '@/Components/Christus.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 
        bg-gradient-to-b
        from-green-500
        to-green-100">
        <div>
            <Link href="/">
                <!-- This is currently a star placeholder in Christus.vue /> -->
                <Moroni class="w-30 h-30 fill-current text-green-700" />
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
