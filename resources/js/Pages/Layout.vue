<script setup>
import TopbarLink from "./components/TopbarLink.vue";
</script>

<template>
    <main>
        <div class="mx-auto max-w-full">
            <header
                class="px-10 py-4 md:flex md:items-center md:justify-between"
            >
                <TopbarLink href="/">Home</TopbarLink>
                <TopbarLink href="/about">About</TopbarLink>
                <TopbarLink href="/contact">Contributions</TopbarLink>
                <img class="w-1/3" src="../../images/logo.png" alt="Logo" />
                <TopbarLink href="/contact">Highlights</TopbarLink>
                <TopbarLink href="/contact">Contact</TopbarLink>
            </header>
            <slot />
            <footer
                class="flex flex-row items-center justify-between px-10 py-12"
            >
                <img class="w-1/3" src="../../images/logo.png" alt="Logo" />
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
