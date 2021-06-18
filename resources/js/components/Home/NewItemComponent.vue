<template>
  <div class="news_item">
    <h3>Titre sur deux lignes</h3>
    <h3>Sujet</h3>
    <div class="img">
      <div class="img_calc"></div>
    </div>
    <p class="date">10 Jan. 2021 - 5 min.</p>
    <p class="content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatum
      explicabo quisquam eum illo consequatur, ad velit placeat vitae quidem
      enim iusto aperiam, veritatis laudantium perspiciatis dolorem dolor
      similique nisi.
    </p>
    <div class="thème">
      <a class="theme_link" href="#">Lycée</a>
      <a class="theme_link" href="#">Sience économique</a>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
  h3 {
    border-bottom: 1px dotted #1c1c1c;
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
        background-image: url("../../../../public/storage/images/1.jpg");
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
      font-size: 14px;
      margin-bottom: 18px;
    }
  }
</style>
