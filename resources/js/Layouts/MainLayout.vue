<template>
   <link href="/listing" Listings/>&nbsp;
   <link href="/listing/create" New Listing/>
   <!-- <div>The page with time {{ timer }}</div>-->
   <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Listings</Link>
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
          <Link :href="route('listing.index')">LaraZillow</Link>
        </div>
        <div>
          <Link :href="route('listing.create')" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">+ New Listing</Link>
        </div>
      </nav>
    </div>
  </header>
  <main class="container mx-auto p-4">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      {{ flashSuccess }}
    </div>
    <slot>Default</slot>
  </main>


</template>

<script setup>
   import { Link, usePage } from "@inertiajs/vue3";
   import { computed } from "vue";
   import { ref } from "vue";

   const page = usePage();
   const timer = ref(0);

   const flashSuccess = computed(() => page.props.flash.success);
   /*const x = ref(0);
const y = computed(() => x.value * 2)*/
   setInterval(() => timer.value++, 1000);
</script>

