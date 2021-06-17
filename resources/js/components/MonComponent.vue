<template>
  <div>
    <!-- Le template -->
    <section class="container">
      <h1>Mon composant MonComponent.vue</h1>
      <p>
        Clicks : <strong>{{ clicks }}</strong>
      </p>
      <button @click="ajouteClick">clique sur moi</button>
    </section>
  </div>
</template>

<script>
// Le script
export default {
  name: "mon-component",
  data() {
    return {
      clicks: 0,
    };
  },
  methods: {
    // Incrémentation de "clicks"
    ajouteClick() {
      this.clicks++;
    },
  },
};
</script>

<style>
</style>