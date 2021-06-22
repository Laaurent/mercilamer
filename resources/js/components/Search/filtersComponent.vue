<template>
    <div class="wrapper-filter">
        <div class="header">
            <div class="title">
                <img src="/images/icons/Setting.svg" alt="" />
                Filtres
            </div>
            <div class="button">
                <button class="underline" @click="$emit('fetch', '')">
                    Réinitialiser
                </button>
            </div>
        </div>
        <div class="container">
            <filterComponent
                title="Thématiques"
                type="theme"
                :data="filters['themes']"
                @path="theme = $event"
            />
            <filterComponent
                title="Niveaux"
                type="target"
                :data="filters['target']"
                @path="target = $event"
            />
            <filterComponent
                title="Formats"
                type="support"
                :data="filters['support']"
                @path="support = $event"
            />
            <filterComponent
                title="Sources"
                type="association"
                :data="filters['assoc']"
                @path="association = $event"
            />
            <button class="search" @click="$emit('fetch', request)">
                Rechercher
            </button>
        </div>
    </div>
</template>

<script>
import filterComponent from "./filterComponent.vue";
export default {
    props: ["filters"],
    components: { filterComponent },
    data() {
        return {
            theme: null,
            target: null,
            support: null,
            association: null
        };
    },
    watch: {
        total: function() {
            this.requestPath();
            console.log("ok");
        }
    },
    computed: {
        request: function() {
            let req = "?";
            if (this.theme) {
                req += this.theme.slice(0, -1);
            }
            if (this.target) {
                if (req != "?") req += "&";
                req += this.target.slice(0, -1);
            }
            if (this.support) {
                if (req != "?") req += "&";
                req += this.support.slice(0, -1);
            }
            if (this.association) {
                if (req != "?") req += "&";
                req += this.association.slice(0, -1);
            }
            if (req == "?") req = "";
            return req;
        }
    }
};
</script>

<style lang="scss" scoped>
.wrapper-filter {
    width: 30%;
    .header {
        height: 50px;
        margin-bottom: 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        .title {
            display: flex;
            gap: 11px;
            align-items: center;
        }
        .button {
            .underline {
                text-decoration: underline;
                font-family: Maax Rounded;
                font-style: normal;
                font-weight: normal;
                font-size: 16px;
                line-height: 18px;
                letter-spacing: 0.06em;
                background: none;
                border: none;
                cursor: pointer;

                /* Gris infos secondaire */

                color: #808080;
            }
        }
    }
    .container {
        border: 2px solid #1c1c1c;
        background-color: #fff;
    }
}
</style>
