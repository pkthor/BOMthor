<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
  <Head title="Thor BOM" />
  <div
    class="
      bg-gradient-to-b
      from-green-500
      to-green-100
      p-12
      text-center
      min-h-screen
    "
  >
    <div v-if="canLogin" class="fixed top-10 lg:top-0 right-0 px-6 py-4 lg:block ">
      <Link
        v-if="$page.props.auth.user"
        :href="route('dashboard')"
        class="text-sm text-gray-800 underline"
      >
        {{ $page.props.auth.user.name }}
      </Link>

      <template v-else>
        <Link 
          :href="route('login')" 
          class="text-xl lg:text-base text-gray-800 underline"
        >
          Log in
        </Link>

        <Link
          v-if="canRegister"
          :href="route('register')"
          class="ml-4 text-xl lg:text-base text-gray-800 underline"
        >
          Register
        </Link>
      </template>
    </div>
    <div class="grid place-items-center">
      <div class="mt-20 lg:mt-0 h-5/6 w-5/6 lg:h-6/12 lg:w-6/12">
        <icon name="christus2"></icon>
        <div class="text-2xl lg:text-2xl font-bold mt-6">Book of Mormon</div>
        <div class="text-xl lg:text-lg font-semibold">Thorderson Clan</div>
        <div class="mt-4 p-0 lg:p-2 p-0text-xxs object-bottom">
          <p class="text-lg lg:text-base">
			Made with love by Uncle Kurt
          </p>
        </div>
      </div>
    </div>
  </div>
</template>
