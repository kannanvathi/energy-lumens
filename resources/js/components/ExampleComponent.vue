<template>
    <div class="container">
        <router-view name="ViewerComponent" />
    </div>
</template>

<script>
    import ViewerComponent from "./ViewerComponent.vue";
    export default {
        components: {
            ViewerComponent,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
