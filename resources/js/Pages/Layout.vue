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
                <!-- <div class="flex-col gap-1 text-center">
                    <h2 class="text-2xl/7 font-semibold text-[#10437e] sm:truncate sm:text-2xl sm:tracking-tight">
                        Sri Chanchalapathi Dasa</h2>
                    <p>In the service of Srila Prabhupada</p>
                </div> -->
                <img class="w-1/3" src="../../images/logo.png" alt="Logo" />
                <TopbarLink href="/contact">Highlights</TopbarLink>
                <TopbarLink href="/contact">Contact</TopbarLink>
            </header>
            <slot />
        </div>
    </main>
</template>
