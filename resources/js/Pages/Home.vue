<script setup>
import Layout from "./Layout.vue";
</script>

<template>
    <Layout>
        <div>
            <!-- Hero Section, Haribol -->
            <section class="relative">
                <img
                    src="../../images/home-page/ban-logo.png"
                    alt="Banner Logo"
                    class="absolute top-6 right-10 w-[43%]"
                />
                <img
                    src="../../images/home-page/Top-banner.jpg"
                    alt="Top Banner"
                />
                <h1
                    class="absolute top-1/2 right-10 text-center font-poppins text-3xl text-gray-200"
                >
                    The Official Website of<br /><span
                        class="text-4xl font-medium"
                        >Sri Chanchalapathi Dasa</span
                    >
                </h1>
            </section>

            <!-- About Section, Haribol -->
            <section
                class="flex flex-row gap-20 bg-[url(../images/home-page/bg1.jpg)] bg-cover px-18 py-24"
            >
                <img
                    src="../../images/home-page/img3.png"
                    class="w-[40%] shrink-0"
                    alt="CPP Intro Image"
                />
                <div class="relative flex-col">
                    <div class="mt-8 w-36 border border-gray-800"></div>
                    <div
                        class="absolute -left-6 mt-2 w-36 border border-dashed border-gray-800"
                    ></div>
                    <p class="mt-12 font-poppins text-[22px] text-gray-600">
                        Sri Chanchalapathi Dasa came across the teachings of
                        Srila Prabhupada while pursuing his studies at the
                        prestigious Indian Institute of Science and became
                        interested in his mission. As he gained a deeper
                        understanding of Srila Prabhupada’s philosophy and
                        ideals, he dedicated himself fully to the Krishna
                        consciousness movement. Thus, he joined ISKCON Bangalore
                        in 1984 and has been working tirelessly for the
                        betterment of humanity since then.
                    </p>
                    <button
                        class="mt-10 bg-teal-600 px-8 py-4 text-sm font-semibold text-gray-200 uppercase"
                    >
                        Read More
                    </button>
                </div>
            </section>
        </div>
    </Layout>
</template>
