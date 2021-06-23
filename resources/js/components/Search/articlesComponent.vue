<template>
    <div class="wrapper-articles">
        <div class="header">
            <div class="results">{{ articles.length }} Résultats</div>
            <div class="input_filter">
                <img src="/images/icons/Filter.svg" alt="" />
                <p>Trier par :</p>
                <select name="filter" id="" v-model="sort">
                    <option value="views-ASC">Pertinence</option>
                    <option value="publication_date-DESC">Récent</option>
                    <option value="publication_date-ASC">Ancient</option>
                </select>
            </div>
        </div>
        <div class="container">
            <SearchArticleCardComponent
                v-for="(article, index) in articles"
                :key="index"
                :article="article"
            />
        </div>
    </div>
</template>

<script>
import SearchArticleCardComponent from "./SearchArticleCardComponent.vue";
export default {
    data() {
        return {
            sort: "publication_date-DESC"
        };
    },
    watch: {
        sort: function() {
            this.$emit("sort", this.sort);
        }
    },
    props: ["articles"],
    components: { SearchArticleCardComponent }
};
</script>

<style lang="scss" scoped>
.wrapper-articles {
    /* height: 952px; */
    flex: 1;

    .header {
        height: 50px;
        margin-bottom: 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        .results {
            padding: 13px;
            font-size: 24px;
        }
        .input_filter {
            background-color: #fff;
            border-radius: 40px;
            display: flex;
            align-items: center;
            gap: 11px;
            border: 1px solid #1c1c1c;
            padding: 7px 13px;
            p {
                margin: 0;
                width: 90px;
            }
            select {
                border: none;
                font-family: Maax Rounded;
                font-size: 18px;
                font-style: normal;
                font-weight: 400;
                line-height: 20px;
                letter-spacing: 0.06em;
                text-align: left;
            }
        }
    }
    .container {
        /*  height: 790px; */
    }
}
</style>
