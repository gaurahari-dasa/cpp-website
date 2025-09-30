<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["href", "active"]);
</script>

<template>
    <Link
        :href
        class="font-semibold uppercase"
        :class="{ 'text-deepblue-500': active }"
        ><slot
    /></Link>
</template>
