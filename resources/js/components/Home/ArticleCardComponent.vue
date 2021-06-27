<template>
  <div class="wrapper">
    <div class="container">
      <div class="content_card">
        <div class="title">
          <h3>{{ article.title }}</h3>
        </div>

        <div class="img">
          <div
            class="img_calc"
            :style="
              'background-image: url(\'/images/articles/' +
              article.id +
              '.jpg\')'
            "
          >
            <div class="layout">
              <div>
                <a class="link_img" :href="'/article/' + article.id"
                  ><div>
                    Voir plus
                    <img src="/images/icons/arrow.svg" alt="" /></div
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="flex">
          <div class="assoc">{{ article.association.name }}</div>
          <div class="support">
            <p>{{ article.support.name }}</p>
            <img
              :src="'/images/icons/' + article.support.name + '.svg'"
              alt="Image support"
            />
          </div>
        </div>
        <p class="content">
          {{ article.content }}
        </p>
        <div class="thème">
          <a class="theme_link" href="#">{{ article.target.name }}</a>
          <a
            class="theme_link"
            :class="{
              'climatBorderColor climatBGColorHover': article.theme.id == 1,
              'bioBorderColor bioBGColorHover': article.theme.id == 2,
              'pecheBorderColor pecheBGColorHover': article.theme.id == 3,
              'pollutionBorderColor pollutionBGColorHover':
                article.theme.id == 4,
              'ecoBorderColor ecoBGColorHover': article.theme.id == 5,
            }"
            :href="'/recherche?theme=' + article.theme.id"
            >{{ article.theme.name }}</a
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
  .title {
    height: 60px;
  }
  h3 {
    /* border-bottom: 1px dotted #1c1c1c; */
    text-decoration: underline dotted 1px #1c1c1c;
    text-underline-offset: 4px;
    margin: 10px 0;
  }
  .wrapper {
    min-width: 421px;
    margin-bottom: 10px;
    .container {
      .content_card {
        background-color: #fff;
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
            &:hover .layout {
              opacity: 1;
            }
          }
        }
        .flex {
          display: flex;
          align-items: center;
          justify-content: space-between;
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
          margin: 0;
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
