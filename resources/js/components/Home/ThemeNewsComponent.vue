<template>
    <div class="wrapper">
        <div class="container">
            <h2>Nos dossiers thématiques</h2>
            <div class="news_container">
                <NewCardComponent />
                <NewCardComponent />
                <NewCardComponent />
            </div>
        </div>
    </div>
</template>

<script>
import NewCardComponent from "./NewCardComponent.vue";
export default {
    components: {
        NewCardComponent
    }
};
</script>

<style lang="scss" scoped>
.news_container {
    /*  background-color: red; */
    display: flex;
    justify-content: space-between;
}
</style>
