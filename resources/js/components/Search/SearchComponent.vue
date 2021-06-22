<template>
  <did class="wrapper">
    <img class="certified" src="/images/icons/Education.svg" alt="" />
    <div class="container">
      <filtersComponent :filters="filters"></filtersComponent>
      <articlesComponent :articles="articles"></articlesComponent>
    </div>
  </did>
</template>

<script>
import filtersComponent from "./filtersComponent.vue";
import articlesComponent from "./articlesComponent.vue";
export default {
  props: ["articles", "filters"],
  components: { filtersComponent, articlesComponent },
  data() {
    return {};
  },
};
</script>

<style lang="scss" scoped>
  .wrapper {
    margin-top: 245px;
    .container {
      display: flex;
      width: 100%;
      gap: 30px;
    }
  }
</style>