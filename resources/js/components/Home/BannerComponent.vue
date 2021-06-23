<template>
    <div class="wrapper">
        <div class="container">
            <div class="input_search">
                <input
                    class="searchBar"
                    type="search"
                    name="searchBar"
                    v-model="search"
                    @keyup.enter="goToSearch"
                    placeholder="Que souhaitez-vous apprendre aujourd’hui?"
                />
            </div>

            <div class="themes">
                <a
                    class="theme_link climatBorderColor climatBGColorHover"
                    href="/recherche?theme=1"
                    >Climat</a
                >
                <a
                    class="theme_link bioBorderColor bioBGColorHover"
                    href="/recherche?theme=2"
                    >Bio-diversité</a
                >
                <a
                    class="theme_link pecheBorderColor pecheBGColorHover"
                    href="/recherche?theme=3"
                    >Pêche</a
                >
                <a
                    class="theme_link pollutionBorderColor pollutionBGColorHover"
                    href="/recherche?theme=4"
                    >Pollution plastique</a
                >
                <a
                    class="theme_link ecoBorderColor ecoBGColorHover"
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
        return {
            search: ""
        };
    },
    computed: {
        search_format: function() {
            return this.search.replace(" ", ",");
        }
    },
    methods: {
        goToSearch: function() {
            window.location = "/recherche?pattern=" + this.search_format;
        }
    }
};
</script>

<style scoped lang="scss">
.wrapper {
    .container {
        margin: 89px 0 98px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
        h1 {
            width: 674px;
        }
        .input_search {
            &:before {
                content: url("/images/icons/Search.svg");
                position: absolute;
                width: 30px;
                height: 30px;
                margin: 14px 16px;
            }
            input.searchBar {
                width: 804px;
                padding: 14px 49px;
                color: #1c1c1c;
                font-family: "maax rounded";
                font-size: 20px;
                text-align: left;
                border-radius: 40px;
                border: 1px solid #1c1c1c;
            }
        }
        .themes {
            margin: 50px 0 0;
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
