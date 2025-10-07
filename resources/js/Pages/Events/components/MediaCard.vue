<script setup>
defineProps(["imgsrc", "title", "content"]);
defineEmits(["click"]);
</script>
<template>
    <div class="flex flex-col items-center bg-gray-50 pb-10 shadow-lg">
        <img :src="imgsrc" class="w-full" alt="Media Image" />
        <p class="mt-6 text-center text-3xl font-medium text-deepblue-500">
            {{ title }}
        </p>
        <p class="mt-4 px-8 text-center leading-loose text-gray-500">
            {{ content }}
        </p>
        <button
            class="mt-6 bg-[#399099] px-8 py-4 text-sm font-semibold text-gray-200 uppercase"
            @click="$emit('click')"
        >
            Read More
        </button>
    </div>
</template>
