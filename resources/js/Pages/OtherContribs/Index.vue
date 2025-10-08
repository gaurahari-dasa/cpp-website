<script setup>
import Layout from "../components/Layout.vue";
import SectionHeading from "../components/SectionHeading.vue";
import DoubleArrow from "../components/DoubleArrow.vue";
</script>
<template>
    <Layout active="Home" :base-url>
        <div
            class="flex flex-col gap-20 bg-[url(../images/other-contribs/bg1.jpg)] px-16 py-20 font-poppins"
        >
            <div class="flex flex-col items-center">
                <SectionHeading class="text-deepblue-500"
                    >Other Contributions</SectionHeading
                >
                <DoubleArrow class="mt-2" />
            </div>
            <div class="flex items-start gap-16">
                <img
                    class="w-[30%] shrink-0"
                    src="../../../images/other-contribs/other contribs 1.jpg"
                    alt="Other Contributions"
                />
                <div class="-mt-2">
                    <h3 class="text-3xl font-semibold text-deepblue-500">
                        Cultural Centers
                    </h3>
                    <p class="mt-4 text-base/relaxed text-gray-500">
                        The ISKCON Bangalore group of devotees have expanded its
                        footprint both within India and globally, establishing a
                        network of temples also known as the Hare Krishna
                        Movement (HKM) group of temples. Sri Chanchalapathi
                        Dasa, serving as a senior mentor and spiritual leader,
                        has played a pivotal role in orchestrating and guiding
                        the group's growth initiatives, contributing to the
                        establishment of its temples. The list of the Hare
                        Krishna Movement group of temples:
                    </p>
                    <a
                        class="mt-2 font-medium text-deepblue-500"
                        href="www.iskconcenters.org"
                        >www.iskconcenters.org</a
                    >
                </div>
            </div>

            <div class="flex items-start gap-16">
                <div class="-mt-2">
                    <h3 class="text-3xl font-semibold text-deepblue-500">
                        FOLK
                    </h3>
                    <p class="mt-4 text-base/relaxed text-gray-500">
                        FOLK - 'Friends Of Lord Krishna', operates as a youth
                        empowerment club within the Hare Krishna Movement group
                        of temples. It was established more than two decades ago
                        under the guidance of Sri Chanchalapathi Dasa and other
                        senior members of ISKCON Bangalore. It is a sincere
                        effort to systematically convey the teachings of Srila
                        Prabhupada to the present-day youth.
                    </p>
                    <a
                        class="mt-2 font-medium text-deepblue-500"
                        href="www.folknet.in"
                        >www.folknet.in</a
                    >
                </div>
                <img
                    class="w-[30%] shrink-0"
                    src="../../../images/other-contribs/other contribs 2.jpg"
                    alt="Other Contributions"
                />
            </div>

            <div class="flex items-start gap-16">
                <img
                    class="w-[30%] shrink-0"
                    src="../../../images/other-contribs/other contribs 3.jpg"
                    alt="Other Contributions"
                />
                <div class="-mt-2">
                    <h3 class="text-3xl font-semibold text-deepblue-500">
                        ISKCON Samskriti
                    </h3>
                    <p class="mt-4 text-base/relaxed text-gray-500">
                        ISKCON Samskriti, the cultural wing of ISKCON Bangalore,
                        has been operating for over two decades. It was
                        conceived by Sri Chanchalapathi Dasa and other senior
                        devotees of ISKCON Bangalore. This wing serves as an
                        educational and cultural initiative for students. The
                        primary goal is to impart spiritual knowledge and foster
                        an appreciation for our Vedic culture. ISKCON Samskriti
                        organizes cultural educational camps, both short-term
                        and long-term courses, year-round competitions, heritage
                        tours, national-level quizzes, and a variety of other
                        activities.
                    </p>
                    <a
                        class="mt-2 font-medium text-deepblue-500"
                        href="www.iskconsamskriti.org"
                        >www.iskconsamskriti.org</a
                    >
                </div>
            </div>

            <div class="flex items-start gap-16">
                <div class="-mt-2">
                    <h3 class="text-3xl font-semibold text-deepblue-500">
                        NIVE
                    </h3>
                    <p class="mt-4 text-base/relaxed text-gray-500">
                        National Institute of Value Education (NIVE) was
                        envisioned by the devotees of ISKCON Bangalore. Sri
                        Chanchalapathi Dasa is one of the core members of its
                        conception and continues to oversee this institution.
                        NIVE actively engages with school and college students,
                        offering programs deeply rooted in the timeless wisdom
                        of ancient India. These initiatives are inspired by the
                        teachings of Srila Prabhupada, aiming to foster the
                        comprehensive development of children's emotional,
                        creative, ethical, cognitive, and spiritual faculties.
                    </p>
                    <a
                        class="mt-2 font-medium text-deepblue-500"
                        href="www.nive.co.in"
                        >www.nive.co.in</a
                    >
                </div>
                <img
                    class="w-[30%] shrink-0"
                    src="../../../images/other-contribs/other contribs 4.jpg"
                    alt="Other Contributions"
                />
            </div>

            <div class="flex items-start gap-16">
                <img
                    class="w-[30%] shrink-0"
                    src="../../../images/other-contribs/other contribs 5.jpg"
                    alt="Other Contributions"
                />
                <div class="-mt-2">
                    <h3 class="text-3xl font-semibold text-deepblue-500">
                        Basil Woods International
                    </h3>
                    <p class="mt-4 text-base/relaxed text-gray-500">
                        Sri Chanchalapathi Dasa is the Vice-Chairman of the
                        Basil Woods International institution. Basil Woods aims
                        to nurture a generation of children characterized by
                        increased happiness, emotional strength, empathy, and
                        success. The organization is dedicated to offering
                        gen-smart learners a transformative educational journey
                        within a top-notch academic setting that is grounded in
                        core Indian values and universal ethics.
                    </p>
                    <a
                        class="mt-2 font-medium text-deepblue-500"
                        href="www.basilwoodsinternational.in"
                        >www.basilwoodsinternational.in</a
                    >
                </div>
            </div>
        </div>
    </Layout>
</template>
