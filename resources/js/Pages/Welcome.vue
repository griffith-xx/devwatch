<script setup>
import { Head } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import FormatDate from "@/Components/FormatDate.vue";
import FormatTime from "@/Components/FormatTime.vue";
const currentDate = ref(new Date());
onMounted(() => {
    const interval = setInterval(() => {
        currentDate.value = new Date();
    }, 1000);
    return () => {
        clearInterval(interval);
    };
});
</script>

<template>
    <Head title="Engineering Service Center" />
    <p>
        <FormatDate :current-date="currentDate" />
    </p>
    <p>
        <FormatTime :current-date="currentDate" />
    </p>
</template>
