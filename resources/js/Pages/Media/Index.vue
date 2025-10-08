<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
import DoubleArrow from "../components/DoubleArrow.vue";
import ContentBuffer from "../components/ContentBuffer";
import MediaCard from "./components/MediaCard.vue";
import LeftArrowHeadBlue from "../components/LeftArrowHeadBlue.vue";
import RightArrowHeadBlue from "../components/RightArrowHeadBlue.vue";

const props = defineProps(["baseUrl"]);
const buffer = new ContentBuffer(`${props.baseUrl}/media/carousel`, 3, 3);
</script>
<template>
    <Layout active="Home" :base-url>
        <div class="font-poppins">
            <div
                class="flex flex-col items-center bg-[url(../images/media/bg1.jpg)] px-16 py-20"
            >
                <SectionHeading class="text-deepblue-500">
                    Media
                </SectionHeading>
                <DoubleArrow class="mt-4" />
                <div
                    class="mt-10 grid grid-cols-[2rem_1fr_1fr_1fr_2rem] items-center gap-2"
                >
                    <LeftArrowHeadBlue @click="buffer.backward(3)" />
                    <div class="px-2 py-1" v-for="card in buffer.window.value">
                        <MediaCard :card />
                    </div>
                    <RightArrowHeadBlue @click="buffer.forward(3)" />
                </div>
            </div>
        </div>
    </Layout>
</template>
