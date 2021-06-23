<template>
  <div class="wrapper">
    <div id="themesFolders" class="container">
      <h2>Nos dossiers thématiques</h2>
      <div class="news_container">
        <NewCardComponent
          v-for="(theme, index) in themes.themes"
          :key="index + 'theme'"
          :theme="theme"
          :target="themes.themes_target[theme.name]"
        />
      </div>
    </div>
  </div>
</template>

<script>
import NewCardComponent from "./NewCardComponent.vue";
export default {
  props: ["themes"],
  components: {
    NewCardComponent,
  },
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
