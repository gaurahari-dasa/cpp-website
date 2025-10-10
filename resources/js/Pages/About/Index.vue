<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
import DoubleArrow from "../components/DoubleArrow.vue";
import ContentBuffer from "../components/ContentBuffer";
import LeftArrowHead from "../components/LeftArrowHead.vue";
import RightArrowHead from "../components/RightArrowHead.vue";
import Paragraph from "./components/Paragraph.vue";

const props = defineProps(["baseUrl"]);
const buffer = new ContentBuffer(`${props.baseUrl}/about/life/carousel`, 1, 1);
</script>
<template>
    <Layout active="About" :base-url>
        <div class="font-poppins">
            <div class="flex flex-col">
                <img
                    src="../../../images/about/CPP template - About CPP-modified.jpg"
                    alt="About CPP Hero Image"
                />
                <p
                    class="bg-deepblue-500 px-20 py-18 text-center text-2xl font-medium text-gray-200"
                >
                    Sri Chanchalapathi Dasa is a leader, spiritual guide and
                    humanitarian with deep conviction and vision towards social
                    transformation, enriching countless lives through his
                    service to society.
                </p>

                <div class="flex flex-col items-center bg-blue-50 py-16">
                    <SectionHeading class="text-deepblue-500"
                        >Early Life & Joining ISKCON</SectionHeading
                    >
                    <DoubleArrow class="mt-4" />
                    <div class="flex items-center gap-6 px-10">
                        <img
                            class="w-1/2 shrink-0"
                            src="../../../images/about/img1.png"
                            alt="Early Life Image"
                        />
                        <p class="text-lg text-gray-500">
                            He was born in 1963 in the Silicon Valley of India,
                            Bangalore, Karnataka. While an undergraduate in PSG
                            College of Technology, Coimbatore, he became deeply
                            interested and inspired by the teachings and mission
                            of His Divine Grace A.C. Bhaktivedanta Swami Srila
                            Prabhupada, Founder-Acharya of the Global Hare
                            Krishna Movement and International Society for
                            Krishna Consciousness (ISKCON). Later, he joined the
                            Indian Institute of Science, Bangalore, to pursue a
                            Master's program in Electrical Communication
                            Engineering. In the year 1984, as he gained a deeper
                            understanding of Srila Prabhupada’s philosophy and
                            ideals, he chose a life of service and became a
                            full-time, devoted member of ISKCON Bangalore.
                        </p>
                    </div>
                </div>

                <div
                    class="flex flex-col items-center bg-[url(../images/about/life-of-service-bg.jpg)] py-16"
                >
                    <div class="grid grid-cols-[1.5fr_3fr_1.5fr] items-center">
                        <LeftArrowHead
                            class="mr-2 size-10 cursor-pointer justify-self-end"
                            @click="buffer.backward(1)"
                        />
                        <img
                            v-for="card in buffer.window.value"
                            :src="card.page_image"
                            alt="About Life Image"
                        />
                        <RightArrowHead
                            class="ml-2 size-10 cursor-pointer justify-self-start"
                            @click="buffer.forward(1)"
                        />
                    </div>

                    <SectionHeading class="mt-24 text-deepblue-500"
                        >A Life of Service</SectionHeading
                    >
                    <DoubleArrow class="mt-4 mb-8" />
                    <Paragraph>
                        In these four decades, Sri Chanchalapathi Dasa has
                        conceptulized and executed various welfare projects,
                        spiritual and cultural initiatives for community
                        upliftment across the country.
                    </Paragraph>
                    <Paragraph>
                        As Co-Founder and Vice Chairman of The Akshaya Patra
                        Foundation, he has played a pivotal role in addressing
                        classroom hunger and directs its strategy, growth, and
                        governance. He is also the Co-Founder and Vice Chairman
                        of The Akshaya Patra Foundation, the world's largest
                        NGO-run school lunch program serving over 2.25 million
                        children every day across India. He has been actively
                        involved in policy planning and implementation, areas
                        related to operations, public affairs, programme
                        management and emergency food relief activities. Under
                        his visionary guidance, The Akshaya Patra Foundation
                        successfully created a profound impact in India and won
                        several accolades and awards, including the Gandhi Peace
                        Prize award, ICAI Gold Shield Award and the First NGO to
                        enter the ICAI Hall of Fame for Excellence in Financial
                        Reporting.
                    </Paragraph>
                    <Paragraph>
                        Among his many contributions is the world-class
                        animation series Little Krishna, which has touched
                        audiences worldwide.
                    </Paragraph>
                    <Paragraph>
                        Sri Chanchalapathi Dasa also serves as the President of
                        Vrindavan Heritage Tower, of which Vrindavan Chandrodaya
                        Mandir functions as a central part of its vision and
                        mission. This landmark project is envisioned to become
                        the world’s tallest cultural heritage monument,
                        dedicated to the revival of Braj’s cultural and
                        spiritual legacy while contributing to the holistic
                        development of the Braj region through its various
                        socio-economic, cultural education and environmental
                        initiatives.
                    </Paragraph>

                    <div
                        class="flex flex-col items-center bg-[url(../images/about/spiritual-leader-bg.jpg)] pt-16 pb-32"
                    >
                        <img
                            src="../../../images/about/ban2.jpg"
                            alt="Spiritual Leader Image"
                        />

                        <SectionHeading class="mt-24 text-deepblue-500"
                            >Spiritual Leader</SectionHeading
                        >
                        <DoubleArrow class="mt-4 mb-8" />
                        <Paragraph>
                            His Divine Grace A. C. Bhaktivedanta Swami
                            Prabhupada, the Founder-Acharya of the Hare Krishna
                            Movement, has been the inspiration and guiding light
                            of Sri Chanchalapathi Dasa. Based on his teachings,
                            Sri Chanchalapathi Dasa has been instrumental in
                            exemplifying the reach and impact of propagating
                            spiritual wisdom. He has guided thousands towards
                            spiritual fulfilment while simultaneously working to
                            improve the quality of life within the local
                            community.
                        </Paragraph>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
