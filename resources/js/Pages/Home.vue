<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="p-5 border border-sky-900 m-5 rounded-lg mb-5">
        	<h1 class="text-3xl lg:text-4xl leading-10 font-extrabold tracking-tight text-white uppercase">Explore Popular Categories</h1>
        	<div class="mt-5 flex justify-start items-center">
        		<div v-for="(category, index) in categories.data" :key="category.id">
        			<img :src="category.image" class="max-w-xs rounded-full mr-5 ml-5" width="150" height="150">
        			<p class="text-white text-center text-sm underline mt-3">{{ category.name }}</p>
        		</div>
        	</div>
    		<h1 class="text-3xl lg:text-4xl leading-10 font-extrabold tracking-tight text-white uppercase mt-10">Shop These Timeless Watch Brands</h1>
        	<div class="mt-5 flex justify-start items-center">
        		<div v-for="(product, index) in products.data" :key="product.id">
        			<Link :href="route('product.show', product)">
                        <div class="max-w-xs border border-sky-900 p-1 rounded-lg ml-5">
                            <img :src="product.thumb" class="rounded mx-auto">
                            <p class="ml-4 mt-3 uppercase text-gray-400 text-sm">Sponsored</p>
                            <p class="text-white ml-4 mt-1 text-sm hover:underline max-w-xs mt-1">{{ product.title }}</p>
                            <p class="ml-4 uppercase text-gray-500 font-bold mt-2 text-xs">{{ product.condition }}</p>
                            <p class="text-white ml-4 font-bold text-lg">Ksh {{ product.price }}</p>
                            <p class="ml-4 mt-3 uppercase text-gray-500 text-xs">Free Shipping</p>         
                        </div>         
                    </Link>
        		</div>
        	</div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
	import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
	import { Head, Link } from '@inertiajs/inertia-vue3';

	export default {
		components: {
			AuthenticatedLayout,
			Head,
            Link
		},
		props: {
			categories: Object,
			products: Object,
		}
	}
</script>

