<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
import DoubleArrow from "../components/DoubleArrow.vue";
import ContentBuffer from "../components/ContentBuffer";
import LeftArrowHead from "../components/LeftArrowHead.vue";
import RightArrowHead from "../components/RightArrowHead.vue";
import Details from "./components/Details.vue";

import { ref } from "vue";

const props = defineProps(["baseUrl"]);
const buffer = new ContentBuffer(`${props.baseUrl}/podcasts/carousel`, 3, 1);
const detailCard = ref(null);

function displayDetails(card) {
    detailCard.value = card;
    window.scrollTo(0, 0);
}
</script>
<template>
    <Layout active="Podcasts" :base-url>
        <div class="font-poppins">
            <Details
                v-if="detailCard"
                :card="detailCard"
                @close="detailCard = null"
            />
            <div
                class="flex flex-col items-center bg-[url(../images/home-page/bg1.jpg)] py-24"
            >
                <SectionHeading class="text-deepblue-500"
                    >Podcasts</SectionHeading
                >
                <DoubleArrow />
                <div :class="detailCard ? 'invisible' : 'visible'">
                    <div
                        class="mt-16 grid grid-cols-[3fr_4fr_3fr] items-center"
                    >
                        <div
                            class="relative p-4"
                            v-for="(card, ix) in buffer.window.value"
                        >
                            <img
                                class="w-full shadow-xl"
                                :src="card.page_image"
                                alt="Podcast Image"
                                @click="displayDetails(card)"
                            />
                            <LeftArrowHead
                                @click="buffer.backward(1)"
                                v-show="ix === 0"
                                class="absolute top-1/2 left-2 size-10 -translate-y-1/2"
                            />
                            <RightArrowHead
                                @click="buffer.forward(1)"
                                v-show="ix === buffer.window.value.length - 1"
                                class="absolute top-1/2 right-2 size-10 -translate-y-1/2"
                            />
                        </div>
                    </div>
                    <div
                        class="mt-4 grid grid-cols-[3fr_4fr_3fr] items-center gap-4"
                    >
                        <div v-for="(card, ix) in buffer.window.value">
                            <div v-show="ix === 1">
                                <p
                                    class="text-center text-3xl text-deepblue-500"
                                >
                                    {{ card.page_title }}
                                </p>
                                <p
                                    class="mt-4 text-center text-base/relaxed text-gray-500"
                                >
                                    {{ card.page_text }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
