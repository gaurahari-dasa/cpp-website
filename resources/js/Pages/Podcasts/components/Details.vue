<script setup>
import SectionHeading from "../../components/SectionHeading.vue";
import { XMarkIcon } from "@heroicons/vue/16/solid";
import Modal from "../../components/Modal.vue";

defineProps(["card"]);
</script>
<template>
    <Modal>
        <div class="flex flex-col items-center">
            <img :src="card.page_image" alt="Podcast Popup Image" />
            <SectionHeading class="mt-20 text-deepblue-500">{{
                card.page_title
            }}</SectionHeading>
            <p class="mt-8 text-center text-2xl/loose text-deepblue-500">
                {{ card.page_text }}
            </p>
        </div>
    </Modal>
</template>
