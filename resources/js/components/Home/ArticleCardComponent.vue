<template>
  <div class="wrapper">
    <div class="container">
      <div
        :class="{
          climatLightBGColor: article.theme.name == 'Climat',
          bioLightBGColor: article.theme.name == 'Bio-diversité',
          pecheLightBGColor: article.theme.name == 'Pêche',
          pollutionLightBGColor: article.theme.name == 'Pollution plastique',
          ecoLightBGColor: article.theme.name == 'Éco-responsabilité',
        }"
        class="content_card"
      >
        <div class="assoc">{{ article.association.name }}</div>
        <div class="img">
          <div
            class="img_calc"
            :style="
              'background-image: url(\'/images/articles/' +
              article.id +
              '.jpg\')'
            "
          ></div>
        </div>
        <div class="support">
          <p>{{ article.support.name }}</p>
          <img
            :src="'/images/icons/' + article.support.name + '.svg'"
            alt="Image support"
          />
        </div>
        <h4>
          {{ article.title }}
        </h4>
        <p class="content">
          {{ article.content }}
        </p>
        <div class="thème">
          <a
            class="theme_link"
            :href="'/recherche?target=' + article.target.id"
            >{{ article.target.name }}</a
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["article"],
};
</script>

<style scoped lang="scss">
  .wrapper {
    min-width: 421px;
    margin-bottom: 10px;
    .container {
      .content_card {
        border-radius: 5px;
        padding: 24px;
        .assoc {
          margin: 0;
          font-family: "Founders Grotesk Mono";
          font-style: normal;
          font-weight: normal;
          font-size: 13px;
          line-height: 15px;
        }
        .img {
          .img_calc {
            margin: 13px 0 0;
            width: 100%;
            height: 226px;
            /* background-image: url("~/images/articles/1.jpg"); */

            /*  background-image: url("."); */
            background-position: center;
            background-size: cover;
            border: 1px solid #1c1c1c;
          }
        }
        .support {
          display: flex;
          justify-content: flex-end;
          align-items: center;
          font-size: 13px;
          gap: 4px;
          font-family: "Founders Grotesk Mono";
          text-transform: uppercase;
          color: #949494;
          img {
            filter: invert(64%) sepia(18%) saturate(16%) hue-rotate(23deg)
              brightness(89%) contrast(89%);
            width: 24px;
            margin-bottom: 2px;
          }
        }
        h4 {
          margin: 8px 0 21px;
          color: #1c1c1c;
        }
        .date {
          margin: 14px 0;
          font-size: 10px;
          font-family: "Founders Grotesk Mono";
          text-transform: uppercase;
          color: #949494;
        }
        .content {
          height: 60px;
          font-size: 14px;
          margin-bottom: 18px;
          line-height: 20px;
          display: -webkit-box;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
          overflow: hidden;
        }
      }
    }
  }
</style>
