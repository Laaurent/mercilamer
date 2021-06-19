<template>
    <div class="news_item">
        <div class="title">
            <h3>{{ new_item.title }}</h3>
        </div>

        <div class="img">
            <div class="img_calc"></div>
        </div>
        <p class="date">{{ dateFormat }}</p>
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
    height: 50px;
}
h3 {
    border-bottom: 1px dotted #1c1c1c;
    /* text-decoration: underline dotted 1px #1c1c1c;
    text-underline-offset: 5px; */
    margin: 10px 0;
}
.news_item {
    width: 350px;
    padding: 24px;
    .img {
        .img_calc {
            margin: 24px 0 0;
            width: 100%;
            height: 226px;
            /* background-image: url("/public/storage/images/1.jpg"); */
            background-image: url("~/images/articles/1.jpg");
            background-position: center;
            background-size: cover;
            border: 1px solid #1c1c1c;
        }
    }
    .date {
        margin: 14px 0;
        font-size: 10px;
        font-family: "Founders Grotesk Mono";
        text-transform: uppercase;
    }
    .content {
        height: 60px;
        font-size: 14px;
        margin-bottom: 18px;
    }
}
</style>
