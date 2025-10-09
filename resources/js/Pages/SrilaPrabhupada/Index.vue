<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
</script>
<template>
    <Layout active="Home" :base-url>
        <div class="font-poppins">
            <!-- About Section, Haribol -->
            <section
                class="flex gap-20 bg-[url(../images/sp-page/bg1.jpg)] bg-cover px-18 py-34"
            >
                <img
                    src="../../../images/sp-page/i1.png"
                    class="w-[50%] shrink-0"
                    alt="SP Intro Image"
                />
                <div class="relative flex-col">
                    <div class="mt-8 w-36 border border-gray-800"></div>
                    <div
                        class="absolute -left-6 mt-2 w-36 border border-dashed border-gray-800"
                    ></div>
                    <SectionHeading class="mt-10 text-deepblue-500"
                        >Srila Prabhupada</SectionHeading
                    >
                    <p class="mt-12 text-[22px]/relaxed text-gray-600">
                        Our inspiration, His Divine Grace A. C. Bhaktivedanta
                        Swami Prabhupada, the Founder-Acharya of the
                        International Society for Krishna Consciousness
                        (ISKCON), also known as the Hare Krishna Movement,
                        dedicated his life to spreading the timeless teachings
                        of Lord Krishna across the world. In 1965, at the age of
                        69, Srila Prabhupada embarked on a historic journey to
                        the United States to share the teachings of Bhakti Yoga
                        and introduce Krishna Consciousness to the Western
                        world.
                    </p>
                </div>
            </section>

            <!-- Rath Yatra Section, Haribol -->
            <section>
                <img
                    class="w-full"
                    src="../../../images/sp-page/ii1.jpg"
                    alt="Srila Prabhupada dancing in Rath Yatra"
                />
                <p
                    class="px-18 py-28 text-center text-[22px]/relaxed text-gray-500"
                >
                    During his mission in the West, Srila Prabhupada founded
                    ISKCON in New York City, which expanded into a global
                    movement with over a hundred temples and thriving
                    communities under his guidance.<br /><br />Srila Prabhupada
                    translated and provided extensive commentary on numerous
                    Vedic scriptures, including the Bhagavad Gita and the Srimad
                    Bhagavatam. He propagated the congregational chanting of the
                    Holy Names of Lord Krishna, as a powerful path to spiritual
                    realization and inner peace.
                </p>
            </section>

            <!-- Vishwaguru Title Section, Haribol -->
            <section class="flex items-center bg-[#def0fa]">
                <p class="px-20 text-[22px]/relaxed text-gray-500">
                    Srila Prabhupada’s vision and legacy continue through the
                    ongoing initiatives, spiritual and social activities at the
                    centres of the Hare Krishna Movement and the global
                    community of devotees. In recognition of his unparalleled
                    contributions in spreading the glories of spiritual wisdom
                    and Lord Krishna’s eternal teaching worldwide, the Akhila
                    Bharatiya Akhara Parishad conferred upon him the honorary
                    title of “Vishwa Guru” at the Maha Kumbh Mela 2025.
                </p>
                <img
                    src="../../../images/sp-page/img1.jpg"
                    alt="Vishwa Guru Title Ceremony"
                    class="w-[38%] shrink-0"
                />
            </section>
        </div>
    </Layout>
</template>
