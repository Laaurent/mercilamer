<template>
    <div class="wrapper">
        <div class="container">
            <h2>Actualités à la une</h2>
            <div class="news_wrapper">
                <div class="news_header">
                    <div
                        class="header_item"
                        :class="{
                            'isActive ecoBGColorNAV': active === 'ecoNews'
                        }"
                    >
                        <button @click="changeNews('ecoNews')">
                            Éco-responsabilité
                        </button>
                    </div>
                    <div
                        class="header_item"
                        :class="{
                            'isActive pollutionBGColorNAV':
                                active === 'pollutionNews'
                        }"
                    >
                        <button @click="changeNews('pollutionNews')">
                            Pollution
                        </button>
                    </div>
                    <div
                        class="header_item"
                        :class="{
                            'isActive pecheBGColorNAV': active === 'pecheNews'
                        }"
                    >
                        <button @click="changeNews('pecheNews')">
                            Pêche
                        </button>
                    </div>
                    <div
                        class="header_item"
                        :class="{
                            'isActive bioBGColorNAV': active === 'bioNews'
                        }"
                    >
                        <button @click="changeNews('bioNews')">
                            Bio-diversité
                        </button>
                    </div>
                    <div
                        class="header_item"
                        :class="{
                            'isActive climatBGColorNAV': active === 'climatNews'
                        }"
                    >
                        <button @click="changeNews('climatNews')">
                            Climat
                        </button>
                    </div>
                </div>
                <div class="news_container">
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
            active: "climatNews"
        };
    },
    methods: {
        changeNews: function(theme) {
            this.newsDisplay = this.news[theme];
            this.active = theme;
        }
    }
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
            position: absolute;
            flex-direction: row-reverse;
            transform: translateY(-31px) translateX(6px);
            margin: 0 3px;
            .header_item {
                width: 150px;
                padding: 6px 12px;
                position: relative;
                &.isActive {
                    z-index: 2;
                    button {
                        color: #fff;
                    }
                    /*  &::before {
                        background-color: #276dff;
                    } */
                }
                &::before {
                    position: absolute;
                    content: "";
                    border: 2px solid #1c1c1c;
                    background-color: #fff;
                    top: 0;
                    bottom: 1px;
                    left: 2px;
                    right: 0;
                    z-index: -1;
                    transform: perspective(7px) rotateX(3deg);
                }
                button {
                    width: 100%;
                    text-align: left;
                    background: none;
                    border: none;
                    padding: 0;
                    font-family: "Founders Grotesk Mono";
                    text-transform: uppercase;
                    font-size: 13px;
                    &:hover {
                        cursor: pointer;
                    }
                }
            }
        }
        .news_container {
            border: 2px solid #1c1c1c;
            width: 100%;
            display: flex;
            /*  gap: 31.5px; */
            gap: 10px;
            justify-content: space-between;
        }
    }
}
</style>
