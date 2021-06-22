<template>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <div
                    :class="{
                        climatBorderColor: theme.name == 'Climat',
                        bioBorderColor: theme.name == 'Bio-diversité',
                        pecheBorderColor: theme.name == 'Pêche',
                        pollutionBorderColor:
                            theme.name == 'Pollution plastique',
                        ecoBorderColor: theme.name == 'Éco-responsabilité'
                    }"
                    class="card_header"
                >
                    {{ theme.name }}
                </div>
                <div
                    class="fill"
                    :class="{
                        'ecoBorderBottomColor ':
                            theme.name == 'Éco-responsabilité',
                        'pollutionBorderBottomColor ':
                            theme.name == 'Pollution plastique',
                        'bioBorderBottomColor ': theme.name == 'Bio-diversité',
                        'pecheBorderBottomColor ': theme.name == 'Pêche',
                        'climatBorderBottomColor ': theme.name == 'Climat'
                    }"
                ></div>
            </div>
            <div
                :class="{
                    climatBorderColor: theme.name == 'Climat',
                    bioBorderColor: theme.name == 'Bio-diversité',
                    pecheBorderColor: theme.name == 'Pêche',
                    pollutionBorderColor: theme.name == 'Pollution plastique',
                    ecoBorderColor: theme.name == 'Éco-responsabilité'
                }"
                class="content_card"
            >
                <div class="img">
                    <div
                        class="img_calc"
                        :style="
                            'background-image: url(\'/images/themes/' +
                                theme.name +
                                '.jpg\')'
                        "
                    ></div>
                </div>
                <h6>Thématique</h6>
                <h4
                    :class="{
                        climatColor: theme.name == 'Climat',
                        bioColor: theme.name == 'Bio-diversité',
                        pecheColor: theme.name == 'Pêche',
                        pollutionColor: theme.name == 'Pollution plastique',
                        ecoColor: theme.name == 'Éco-responsabilité'
                    }"
                >
                    {{ theme.name }}
                </h4>
                <p class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id
                    voluptatum explicabo quisquam eum illo consequatur, ad velit
                    placeat vitae quidem enim iusto aperiam, veritatis
                    laudantium perspiciatis dolorem dolor similique nisi.
                </p>
                <div class="thème">
                    <a
                        class="theme_link"
                        :href="'/recherche?target=' + target.id"
                        >{{ target.name }}</a
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["theme", "target"]
};
</script>

<style scoped lang="scss">
.wrapper {
    min-width: 421px;
    margin-bottom: 10px;
    .container {
        .header {
            display: flex;

            .fill {
                flex: 1;
                /* margin-right: 5px; */
            }
            .card_header {
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                background-color: #fff;
                font-family: "Founders Grotesk Mono";
                font-style: normal;
                font-weight: normal;
                font-size: 16px;
                line-height: 16px;
                /* identical to box height */

                letter-spacing: 0.06em;
                text-transform: uppercase;
                padding: 6px 12px;
                border-bottom: none !important ;
            }
        }

        .content_card {
            /*  border-top-right-radius: 5px; */
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top: none !important;
            background-color: #fff;
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
                }
            }
            h4 {
                margin: 10px 0;
            }
            .date {
                margin: 14px 0;
                font-size: 10px;
                font-family: "Founders Grotesk Mono";
                text-transform: uppercase;
            }
            .content {
                font-size: 14px;
                margin-bottom: 18px;
                line-height: 20px;
            }
        }
    }
}
</style>
