<script setup>
import TopbarLink from "./TopbarLink.vue";
defineProps(["active", "baseUrl"]);
</script>

<template>
    <main>
        <div class="mx-auto max-w-full">
            <header
                class="px-10 py-4 md:flex md:items-center md:justify-between"
            >
                <TopbarLink :active="active == 'Home'" :href="`${baseUrl}/`"
                    >Home</TopbarLink
                >
                <TopbarLink :active="active == 'About'" href="/about"
                    >About</TopbarLink
                >
                <TopbarLink
                    :active="active == 'Contributions'"
                    :href="`${baseUrl}/other-contribs`"
                    >Contributions</TopbarLink
                >
                <img class="w-1/3" src="../../../images/logo.png" alt="Logo" />
                <TopbarLink
                    :active="active == 'Highlights'"
                    :href="`${baseUrl}/highlights`"
                    >Highlights</TopbarLink
                >
                <TopbarLink :active="active == 'Contact'" href="/contact"
                    >Contact</TopbarLink
                >
            </header>
            <slot />
            <footer
                class="flex flex-row items-center justify-between px-10 py-12"
            >
                <img class="w-1/3" src="../../../images/logo.png" alt="Logo" />
                <p
                    class="non-italic text-center font-poppins text-lg text-deepblue-500"
                >
                    contact@hkm-group.org<br />
                    <br />
                    Hare Krishna Hill, West of Chord Road, Rajajinagar,<br />
                    Bengaluru, Karnataka, India - 560 010
                </p>
            </footer>
        </div>
    </main>
</template>
