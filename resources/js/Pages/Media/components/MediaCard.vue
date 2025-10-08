<script setup>
import { ChevronLeftIcon } from "@heroicons/vue/16/solid";

function formatDate(date) {
    date = new Date(date);
    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    return `${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}`;
}
const props = defineProps(["card"]);
</script>
<template>
    <div class="border border-gray-200 px-1 py-3 shadow-lg">
        <img class="w-full" :src="card.page_image" alt="Media Image" />
        <h4 class="mt-4 text-center font-semibold text-deepblue-500">
            {{ card.page_ref }}
        </h4>
        <h4 class="mt-1 text-center font-semibold text-deepblue-500">
            Date - {{ formatDate(card.date_ref) }}
        </h4>
    </div>
</template>
