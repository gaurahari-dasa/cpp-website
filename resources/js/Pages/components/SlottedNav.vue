<script setup>
import { ref, watch } from "vue";

const props = defineProps(["items"]);
const emit = defineEmits(["selected"]);
const selectedIx = ref(null);
function select(ix) {
    selectedIx.value = ix;
    emit("selected", props.items[ix]);
}
select(0);
</script>
<template>
    <div class="flex items-center justify-center">
        <span
            class="w-30 grow-0 cursor-pointer border border-deepblue-500 py-4 text-center text-sm font-semibold"
            :class="
                ix === selectedIx
                    ? 'bg-deepblue-500 text-gray-200'
                    : 'bg-gray-200 text-deepblue-500'
            "
            v-for="(item, ix) in items"
            @click="select(ix)"
            >{{ item }}</span
        >
    </div>
</template>
