<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/GuestLayout.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Forgot Password" />

        <div class="mb-4 text-2xl lg:text-base text-gray-600 text-center">
            Have you forgotten your password? Not a problem. Please provide us with your email address and we will send you a link to create a new password.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="email" value="Email" class="text-3xl lg:text-base font-semibold"  />
                <BreezeInput id="email" type="email" class="mt-1 block w-full text-2xl lg:text-base" v-model="form.email" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4 text-xl lg:text-base">
                <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Password reset link
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
