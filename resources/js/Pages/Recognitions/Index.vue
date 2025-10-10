<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
import DoubleArrow from "../components/DoubleArrow.vue";

defineProps(["baseUrl"]);
</script>
<template>
    <Layout active="Home" :base-url>
        <div class="font-poppins">
            <div class="flex flex-col items-center bg-blue-50 px-70 py-36">
                <SectionHeading class="text-deepblue-500"
                    >Recognitions</SectionHeading
                >
                <DoubleArrow />
                <div class="mt-20">
                    <img
                        src="../../../images/recognitions/recog1.jpg"
                        alt="Recognition for CPP"
                    />
                    <p class="mt-6 text-4xl font-medium text-deepblue-500">
                        lorem ipsum
                    </p>
                    <p class="mt-4 text-base/relaxed text-gray-500">
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Voluptatum aliquid vitae facere optio dolores
                        impedit, quisquam nam dolorem quam eos animi nihil et
                        quae distinctio vero perspiciatis mollitia totam minima.
                    </p>
                </div>
                <div class="mt-16">
                    <img
                        src="../../../images/recognitions/recog2.jpg"
                        alt="Recognition for CPP"
                    />
                    <p class="mt-6 text-4xl font-medium text-deepblue-500">
                        lorem ipsum
                    </p>
                    <p class="mt-4 text-base/relaxed text-gray-500">
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Voluptatum aliquid vitae facere optio dolores
                        impedit, quisquam nam dolorem quam eos animi nihil et
                        quae distinctio vero perspiciatis mollitia totam minima.
                    </p>
                </div>
            </div>
        </div>
    </Layout>
</template>
