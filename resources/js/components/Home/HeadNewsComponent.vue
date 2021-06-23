<template>
  <div class="wrapper">
    <div id="headNews" class="container">
      <h2>Actualités à la une</h2>
      <div class="news_wrapper">
        <div class="news_header">
          <div
            @mouseover="hover = 'climatNews'"
            @mouseleave="hover = null"
            class="climatLightBGColor header_item"
          >
            <button @click="changeNews('climatNews')">Climat</button>
          </div>
          <div
            @mouseover="hover = 'pecheNews'"
            @mouseleave="hover = null"
            class="header_item pecheLightBGColor"
          >
            <button @click="changeNews('pecheNews')">Pêche</button>
          </div>
          <div
            @mouseover="hover = 'bioNews'"
            @mouseleave="hover = null"
            class="header_item bioLightBGColor"
          >
            <button @click="changeNews('bioNews')">Bio-diversité</button>
          </div>
          <div
            @mouseover="hover = 'pollutionNews'"
            @mouseleave="hover = null"
            class="header_item pollutionLightBGColor"
          >
            <button @click="changeNews('pollutionNews')">
              Pollution plastique
            </button>
          </div>
          <div
            @mouseover="hover = 'ecoNews'"
            @mouseleave="hover = null"
            class="header_item ecoLightBGColor"
          >
            <button @click="changeNews('ecoNews')">Éco-responsabilité</button>
          </div>
          <div :class="{}"></div>
        </div>
        <div
          class="news_container"
          :class="{
            ecoLightBGColor: active == 'ecoNews',
            pollutionLightBGColor: active == 'pollutionNews',
            bioLightBGColor: active == 'bioNews',
            pecheLightBGColor: active == 'pecheNews',
            climatLightBGColor: active == 'climatNews',
          }"
        >
          <NewItemComponent
            v-for="(new_item, index) in newsDisplay"
            :key="index"
            :new_item="new_item"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NewItemComponent from "./NewItemComponent.vue";
export default {
  props: ["news"],
  components: { NewItemComponent },
  data() {
    return {
      newsDisplay: this.news["climatNews"],
      active: "climatNews",
      hover: null,
    };
  },
  methods: {
    changeNews: function (theme) {
      this.newsDisplay = this.news[theme];
      this.active = theme;
    },
  },
};
</script>

<style lang="scss" scoped>
  .wrapper {
    margin: 57px 0;
    h3 {
      margin-bottom: 29px;
    }
    .news_wrapper {
      margin: 50px 0 29px;
      .news_header {
        display: flex;
        .fill {
          flex: 1;
          padding-right: 4px;
        }
        .header_item {
          /* width: 160px; */
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
          /*    border-bottom: none !important; */
          padding: 6px 12px;
          &:hover {
            background-color: #fff;
          }
          button {
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: 0;
            font-family: "Founders Grotesk Mono";
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 16px;
            /* identical to box height */

            letter-spacing: 0.06em;
            text-transform: uppercase;
            &:hover {
              cursor: pointer;
            }
          }
        }
      }
      .news_container {
        background: #fff;
        /* border: 2px solid #1c1c1c; */
        border-top: none !important;
        /* width: 100%; */
        display: flex;
        /*  gap: 31.5px; */
        gap: 10px;
        justify-content: space-between;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-right-radius: 5px;
      }
    }
  }
  .isActive {
    background: #fff;
    border-bottom: none !important;
  }
</style>
