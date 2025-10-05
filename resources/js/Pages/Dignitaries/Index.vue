<script setup>
import Layout from "../Layout.vue";
import SectionHeading from "../Home/SectionHeading.vue";
import ContentBuffer from "../../ContentBuffer";
import MediaCard from "./components/MediaCard.vue";
import { ref } from "vue";

// setTimeout(function () {
//     obj.moveNext();
//     setTimeout(function () {
//         obj.moveBack();
//     }, 1000);
// }, 1000);
const buffer = new ContentBuffer(
    "http://127.0.0.1:8000/dignitaries/thumbnails",
    3,
);
</script>

<template>
    <Layout active="Dignitaries">
        <div
            class="flex flex-col items-center bg-deepblue-100 px-18 py-20 font-poppins"
        >
            <SectionHeading class="text-deepblue-500">
                Dignitaries
            </SectionHeading>
            <div class="mt-20 grid grid-cols-2 justify-items-center gap-6">
                <MediaCard
                    v-for="card in buffer.window.value"
                    :imgsrc="card.page_thumbnail"
                    :title="card.page_title"
                    :content="card.page_desc"
                />
            </div>
            <button
                class="mt-12 bg-[#10447e] px-8 py-4 text-sm font-semibold text-gray-200 uppercase"
            >
                Load More
            </button>
        </div>
    </Layout>
</template>
