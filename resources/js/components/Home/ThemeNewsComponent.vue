<template>
    <div class="wrapper">
        <div class="container">
            <h2>Nos dossiers thématiques</h2>
            <div class="news_container">
                <NewCardComponent theme="Climat" />
                <NewCardComponent theme="Bio-diversité" />
                <NewCardComponent theme="Pêche" />
                <NewCardComponent theme="Pollution" />
                <NewCardComponent theme="Éco-responsabilité" />
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
    overflow-x: scroll;
    display: flex;
    gap: 10px;
    /*  background-color: red; */
    justify-content: space-between;
    margin-bottom: 28px;

    &::-webkit-scrollbar-track {
        box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.1);
        background-color: #f5f5f5;
        border-radius: 10px;
    }

    &::-webkit-scrollbar {
        height: 5px;
        border-radius: 10px;
        background-color: #f5f5f5;
    }

    &::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #949494;
        border-radius: 10px;
    }
}
</style>
