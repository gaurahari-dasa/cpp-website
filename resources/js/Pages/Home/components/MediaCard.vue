<script setup>
defineProps(["imgsrc", "title", "content"]);
</script>
<template>
    <div class="flex w-80 flex-col items-center bg-gray-50 pb-10">
        <img :src="imgsrc" class="w-full" alt="Media Image" />
        <p class="mt-6 text-center text-xl font-medium text-deepblue-500">
            {{ title }}
        </p>
        <p class="mt-4 px-8 text-center text-xs leading-loose text-gray-500">
            {{ content }}
        </p>
        <button
            class="mt-6 bg-teal-600 px-8 py-4 text-sm font-semibold text-gray-200 uppercase"
        >
            Read More
        </button>
    </div>
</template>
