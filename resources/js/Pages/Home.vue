<script setup>
import Layout from "./Layout.vue";
</script>

<template>
    <Layout>
        <div class="flex-col">
            <div class="relative">
                <img
                    src="../../images/ban-logo.png"
                    alt="Banner Logo"
                    class="absolute top-6 right-10 w-[43%]"
                />
                <img src="../../images/Top-banner.jpg" alt="Top Banner" />
                <h1
                    class="absolute top-1/2 right-10 text-center font-poppins text-3xl text-gray-200"
                >
                    The Official Website of<br /><span class="text-4xl font-medium"
                        >Sri Chanchalapathi Dasa</span
                    >
                </h1>
            </div>
            <p class="font-poppins text-2xl">Haribol</p>
        </div>
    </Layout>
</template>
