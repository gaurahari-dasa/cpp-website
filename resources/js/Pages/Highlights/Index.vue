<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
import DoubleArrow from "../components/DoubleArrow.vue";
import SlottedNav from "../components/SlottedNav.vue";
import ContentStore from "../components/ContentStore";
import { ref } from "vue";

const props = defineProps(["baseUrl"]);
const store = ref(null);
function navigateTo(year) {
    store.value = new ContentStore(
        `${props.baseUrl}/highlights/thumbnails?year=${year}`,
        2,
        2,
    );
}
</script>
<template>
    <Layout active="Home" :base-url>
        <div class="font-poppins">
            <div class="flex flex-col items-center">
                <SectionHeading class="mt-20 text-deepblue-500"
                    >Highlights</SectionHeading
                >
                <DoubleArrow class="mt-4" />
                <SlottedNav
                    @selected="navigateTo($event)"
                    class="mt-10"
                    :items="[2025, 2024, 2023, 2022, 2021, 2020]"
                />
            </div>
            <div v-if="store" class="mt-26 flex flex-col items-center gap-26">
                <div v-for="card in store.window" class="px-26">
                    <h3
                        class="text-center text-4xl font-semibold text-deepblue-500"
                    >
                        {{ card.page_title }}
                    </h3>
                    <div class="mt-10 flex items-center gap-8">
                        <img
                            class="w-2/5 shrink-0"
                            :src="card.page_image"
                            alt="Hightlights Image"
                        />
                        <p class="text-base/loose text-gray-500">
                            {{ card.page_text }}
                        </p>
                    </div>
                </div>
                <button
                    class="bg-[#10447e] px-8 py-4 text-sm font-semibold text-gray-200 uppercase"
                    @click="store.expand(2)"
                >
                    Load More
                </button>
            </div>
        </div>
    </Layout>
</template>
