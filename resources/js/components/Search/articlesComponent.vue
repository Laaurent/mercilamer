<template>
  <div class="wrapper-articles">
    <div class="search">
      <form action="">
        <img class="searchIcon" src="/images/icons/Search.svg" alt="" />
        <input
          class="searchBar"
          type="search"
          name="searchBar"
          placeholder="Rechercher un mot, une vidéo, un sujet..."
        />
      </form>
    </div>
    <div class="header">
      <div class="results">{{ articles.length }} Résultats</div>
      <div class="input_filter">
        <img src="/images/icons/Filter.svg" alt="" />
        <p>Trier par :</p>
        <select name="filter" id="">
          <option value="pertinence">Pertinance</option>
          <option value="recent">Récent</option>
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
  props: ["articles"],
  components: { SearchArticleCardComponent },
};
</script>

<style lang="scss" scoped>
  .wrapper-articles {
    /* height: 952px; */
    margin-top: 81px !important;
    flex: 1;
    .search {
      form {
        margin: 0 0 34px;
        .searchIcon {
          position: absolute;
          margin: 16px 14px;
        }
        input.searchBar {
          width: 653px;
          padding: 14px 49px;
          color: #1c1c1c;
          font-family: "maax rounded";
          font-size: 20px;
          text-align: left;
          border-radius: 40px;
          border: 2px solid #00d4ae;
        }
      }
    }
    .header {
      margin: 22px 0;
      display: flex;
      justify-content: space-between;
      .results {
        padding: 13px;
        font-size: 24px;
      }
      .input_filter {
        border-radius: 40px;
        display: flex;
        align-items: center;
        gap: 11px;
        border: 2px solid #1c1c1c;
        padding: 13px;
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
      height: 790px;
      overflow-y: scroll;
    }
  }
</style>