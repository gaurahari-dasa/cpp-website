<script setup>
import { XMarkIcon } from "@heroicons/vue/16/solid";

defineEmits(["close"]);
</script>
<template>
    <div
        class="fixed inset-0 z-10 flex items-center justify-center bg-gray-800/50"
    >
        <div
            class="relative flex max-h-5/6 flex-col items-center overflow-y-scroll"
        >
            <XMarkIcon
                class="absolute top-1 right-1 size-6 text-gray-200"
                @click="$emit('close')"
            />
            <slot />
        </div>
    </div>
</template>
