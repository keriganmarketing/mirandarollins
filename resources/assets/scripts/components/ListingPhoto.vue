<template>
    <img 
        v-lazy="url" 
        :alt="alt"
        class="embed-responsive-item" 
    >
</template>
<script>
export default {
    props: ['url', 'alt']
}
</script>

