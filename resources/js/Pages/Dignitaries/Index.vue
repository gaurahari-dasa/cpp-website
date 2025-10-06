<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
import ContentStore from "../components/ContentStore";
import MediaCard from "./components/MediaCard.vue";
import Details from "./components/Details.vue";
import { ref } from "vue";

const props = defineProps(["baseUrl"]);
const store = new ContentStore(`${props.baseUrl}/dignitaries/thumbnails`, 6, 6);
const detailCard = ref(null);

function displayDetails(card) {
    detailCard.value = card;
    window.scrollTo(0, 0);
}
</script>

<template>
    <Layout active="Dignitaries">
        <Details v-if="detailCard" :card="detailCard" />
        <div
            class="flex flex-col items-center bg-deepblue-100 px-18 py-20 font-poppins"
        >
            <SectionHeading v-show="!detailCard" class="text-deepblue-500">
                Dignitaries
            </SectionHeading>
            <div class="mt-20 grid grid-cols-2 justify-items-center gap-6">
                <MediaCard
                    v-for="card in store.window.value"
                    :imgsrc="card.page_thumbnail"
                    :title="card.page_title"
                    :content="card.page_desc"
                    @click="displayDetails(card)"
                />
            </div>
            <button
                class="mt-12 bg-[#10447e] px-8 py-4 text-sm font-semibold text-gray-200 uppercase"
                @click="store.expand(6)"
            >
                Load More
            </button>
        </div>
    </Layout>
</template>
