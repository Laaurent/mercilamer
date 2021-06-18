<template>
    <nav>
        <div class="wrapper">
            <div class="container">
                <div class="container_left">
                    <a class="nav-link home-link" href="#">
                        Accueil
                    </a>
                    <a
                        @mouseover="search = 1"
                        @mouseleave="mouseLeft('search')"
                        class="nav-link nav-search"
                        href="#"
                    >
                        Recherche
                    </a>
                    <a
                        class="nav-link"
                        @mouseover="agir = 1"
                        @mouseleave="mouseLeft('agir')"
                        href="#"
                    >
                        Agir Ensemble
                    </a>
                    <a
                        class="nav-link"
                        @mouseover="comment = 1"
                        @mouseleave="mouseLeft('comment')"
                        href="#"
                    >
                        Comment ca marche ?
                    </a>
                </div>
                <div class="container_right">
                    <a class="nav-link" href="#">
                        Annuaire des associations
                    </a>
                    <a class="nav-link" href="#">
                        Connexion
                    </a>
                    <div class="nav-lang">
                        <a class="nav-link isActive" href="#"> FR </a>
                        <a class="nav-link" href="#">
                            EN
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div
            v-if="search || searchDiv"
            @mouseover="searchDiv = 1"
            @mouseleave="searchDiv = 0"
            class="menu_div search"
        >
            <div class="container">
                <div><h2>Recherche</h2></div>
                <div>
                    <a href="#">Climat</a>
                    <a href="#">Biodiversité</a>
                    <a href="#">Pêche</a>
                </div>
                <div>
                    <a href="#">Pollution plastique</a>
                    <a href="#">Éco-responsabilité</a>
                </div>
            </div>
        </div>
        <div
            v-if="agir || agirDiv"
            @mouseover="agirDiv = 1"
            @mouseleave="agirDiv = 0"
            class="menu_div agir"
        >
            <div class="container">
                <div><h2>Agir ensemble</h2></div>
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
            class="menu_div comment"
        >
            <div class="container">
                <div><h2>Comment ça marche?</h2></div>
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
    </nav>
</template>

<script>
export default {
    data() {
        return {
            search: 0,
            searchDiv: 0,
            agir: 0,
            agirDiv: 0,
            comment: 0,
            commentDiv: 0
        };
    },
    methods: {
        mouseLeft: function(div) {
            setTimeout(
                function() {
                    this[div] = 0;
                }.bind(this),
                200
            );
        }
    }
};
</script>

<style scoped lang="scss">
.wrapper {
    width: 100%;
    height: 110px;
    border-bottom: 3px solid #1c1c1c;
    display: flex;
    align-items: center;
    .container {
        div {
            display: flex;
            gap: 25px;
            * {
                display: flex;
                align-items: center;
                width: 125px;
                height: 110px;
            }
        }
        .container_left {
            font-size: 22px;
            .home-link {
                width: 85px;
            }
        }
        .container_right {
            font-size: 15px;
            > * {
                width: 78px;
            }
            .nav-lang {
                display: flex;
                gap: 4px;
                a {
                    color: #949494;
                    width: auto;
                    &.isActive {
                        color: #1c1c1c;
                    }
                }
            }
        }
    }
}
.container {
    flex: 1;
    padding: 0 80px 0 188px;
    display: flex;
    justify-content: space-between;
}
.search {
    background-color: #fab322;
}
.agir {
    background-color: #f4a0d2;
}
.comment {
    background-color: #fd5b2a;
}
.menu_div {
    position: absolute;
    display: flex;

    width: 100%;
    height: 204px;
    align-items: center;

    .container {
        justify-content: flex-start;
        gap: 64px;
        div {
            display: flex;
            width: 200px;
            flex-direction: column;
            h2 {
                margin: 0;
            }
        }
    }
}
</style>
