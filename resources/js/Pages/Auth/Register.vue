<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/GuestLayout.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Sign in" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="name" value="Nome" class="text-3xl lg:text-base"  />
                <BreezeInput id="name" type="text" class="mt-1 block w-full text-2xl lg:text-base" v-model="form.name" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="email" value="Email" class="text-3xl lg:text-base"  />
                <BreezeInput id="email" type="email" class="mt-1 block w-full text-2xl lg:text-base" v-model="form.email" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password" value="Password" class="text-3xl lg:text-base"  />
                <BreezeInput id="password" type="password" class="mt-1 block w-full text-2xl lg:text-base" v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password_confirmation" value="Conferma Password" class="text-3xl lg:text-base"  />
                <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full text-2xl lg:text-base" v-model="form.password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline  text-xl lg:text-base text-gray-600 hover:text-gray-900">
                    Already registered?
                </Link>

                <BreezeButton class="ml-4 text-xl lg:text-base" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Sign in
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
