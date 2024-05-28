<template>
    <div>
        <h1>{{ message }}</h1>
    </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import axios from 'axios'

    const message = ref('')

    onMounted(async () => {
        const response = await axios.get('http://localhost/api/data')
        message.value = response.data.message
    })
</script>
