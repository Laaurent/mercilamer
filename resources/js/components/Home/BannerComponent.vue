<template>
  <div class="wrapper">
    <div class="container">
      <h1>Que veux-tu apprendre aujourd'hui?</h1>
      <img class="certified" src="/images/icons/Education.svg" alt="" />
      <form>
        <input
          class="searchBar"
          type="search"
          name="searchBar"
          placeholder="Rechercher un mot, une vidéo, un sujet..."
        />
      </form>
      <div class="themes">
        <a
          class="link_theme climatBorderColor climatBGColorHover"
          href="/recherche?theme=1"
          >Climat</a
        >
        <a
          class="link_theme bioBorderColor bioBGColorHover"
          href="/recherche?theme=2"
          >Bio-diversité</a
        >
        <a
          class="link_theme pecheBorderColor pecheBGColorHover"
          href="/recherche?theme=3"
          >Pêche</a
        >
        <a
          class="link_theme pollutionBorderColor pollutionBGColorHover"
          href="/recherche?theme=4"
          >Pollution plastique</a
        >
        <a
          class="link_theme ecoBorderColor ecoBGColorHover"
          href="/recherche?theme=5"
          >Éco-responsabilité</a
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
};
</script>

<style scoped lang="scss">
  .wrapper {
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 30px;
      h1 {
        width: 674px;
      }
      form input.searchBar {
        width: 653px;
        padding: 17px;
        color: #1c1c1c;
        font-family: "maax rounded";
        font-size: 20px;
        text-align: center;
        border-radius: 40px;
        border: 2px solid #00d4ae;
      }
      .themes {
        display: flex;
        gap: 10px;
        justify-content: center;
        a {
          border: 1px solid #1c1c1c;
          border-radius: 40px;
          padding: 12px 40px;
        }
      }
    }
  }
</style>
