<template>
  <div class="wrapper">
    <div class="container">
      <div class="header">
        <div
          :class="{
            climatLightBGColor: theme.name == 'Climat',
            bioLightBGColor: theme.name == 'Bio-diversité',
            pecheLightBGColor: theme.name == 'Pêche',
            pollutionLightBGColor: theme.name == 'Pollution plastique',
            ecoLightBGColor: theme.name == 'Éco-responsabilité',
          }"
          class="card_header"
        ></div>
        <div></div>
      </div>
      <div
        :class="{
          climatLightBGColor: theme.name == 'Climat',
          bioLightBGColor: theme.name == 'Bio-diversité',
          pecheLightBGColor: theme.name == 'Pêche',
          pollutionLightBGColor: theme.name == 'Pollution plastique',
          ecoLightBGColor: theme.name == 'Éco-responsabilité',
        }"
        class="content_card"
      >
        <div class="img">
          <div
            class="img_calc"
            :style="
              'background-image: url(\'/images/themes/' + theme.name + '.jpg\')'
            "
          ></div>
        </div>
        <h6>Thématique</h6>
        <h4>
          {{ theme.name }}
        </h4>
        <p class="content" v-if="theme.name == 'Bio-diversité'">
          L’océan possède deux caractéristiques qui le démarquent des
          continents: continuité et stabilité. La biodiversité marine est le
          reflet...
        </p>
        <p class="content" v-if="theme.name == 'Climat'">
          Le climat de notre planète est régi en grande partie par l'océan qui
          est le principal régulateur du climat mondial grâce...
        </p>
        <p class="content" v-if="theme.name == 'Éco-responsabilité'">
          Sortir de l’évidence du quotidien pour développer l’éco-responsabilité
          : un levier éducatif puissant.
        </p>
        <p class="content" v-if="theme.name == 'Pêche'">
          Des navires plus grands, des filets plus profonds, des sonars plus
          efficaces: pour répondre à l'appétit insatiable...
        </p>
        <p class="content" v-if="theme.name == 'Pollution plastique'">
          La pollution par le plastique est une pollution engendrée par
          l'accumulation de déchets en matière plastique dans l'environnement.
        </p>
        <div class="thème">
          <a class="theme_link" :href="'/recherche?target=' + target.id">{{
            target.name
          }}</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["theme", "target"],
};
</script>

<style scoped lang="scss">
  .wrapper {
    min-width: 421px;
    margin-bottom: 10px;
    .container {
      .header {
        display: flex;

        .fill {
          flex: 1;
          /* margin-right: 5px; */
        }
        .card_header {
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
          width: 120px;
          height: 18px;
          padding: 6px 12px;
        }
      }

      .content_card {
        /*  border-top-right-radius: 5px; */
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top: none !important;
        background-color: #fff;
        padding: 24px;
        .img {
          .img_calc {
            margin: 24px 0 0;
            width: 100%;
            height: 226px;
            /* background-image: url("~/images/articles/1.jpg"); */

            /*  background-image: url("."); */
            background-position: center;
            background-size: cover;
          }
        }
        h4 {
          margin: 10px 0;
        }
        .date {
          margin: 14px 0;
          font-size: 10px;
          font-family: "Founders Grotesk Mono";
          text-transform: uppercase;
        }
        .content {
          height: 90px;
          font-size: 14px;
          margin-bottom: 18px;
          line-height: 20px;
        }
      }
    }
  }
</style>
