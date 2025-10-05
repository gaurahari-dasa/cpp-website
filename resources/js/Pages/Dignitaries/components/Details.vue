<script setup>
import SectionHeading from "../../components/SectionHeading.vue";

defineProps(["card"]);
</script>
<template>
    <div class="mb-10 flex flex-col items-center">
        <img class="w-full" :src="card.details_image" alt="Detailed Image" />
        <SectionHeading class="mt-20 text-deepblue-500">{{
            card.details_title
        }}</SectionHeading>
        <p class="mt-12 text-center text-xl text-gray-500">
            {{ card.details_desc }}
        </p>
    </div>
</template>
