<template>
  <div class="wrapper">
    <div class="container">
      <div
        class="card_header"
        :class="{
          climatBGColorNAV: article.theme.name == 'Climat',
          bioBGColorNAV: article.theme.name == 'Bio-diversité',
          pecheBGColorNAV: article.theme.name == 'Pêche',
          pollutionBGColorNAV: article.theme.name == 'Pollution plastique',
          ecoBGColorNAV: article.theme.name == 'Éco-responsabilité',
        }"
      >
        &nbsp;{{ article.theme.name }}
      </div>
      <div class="content_card">
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
        <h4
          :class="{
            climatColor: article.theme.name == 'Climat',
            bioColor: article.theme.name == 'Bio-diversité',
            pecheColor: article.theme.name == 'Pêche',
            pollutionColor: article.theme.name == 'Pollution plastique',
            ecoColor: article.theme.name == 'Éco-responsabilité',
          }"
        >
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
      .card_header {
        width: 160px;
        font-family: "Founders Grotesk Mono";
        text-transform: uppercase;
        font-size: 13px;
        padding: 6px 12px;
        position: relative;
        color: #fff;
        &::before {
          position: absolute;
          content: "";
          border: 2px solid #1c1c1c;
          top: 0;
          bottom: -1.2px;
          left: 9px;
          right: 0;
          z-index: -1;
          transform: perspective(7px) rotateX(3deg);
        }
      }
      .content_card {
        border: 2px solid #1c1c1c;
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
          color: #00d4ae;
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
