<template>
    <did class="wrapper">
        <div class="header">
            <bannerSearchComponent />
        </div>
        <div class="container">
            <filtersComponent
                :filters="filters"
                @fetch="fetchData($event)"
            ></filtersComponent>
            <articlesComponent :articles="articlesData"></articlesComponent>
        </div>
    </did>
</template>

<script>
import bannerSearchComponent from "./bannerSearchComponent.vue";
import filtersComponent from "./filtersComponent.vue";
import articlesComponent from "./articlesComponent.vue";
export default {
    props: ["articles", "filters"],
    name: "SearchComponent",
    components: { filtersComponent, articlesComponent, bannerSearchComponent },
    data() {
        return {
            articlesData: this.articles
        };
    },
    methods: {
        fetchData: function(request) {
            axios
                .get(`/recherche-filter${request}`)
                .then(response => {
                    this.articlesData = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>

<style lang="scss" scoped>
.wrapper {
    .container {
        display: flex;
        width: 100%;
        gap: 30px;
    }
}
</style>
