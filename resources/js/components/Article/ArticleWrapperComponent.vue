<template>
    <div class="wrapper">
        <div class="container">
            <div class="left">
                <hr />
                <div class="support">
                    <p>{{ article.support.name }}</p>
                    <img
                        :src="'/images/icons/' + article.support.name + '.svg'"
                        alt=""
                    />
                </div>
            </div>
            <div class="middle">
                <div class="header">
                    <h2>{{ article.title }}</h2>
                </div>
                <div
                    class="img"
                    :style="
                        'background-image: url(\'/images/articles/' +
                            article.id +
                            '.jpg\')'
                    "
                ></div>
                <div class="main">
                    <div class="mainleft">
                        <h3>Contenu de chaleur de l’océan</h3>
                        <div>
                            <ul>
                                <li>
                                    Les océans emmagasinent chaque année
                                    l’équivalent de 10 fois la quantité
                                    d’énergie consommée par l’humanité sur la
                                    même période.
                                </li>
                                <li>
                                    La quantité de chaleur accumulée a
                                    aujourd’hui des conséquences sur l’évolution
                                    du niveau de la mer, l’augmentation des
                                    températures et la fonte des glaces.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mainright">
                        <h3>Source de l’énergie provenant du Soleil</h3>
                        <div>
                            <p>{{ article.content }}</p>
                        </div>
                    </div>
                </div>
                <div class="button">
                    <button
                        class="theme_link"
                        :class="{
                            'climatBorderColor climatBGColorHover':
                                article.theme.name == 'Climat',
                            'bioBorderColor bioBGColorHover':
                                article.theme.name == 'Bio-diversité',
                            'pecheBorderColor pecheBGColorHover':
                                article.theme.name == 'Pêche',
                            'pollutionBorderColor pollutionBGColorHover':
                                article.theme.name == 'Pollution plastique',
                            'ecoBorderColor ecoBGColorHover':
                                article.theme.name == 'Éco-responsabilité'
                        }"
                    >
                        Se rendre sur l’article
                    </button>
                </div>
            </div>
            <div class="right">
                <!--  <img src="" alt="" /> -->
                <div
                    class="assoc"
                    :style="
                        'background-image: url(\'/images/associations/' +
                            article.association.id +
                            '.png\')'
                    "
                ></div>
                <hr />
                <div>
                    <img src="/images/inter/like.svg" alt="" />
                    <img src="/images/inter/details.svg" alt="" />
                    <img src="/images/inter/share.svg" alt="" />
                </div>
                <hr />
                <div class="info">
                    <div>
                        <img src="/images/icons/clock.svg" alt="" />
                        <p>{{ article.read_time }} MIN.</p>
                    </div>
                    <div>
                        <img src="/images/icons/calendar.svg" alt="" />
                        <p>{{ dateFormat }}</p>
                    </div>
                    <div>
                        <img src="/images/icons/quote.svg" alt="" />
                        <p>CITER</p>
                    </div>
                </div>
                <hr />
                <div class="badges">
                    <a
                        :href="'recherche?theme=' + article.theme.id"
                        class="theme_link"
                        :class="{
                            'climatBorderColor climatBGColorHover':
                                article.theme.name == 'Climat',
                            'bioBorderColor bioBGColorHover':
                                article.theme.name == 'Bio-diversité',
                            'pecheBorderColor pecheBGColorHover':
                                article.theme.name == 'Pêche',
                            'pollutionBorderColor pollutionBGColorHover':
                                article.theme.name == 'Pollution plastique',
                            'ecoBorderColor ecoBGColorHover':
                                article.theme.name == 'Éco-responsabilité'
                        }"
                        >{{ article.theme.name }}</a
                    >
                    <a
                        :href="'/recherche?target=' + article.target.id"
                        class="theme_link"
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
    computed: {
        dateFormat: function() {
            let date = new Date(this.article.publication_date);
            let ye = new Intl.DateTimeFormat("fr", { year: "numeric" }).format(
                date
            );
            let mo = new Intl.DateTimeFormat("fr", { month: "short" }).format(
                date
            );
            let da = new Intl.DateTimeFormat("fr", { day: "2-digit" }).format(
                date
            );
            return `${da} ${mo} ${ye}`;
        }
    }
};
</script>

<style lang="scss" scoped>
.wrapper {
    margin-top: 100px;
    .container {
        hr {
            border: none;
            border-top: 1px dashed #1c1c1c;
        }
        padding: 0 80px;
        display: flex;
        gap: 30px;
        .left,
        .right {
            width: 185px;
            margin-top: 100px;
        }
        .middle {
            flex: 1;
            .header {
                height: 100px;
                h2 {
                    margin: 0;
                }
            }
            .img {
                width: 100%;
                height: 360px;

                background-position: center;
                background-size: cover;
            }
            .main {
                gap: 30px;
                display: flex;
                div {
                    h3 {
                        height: 40px;
                    }
                    div {
                        /* padding: 17px; */
                        background-color: #fff;
                        border: 1px solid #1c1c1c;
                        width: 100%;
                        ul li {
                            padding: 10px;
                        }
                        p {
                            padding: 10px;
                            text-align: justify;
                        }
                    }
                }
            }
            .button {
                margin: 46px 0 100px;
                display: flex;
                justify-content: center;
                button {
                    width: 420px;
                    font-family: Maax Rounded;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 20px;
                    line-height: 30px;
                    /* or 150% */

                    text-align: center;
                }
            }
        }
        .right {
            .assoc {
                width: 100%;
                height: 100px;
                background-position: center;
                background-size: contain;
                background-repeat: no-repeat;
            }
            .info {
                div {
                    display: flex;
                    gap: 12px;
                    align-items: center;
                    p {
                        margin: 4px 0;
                    }
                }
            }
            .badges {
                display: flex;
                gap: 8px;
                flex-wrap: wrap;
                a {
                    /*  margin: 8px 0; */
                }
            }
        }
        .left {
            .support {
                display: flex;
                align-items: center;
                gap: 10px;
            }
        }
    }
}
</style>
