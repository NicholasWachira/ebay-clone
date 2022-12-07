<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="p-3 border border-sky-900 m-1 rounded-lg flex justify-between">
        	<div class="border border-sky-900 mr-3 p-2 rounded-lg">
        		<img src="https://via.placeholder.com/100" class="rounded mb-2">
        		<img src="https://via.placeholder.com/100" class="rounded mb-2">
        		<img src="https://via.placeholder.com/100" class="rounded mb-2">
        		<img src="https://via.placeholder.com/100" class="rounded mb-2">
        		<img src="https://via.placeholder.com/100" class="rounded mb-2">
        		<img src="https://via.placeholder.com/100" class="rounded mb-2">
        	</div>
        	<div class="max-w-xl w-full">
        		<img src="https://via.placeholder.com/700" class="rounded" width="700" height="700">
        	</div>
        	<div class="max-w-sm w-full p-2 m-2 rounded-lg">
        		<h1 class="text-white text-2xl font-bold">{{ product.data.title }}</h1>
        		<div class="border-b border-sky-900 mt-3"/>
        		<div class="mt-3">
        			<h1 class="text-white text-lg mb-1">Condition: <small class="font-bold"> {{product.data.condition}}</small></h1>
        			<h1 class="text-white text-lg ml-10 italic">"Good as New"</h1>
        		</div>
        		<div class="border-b border-sky-900 mt-5"/>
        		<div class="flex justify-between items-center">
        			<div class="text-white text-2xl">
        				Price
        			</div>
        			<div class="text-white font-bold">
        				Ksh {{product.data.price}}
        			</div>
        			<div class="flex flex-col">
        				<Link class="bg-sky-900 text-white text-center m-3 p-2 rounded-full">
        					Buy It Now
        				</Link>
        				<Link class="bg-sky-900 text-white text-center m-3 p-2 rounded-full">
        					Add to Cart
        				</Link>
        				<Link class="bg-sky-900 text-white text-center m-3 p-2 rounded-full">
        					Add to watchlist
        				</Link>
        			</div>
        		</div>
        		<div class="border-b border-sky-900 mt-5"/>
        	</div>
        	<div class="max-w-xs p-2 border border-sky-900 m-2 rounded-lg text-white">
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
			product: Object
		}
	}
</script>


