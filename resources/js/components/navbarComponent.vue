<template>
  <nav>
    <div class="wrapper">
      <div class="container">
        <div class="container_left">
          <div
            id="accueil"
            @mouseover="accueil = 1"
            @mouseleave="mouseLeft('accueil')"
            :class="{ active: accueil == 1 }"
          >
            <a class="nav-link home-link" href="/"> Accueil </a>
          </div>
          <div
            id="comment"
            @mouseover="comment = 1"
            @mouseleave="mouseLeft('comment')"
            :class="{ active: comment == 1 }"
          >
            <a class="nav-link" href="#"> Comment ca marche ? </a>
          </div>
          <div
            id="recherche"
            @mouseover="search = 1"
            @mouseleave="mouseLeft('search')"
            :class="{ active: search == 1 }"
          >
            <a class="nav-link nav-search" href="/recherche"> Recherche </a>
          </div>
        </div>
        <div class="middle"><div></div></div>
        <div class="container_right">
          <div
            id="agir"
            @mouseover="agir = 1"
            @mouseleave="mouseLeft('agir')"
            :class="{ active: agir == 1 }"
          >
            <a class="nav-link" href="#"> Agir Ensemble </a>
          </div>
          <div><a class="nav-link" href="#"> Associations </a></div>
          <div><a class="nav-link" href="#"> Connexion </a></div>

          <!-- <div class="nav-lang">
                        <a class="nav-link isActive" href="#"> FR </a>
                        <a class="nav-link" href="#"> EN </a>
                    </div> -->
        </div>
      </div>
      <img class="certified" src="/images/icons/Education.svg" alt="" />
    </div>
    <div class="lang">
      <div class="wrapper_lang">
        <a href="#">FR</a>
        <a href="#">EN</a>
      </div>
    </div>
    <transition name="fade">
      <div
        v-if="accueil || accueilDiv"
        @mouseover="accueilDiv = 1"
        @mouseleave="accueilDiv = 0"
        class="menu_div"
        style="left: 0px"
      >
        <div class="container_menu">
          <div>
            <button class="link" @click="scrollMeTo('headNews')">
              Actualité
            </button>
          </div>
          <div>
            <button class="link" @click="scrollMeTo('themesFolders')">
              Dossiers thématiques
            </button>
          </div>
          <div>
            <button class="link" @click="scrollMeTo('focusOn')">
              Cap sur...
            </button>
          </div>
        </div>
      </div>
      <div
        v-if="search || searchDiv"
        @mouseover="searchDiv = 1"
        @mouseleave="searchDiv = 0"
        class="menu_div"
        style="left: 380px"
      >
        <div class="container_search">
          <div class="search_flex">
            <a href="/recherche?theme=1">Climat</a>
            <a href="/recherche?theme=2">Bio-diversité</a>
            <a href="/recherche?theme=3">Pêche</a>
          </div>
          <div class="search_flex">
            <a href="/recherche?theme=4">Pollution plastique</a>
            <a href="/recherche?theme=5">Éco-responsabilité</a>
          </div>
        </div>
      </div>
      <div
        v-if="agir || agirDiv"
        @mouseover="agirDiv = 1"
        @mouseleave="agirDiv = 0"
        class="menu_div"
        style="left: 858px"
      >
        <div class="container_menu">
          <div>
            <a href="#">Dons</a>
          </div>
          <div>
            <a href="#">Devenir partenaire</a>
          </div>
          <div>
            <a href="#">Proposer un programme</a>
          </div>
        </div>
      </div>
      <div
        v-if="comment || commentDiv"
        @mouseover="commentDiv = 1"
        @mouseleave="commentDiv = 0"
        class="menu_div"
        style="left: 190px"
      >
        <div class="container_menu">
          <div>
            <a href="#">Enseignants</a>
          </div>
          <div>
            <a href="#">Élèves</a>
          </div>
          <div>
            <a href="#">Curieux</a>
          </div>
        </div>
      </div>
    </transition>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      accueil: 0,
      accueilDiv: 0,
      search: 0,
      searchDiv: 0,
      agir: 0,
      agirDiv: 0,
      comment: 0,
      commentDiv: 0,
    };
  },
  computed: {},
  methods: {
    mouseLeft: function (div) {
      setTimeout(
        function () {
          this[div] = 0;
        }.bind(this),
        100
      );
    },
    scrollMeTo(refName) {
      var element = document.getElementById(refName);
      var top = element.offsetTop;

      window.scrollTo({ left: 0, top: top, behavior: "smooth" });
    },
  },
};
</script>

<style scoped lang="scss">
  .fade-enter-active,
  .fade-leave-active {
    transition: opacity 0.2s;
  }
  .fade-enter,
  .fade-leave-to {
    opacity: 0;
  }

  .wrapper {
    font-family: "Founders Grotesk Mono";
    width: 100%;
    height: 110px;

    display: flex;
    align-items: center;
    .container {
      height: 100%;
      padding: 0 !important;
      div {
        display: flex;

        div {
          border-bottom: 3px solid #1c1c1c;
          display: flex;
          align-items: center;
          text-align: center;
          justify-content: center;
          width: 190px;
          a {
            margin: 26px;
          }
        }
      }
      .container_left {
        font-size: 18px;
        div {
          border-right: 1px dashed #1c1c1c;
        }
      }
      .middle {
        flex: 1;
        div {
          width: 100%;
        }
      }
      .container_right {
        div {
          border-left: 1px dashed #1c1c1c;
        }
      }
    }
    .certified {
      z-index: 5;
      position: absolute;
      width: 173.88px;
      height: 173.88px;
      right: 6vw;
      top: 25.99px;
      transform: rotate(15deg);
    }
  }
  .lang {
    position: absolute;
    right: 0;
    .wrapper_lang {
      display: flex;
      a {
        font-size: 15px;
        margin-top: -1px;
        padding: 7px;
        background: #fff;
        border: 1px solid #1c1c1c;
        cursor: pointer;
      }
    }
  }
  .container {
    flex: 1;
    display: flex;
    justify-content: space-between;
  }

  .menu_div {
    font-family: "Founders Grotesk Mono" !important;
    background-color: #fff;
    position: absolute;
    display: flex;

    z-index: 2;
    width: auto;
    height: 204px;
    align-items: center;
    .container_search {
      display: flex;
      margin: 40px;
      flex-direction: row;
      justify-content: flex-start;
      align-items: baseline;
      gap: 64px;
      .search_flex {
        display: flex;
        flex-direction: column;
        gap: 9px;
      }
    }
    .container_menu {
      margin: 40px;
      flex-direction: column;
      justify-content: flex-start;
      align-items: baseline;
      gap: 64px;
      div {
        /* width: 200px; */
        margin: 20px 0;
        h2 {
          margin: 0;
        }
      }
    }
  }
  .active {
    background-color: #fff;
    border-bottom: 2px solid #fff !important;
  }
  .link {
    cursor: pointer;
    font-size: 18px;
    color: #1c1c1c;
    background: none;
    border: none;
    font-family: "Founders Grotesk Mono" !important;
    text-align: left;
  }
</style>
