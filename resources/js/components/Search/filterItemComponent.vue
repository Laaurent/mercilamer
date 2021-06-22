<template>
  <div class="wrapper">
    <div>
      <input type="checkbox" id="" :name="item.name" v-model="checked" />
      <label :for="item.name">{{ item.name }}</label>
    </div>
  </div>
</template>

<script>
export default {
  props: ["item"],
  data() {
    return {
      checked: false,
    };
  },
  watch: {
    checked: function () {
      this.$emit("itemCheck", { id: this.item.id, checked: this.checked });
    },
  },
};
</script>

<style>
</style>