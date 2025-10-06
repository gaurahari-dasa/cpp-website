<script setup>
import SectionHeading from "../../components/SectionHeading.vue";
import { XMarkIcon } from "@heroicons/vue/16/solid";

defineProps(["card"]);
defineEmits(["close"]);
</script>
<template>
    <div
        class="fixed inset-0 z-10 flex items-center justify-center bg-black/50"
    >
        <div
            class="relative flex max-h-5/6 max-w-5/6 flex-col items-center overflow-y-scroll bg-gray-200 px-8 py-10"
        >
            <XMarkIcon
                class="absolute top-1 right-1 size-6"
                @click="$emit('close')"
            />
            <img :src="card.page_image" alt="Podcast Popup Image" />
            <SectionHeading class="mt-20 text-deepblue-500">{{
                card.page_title
            }}</SectionHeading>
            <p class="mt-8 text-center text-2xl/loose text-deepblue-500">
                {{ card.page_text }}
            </p>
        </div>
    </div>
</template>
