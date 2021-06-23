<template>
    <did class="wrapper">
        <div class="header">
            <bannerSearchComponent
                :search="search"
                @pattern="pattern = $event"
            />
        </div>
        <div class="container">
            <filtersComponent
                :themeCheck="theme"
                :filters="filters"
                @fetch="request = $event"
            ></filtersComponent>
            <articlesComponent
                @sort="sort = $event"
                :articles="articlesData"
            ></articlesComponent>
        </div>
    </did>
    <!-- @fetch="fetchData(concatPath($event, pattern))" -->
</template>

<script>
import bannerSearchComponent from "./bannerSearchComponent.vue";
import filtersComponent from "./filtersComponent.vue";
import articlesComponent from "./articlesComponent.vue";
export default {
    props: ["theme", "search", "articles", "filters"],
    name: "SearchComponent",
    components: { filtersComponent, articlesComponent, bannerSearchComponent },
    data() {
        return {
            articlesData: this.articles,
            request: "",
            pattern: "",
            sort: "publication_date-DESC"
        };
    },
    watch: {
        path: function() {
            this.fetchData(this.path);
        }
    },
    computed: {
        path: function() {
            let request = this.request;
            if (this.pattern) {
                if (request) {
                    request += "&pattern=" + this.pattern.replace(" ", ",");
                } else {
                    request = "?pattern=" + this.pattern.replace(" ", ",");
                }
            }
            if (request) {
                request += "&sort=" + this.sort;
            } else {
                request += "?sort=" + this.sort;
            }
            return request;
        }
    },
    methods: {
        fetchData: function(request) {
            console.log(request);
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
