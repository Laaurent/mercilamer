<template>
  <div class="wrapper">
    <div id="focusOn" class="container">
      <h2>Cap sur...</h2>
      <div class="news_container">
        <ArticleCardComponent
          v-for="(article, index) in articles"
          :key="index + 'article'"
          :article="article"
        />
      </div>
    </div>
  </div>
</template>

<script>
import ArticleCardComponent from "./ArticleCardComponent.vue";
export default {
  components: { ArticleCardComponent },
  props: ["articles"],
};
</script>
<style lang="scss" scoped>
  .wrapper {
    .container {
      margin-top: 100px;
    }
    .news_container {
      margin: 0 -78px;
      overflow-x: scroll;
      display: flex;
      gap: 13px;
      justify-content: space-between;
      &::-webkit-scrollbar {
        height: 5px;
        border-radius: 3px;
        background-color: rgba(255, 255, 255, 0);
      }

      &::-webkit-scrollbar-track,
      &::-webkit-scrollbar-thumb {
        border: 78px solid rgba(255, 255, 255, 0);
        background-clip: padding-box;
      }

      &::-webkit-scrollbar-track {
        background-color: #fff;
      }
      &::-webkit-scrollbar-thumb {
        background-color: #949494;
      }
    }
  }
</style>
<style>
  .news_container .wrapper:first-child {
    margin-left: 78px;
  }
  .news_container .wrapper:last-child {
    margin-right: 78px;
  }
</style>
