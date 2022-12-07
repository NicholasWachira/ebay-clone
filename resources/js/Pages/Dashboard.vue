<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="p-5 border border-sky-900 m-5 rounded-lg">
        	<div class="border border-sky-900 max-w-xs rounded">
        		<img src="https://via.placeholder.com/250" class="p-2 mx-auto">
        		<p class="text-white ml-5">Title One</p>
        	</div>
        </div>
    </AuthenticatedLayout>
</template>
