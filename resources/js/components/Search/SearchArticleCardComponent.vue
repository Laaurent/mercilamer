<template>
    <div class="wrapper">
        <div class="header">
            <p>{{ article.association.name }}</p>
        </div>
        <div class="container">
            <div class="left">
                <div class="img">
                    <div
                        class="img_calc"
                        :style="
                            'background-image: url(\'/images/articles/' +
                                article.id +
                                '.jpg\')'
                        "
                    ></div>
                </div>
            </div>
            <div class="right">
                <p class="date">
                    {{ dateFormat }} - {{ article.read_time }} MIN.
                </p>
                <h3>{{ article.title }}</h3>
                <p class="content">{{ article.content }}</p>
            </div>
        </div>
        <div class="footer">
            <div class="badge">
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
                    :href="'recherche?target=' + article.target.id"
                    class="theme_link"
                    >{{ article.target.name }}</a
                >
            </div>
            <div class="inter">
                <a href="#"><img src="/images/inter/like.svg" alt=""/></a>
                <a href="#"><img src="/images/inter/details.svg" alt=""/></a>
                <a href="#"><img src="/images/inter/share.svg" alt=""/></a>
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
p {
    margin: 0;
}
.wrapper {
    background-color: #fff;
    border: 2px solid #1c1c1c;
    padding: 23px;
    margin: 0 0 10px;
    .header {
        margin: 0 0 24px;
    }
    .container {
        width: 100%;
        display: flex;
        gap: 25px;
        .left {
            width: 365px;
            .img {
                width: 365px;
                .img_calc {
                    margin: 0;
                    width: 100%;
                    height: 226px;
                    background-position: center;
                    background-size: cover;
                    border: 1px solid #1c1c1c;
                }
            }
        }
        .right {
            .date {
                font-family: "Founders Grotesk Mono";
                font-style: normal;
                font-weight: normal;
                font-size: 13px;
                line-height: 13px;
                /* identical to box height */

                text-transform: uppercase;
            }
        }
    }
    .footer {
        display: flex;
        justify-content: space-between;
        margin: 16px 0 0;
    }
}
</style>
