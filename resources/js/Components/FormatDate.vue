<script setup>
defineProps({
    currentDate: {
        type: Date,
        required: true,
    },
});
const formatDate = (date) => {
    return date.toLocaleDateString("th-TH", {
        year: "numeric",
        month: "long",
        day: "numeric",
        weekday: "long",
    });
};
</script>

<template>
    {{ formatDate(currentDate) }}
</template>
