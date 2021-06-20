<template>
    <div class="wrapper">
        <div class="container">
            <div
                class="card_header"
                :class="{
                    climatBGColorNAV: theme.name == 'Climat',
                    bioBGColorNAV: theme.name == 'Bio-diversité',
                    pecheBGColorNAV: theme.name == 'Pêche',
                    pollutionBGColorNAV: theme.name == 'Pollution plastique',
                    ecoBGColorNAV: theme.name == 'Éco-responsabilité'
                }"
            >
                &nbsp;{{ theme.name }}
            </div>
            <div class="content_card">
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
                border: 3px solid #1c1c1c;
                top: 0;
                bottom: 0;
                left: 10px;
                right: 0;
                z-index: -1;
                transform: perspective(7px) rotateX(3deg);
            }
        }
        .content_card {
            border: 3px solid #1c1c1c;
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
            h4 {
                color: #00d4ae;
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
            }
        }
    }
}
</style>
