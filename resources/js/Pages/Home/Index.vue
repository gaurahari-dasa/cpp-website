<script setup>
import Layout from "../Layout.vue";
import LeftArrowButton from "./components/LeftArrowButton.vue";
import RightArrowButton from "./components/RightArrowButton.vue";
import SectionHeading from "./SectionHeading.vue";
import MediaCard from "./components/MediaCard.vue";
import LeftButton from "./components/LeftButton.vue";
import RightButton from "./components/RightButton.vue";
</script>

<template>
    <Layout>
        <div class="font-poppins">
            <!-- Hero Section, Haribol -->
            <section class="relative">
                <img
                    src="../../../images/home-page/ban-logo.png"
                    alt="Banner Logo"
                    class="absolute top-6 right-10 w-[43%]"
                />
                <img
                    src="../../../images/home-page/Top-banner.jpg"
                    alt="Top Banner"
                />
                <h1
                    class="absolute top-1/2 right-10 text-center text-3xl text-gray-200"
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
                    src="../../../images/home-page/img3.png"
                    class="w-[40%] shrink-0"
                    alt="CPP Intro Image"
                />
                <div class="relative flex-col">
                    <div class="mt-8 w-36 border border-gray-800"></div>
                    <div
                        class="absolute -left-6 mt-2 w-36 border border-dashed border-gray-800"
                    ></div>
                    <p class="mt-12 text-[22px] text-gray-600">
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

            <!-- Contributions Sections, Haribol -->
            <section
                class="flex flex-col items-center bg-[url(../images/home-page/bg2.jpg)] px-32 pt-16 pb-30"
            >
                <SectionHeading class="text-gray-200"
                    >Contributions</SectionHeading
                >
                <div class="mt-10 flex flex-row items-center">
                    <LeftArrowButton />
                    <div class="relative ml-4 flex shrink-0 flex-row">
                        <img
                            class="w-[28rem] shrink-0"
                            src="../../../images/Akshaya Patra Foundation- Contributions.png"
                            alt="Placeholder image"
                        />
                        <div
                            class="relative top-20 right-10 size-[30rem] shrink-0 bg-gray-200 px-20 py-16"
                        >
                            <h3 class="text-3xl font-medium text-deepblue-500">
                                Akshaya Patra Foundation
                            </h3>
                            <p
                                class="mt-4 h-48 overflow-hidden text-base/loose text-gray-600"
                            >
                                The Akshaya Patra Foundation was established
                                with a mission to address the problem of
                                classroom hunger. It is a non-profit
                                organization that operates one of the world's
                                largest mid-day meal programs.
                            </p>
                            <button
                                class="mt-6 border border-blue-800 px-8 py-4 text-[0.9rem] font-medium text-gray-800 uppercase"
                            >
                                Read More
                            </button>
                        </div>
                    </div>
                    <RightArrowButton class="-ml-6" />
                </div>
            </section>

            <!-- Highlights Section, Haribol -->
            <section class="grid grid-cols-[45%_55%]">
                <div
                    class="flex flex-col items-center place-self-center bg-[#def0fa] px-20 py-16"
                >
                    <SectionHeading class="text-deepblue-500"
                        >Highlights</SectionHeading
                    >
                    <p
                        class="mt-8 text-center text-base/loose font-light text-gray-600"
                    >
                        Key moments from our core initiatives and impactful
                        projects focused towards community upliftment, social
                        welfare programmes and cultural heritage preservation.
                    </p>
                    <button
                        class="mt-6 border border-blue-800 px-8 py-4 text-[0.9rem] font-medium text-gray-800 uppercase"
                    >
                        Read More
                    </button>
                </div>
                <img
                    src="../../../images/home-page/highlights-img1.jpg"
                    alt="Highlights Image"
                />
            </section>

            <!-- Media Section, Haribol -->
            <section
                class="flex flex-col items-center bg-[url(../images/home-page/bg1.jpg)] bg-cover px-4 py-20"
            >
                <SectionHeading class="text-deepblue-500">Media</SectionHeading>
                <div class="flex flex-row items-center justify-center gap-4">
                    <LeftButton />
                    <div class="mt-16 grid grid-cols-3 gap-8">
                        <MediaCard
                            imgsrc="/img/media-img1.jpg"
                            title="Gita Jayanti 2024"
                            content="Sri Chanchalapathi Dasa explains that reading the Bhagavad Gita properly, as advised by Krishna, is like seeing Him face-to-face. This involves approaching a bonafide spiritual master with devotion and surrender..."
                        />
                        <MediaCard
                            imgsrc="/img/media-img2.jpg"
                            title="The role of meditation in mental health"
                            content="Meditation, as emphasized by Srila Prabhupada, is a transformative process that aligns individuals with their true spiritual nature, reduces stress, and builds resilience."
                        />
                        <MediaCard
                            imgsrc="/img/media-img3.jpg"
                            title="What is the goal of life?"
                            content="One has to be very blessed to get the right understanding. But what happens? Even in our country, there are so many philosophers, and even scholars of Vedic knowledge, yet they still miss some essential truths."
                        />
                    </div>
                    <RightButton />
                </div>
            </section>
        </div>
    </Layout>
</template>
