<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["href"]);
</script>

<template>
    <Link :href class="font-semibold uppercase"><slot /></Link>
</template>
