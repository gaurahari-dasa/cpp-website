<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
import DoubleArrow from "../components/DoubleArrow.vue";
import ContentBuffer from "../components/ContentBuffer";
import LeftArrowHead from "../components/LeftArrowHead.vue";
import RightArrowHead from "../components/RightArrowHead.vue";

const props = defineProps(["baseUrl"]);
const buffer = new ContentBuffer(
    `${props.baseUrl}/akshaya-patra/carousel`,
    3,
    3,
);
</script>
<template>
    <Layout active="Akshaya Patra" :base-url>
        <div class="font-poppins">
            <img
                src="../../../images/akshaya-patra/CPP template - Akshaya Patra-modified.jpg"
                alt="Akshaya Patra Image"
            />
            <div class="flex flex-col items-center py-26">
                <SectionHeading class="text-deepblue-500"
                    >The Akshaya Patra Foundation</SectionHeading
                >
                <DoubleArrow class="mt-2" />
                <p class="mt-8 px-12 text-center text-xl/relaxed text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Odit nam omnis, deleniti rem ab adipisci assumenda
                    exercitationem aspernatur. Quaerat cupiditate illum soluta
                    aliquid alias dolorum repellat est eum, dolores velit!
                    Commodi velit rem laboriosam libero culpa, et laborum. Ab,
                    esse atque? Amet modi beatae illo dignissimos, veniam ipsum
                    itaque quasi esse adipisci, nihil ut explicabo consequatur
                    mollitia accusamus ea natus ad ipsa nobis deserunt quae
                    omnis voluptates. Possimus, tempore! Dolorum quia cupiditate
                    quis cumque provident voluptate ad, accusamus fuga tempore
                    eius ut blanditiis doloribus sunt debitis cum non, numquam
                    perferendis unde aliquid atque, odio maxime nulla dolores
                    soluta. Praesentium, recusandae.
                </p>
                <p class="mt-8 px-12 text-center text-xl/relaxed text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Odit nam omnis, deleniti rem ab adipisci assumenda
                    exercitationem aspernatur. Quaerat cupiditate illum soluta
                    aliquid alias dolorum repellat est eum, dolores velit!
                    Commodi velit rem laboriosam libero culpa, et laborum. Ab,
                    esse atque? Amet modi beatae illo dignissimos, veniam ipsum
                    itaque quasi esse adipisci, nihil ut explicabo consequatur
                    mollitia accusamus ea natus ad ipsa nobis deserunt quae
                    omnis voluptates. Possimus, tempore! Dolorum quia cupiditate
                    quis cumque provident voluptate ad, accusamus fuga tempore
                    eius ut blanditiis doloribus sunt debitis cum non, numquam
                    perferendis unde aliquid atque, odio maxime nulla dolores
                    soluta. Praesentium, recusandae.
                </p>
                <p class="mt-8 px-12 text-center text-xl/relaxed text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Odit nam omnis, deleniti rem ab adipisci assumenda
                    exercitationem aspernatur. Quaerat cupiditate illum soluta
                    aliquid alias dolorum repellat est eum, dolores velit!
                    Commodi velit rem laboriosam libero culpa, et laborum. Ab,
                    esse atque? Amet modi beatae illo dignissimos, veniam ipsum
                    itaque quasi esse adipisci, nihil ut explicabo consequatur
                    mollitia accusamus ea natus ad ipsa nobis deserunt quae
                    omnis voluptates. Possimus, tempore! Dolorum quia cupiditate
                    quis cumque provident voluptate ad, accusamus fuga tempore
                    eius ut blanditiis doloribus sunt debitis cum non, numquam
                    perferendis unde aliquid atque, odio maxime nulla dolores
                    soluta. Praesentium, recusandae.
                </p>
                <div
                    class="grid grid-cols-[0.8fr_2fr_0.8fr] items-center gap-4 bg-blue-100 py-10"
                >
                    <div
                        class="relative py-10"
                        v-for="(card, ix) in buffer.window.value"
                    >
                        <img :src="card.page_image" alt="TAPF Image" />
                        <h5
                            v-show="ix === 1"
                            class="text-semibold absolute bottom-1 left-1/2 -translate-x-1/2 text-lg text-gray-200"
                        >
                            {{ card.page_title }}
                        </h5>
                        <LeftArrowHead
                            class="absolute top-1/2 left-1 size-10 -translate-y-1/2"
                            v-show="ix === 0"
                        />
                        <RightArrowHead
                            class="absolute top-1/2 right-1 size-10 -translate-y-1/2"
                            v-show="ix === 2"
                        />
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
