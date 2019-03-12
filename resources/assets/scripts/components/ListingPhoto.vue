<template>
    <div 
        class="embed-responsive embed-responsive-16by9 main-image"
        v-lazy:background-image="url"
        :style="
            'background-size: ' + size + ';'
        "
    >
    </div>
</template>
<script>
export default {
    props: ['src', 'alt'],
    data() {
        return {
            url: {
                src: this.src,
                error: '/themes/wordplate/assets/images/loading.svg',
                loading: '/themes/wordplate/assets/images/loading.svg'
            },
            size: 'auto'
        }
    }
}
</script>


