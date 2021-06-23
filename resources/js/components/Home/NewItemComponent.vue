<template>
    <div class="news_item">
        <div class="title">
            <h3>{{ new_item.title }}</h3>
        </div>

        <div class="img">
            <div
                class="img_calc"
                :style="
                    'background-image: url(\'/images/articles/' +
                        new_item.id +
                        '.jpg\')'
                "
            >
                <div class="layout">
                    <div>
                        <a class="link_img" :href="'/article/' + new_item.id"
                            ><div>
                                Voir plus
                                <img
                                    src="/images/icons/arrow.svg"
                                    alt=""
                                /></div
                        ></a>
                    </div>
                </div>
            </div>
        </div>
        <p class="date">{{ dateFormat }} - {{ new_item.read_time }} MIN.</p>
        <p class="content">
            {{ new_item.content }}
        </p>
        <div class="thème">
            <a class="theme_link" href="#">{{ new_item.target.name }}</a>
        </div>
    </div>
</template>

<script>
export default {
    props: ["new_item"],
    computed: {
        dateFormat: function() {
            let date = new Date(this.new_item.publication_date);
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
.title {
    height: 60px;
}
h3 {
    /* border-bottom: 1px dotted #1c1c1c; */
    text-decoration: underline dotted 1px #1c1c1c;
    text-underline-offset: 4px;
    margin: 10px 0;
    line-height: 30px;
}
.news_item {
    width: 405px;
    padding: 24px;
    .img {
        .img_calc {
            margin: 24px 0 0;
            width: 100%;
            height: 226px;
            /* background-image: url("/public/storage/images/1.jpg"); */
            /*  background-image: url("~/images/articles/1.jpg"); */
            background-position: center;
            background-size: cover;

            &:hover .layout {
                opacity: 1;
            }
        }
    }
    .date {
        margin: 14px 0;
        font-size: 10px;
        font-family: "Founders Grotesk Mono";
        text-transform: uppercase;
        color: #949494;
    }
    .content {
        height: 60px;
        font-size: 14px;
        margin-bottom: 18px;
        line-height: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
}
</style>
