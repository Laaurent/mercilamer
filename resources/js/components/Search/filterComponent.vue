<template>
  <div class="wrapper">
    <div class="container">
      <h4>{{ title }}</h4>
      <hr />
      <div class="data">
        <filterItemComponent
          v-for="(item, index) in data"
          :key="index"
          :item="item"
          @itemCheck="getElement($event)"
        />
        {{ path }}
      </div>
    </div>
  </div>
</template>

<script>
import filterItemComponent from "./filterItemComponent.vue";
export default {
  props: ["type", "title", "data"],
  components: { filterItemComponent },
  data() {
    return {
      checked: false,
      tmp: null,
      request: [],
    };
  },
  watch: {
    path: function () {
      if (this.path == `${this.type}=`) this.$emit("path", null);
      else this.$emit("path", this.path);
    },
  },
  computed: {
    path: function () {
      let path = `${this.type}=`;
      this.request.forEach((element) => {
        path += element + ",";
      });
      return path;
    },
  },
  methods: {
    getElement: function (event) {
      if (event.checked) {
        this.request.push(event.id);
      } else {
        const index = this.request.indexOf(event.id);
        if (index > -1) {
          this.request.splice(index, 1);
        }
      }
    },
    check: function (item) {
      this.checked = !this.checked;
      this.$emit("filter", { id: item.id, checked: this.checked });
    },
  },
};
</script>

<style lang="scss" scoped>
  .container {
    h4 {
      margin: 0;
      font-family: Founders Grotesk Mono;
      font-size: 24px;
      font-style: normal;
      font-weight: 400;
      line-height: 24px;
      letter-spacing: 0.06em;
      text-align: left;
    }
    hr {
      margin: 13px 0;
      width: 44px;
      border: 4px solid #1c1c1c;
    }
    .data {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      margin: 26px 0;
      gap: 10px;
    }
  }
</style>