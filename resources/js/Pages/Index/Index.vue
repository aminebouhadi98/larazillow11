<template>
         <div>
             Index
         </div>
         <link href="/hello" Show Page>
         <div>
             The Message is {{ message }}
         </div>
 </template>
 
 <script setup>
     import { Link } from "@inertiajs/vue3";
     defineProps({
         message: String,
     });
 </script>
 


 <script>
 /*import MainLayout from "../../Layouts/MainLayout.vue";

 export default {
     layout: MainLayout,
 };*/
</script>
