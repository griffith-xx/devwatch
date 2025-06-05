<script setup>
defineProps({
    currentDate: {
        type: Date,
        required: true,
    },
});
const formatTime = (date) => {
    return date.toLocaleTimeString("th-TH", {
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
    });
};
</script>
<template>
    {{ formatTime(currentDate) }}
</template>
