<template>
  <div class="wrapper">
    <div class="container">
      <div class="card_header">Climat</div>
      <div class="content_card">
        <div class="img">
          <div class="img_calc"></div>
        </div>
        <h6>Thématique</h6>
        <h4>Biodiversité</h4>
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
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped lang="scss">
  .wrapper {
    width: 400px;

    .container {
      .card_header {
        width: 160px;
        font-family: "Founders Grotesk Mono";
        text-transform: uppercase;
        font-size: 13px;
        padding: 6px 12px;
        position: relative;
        &::before {
          position: absolute;
          content: "";
          border: 3px solid #1c1c1c;
          background-color: #00d4ae;
          top: 0;
          bottom: 0;
          left: 5px;
          right: 0;
          z-index: -1;
          transform: perspective(1em) rotateX(3deg);
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
            background-image: url("../../../../public/storage/images/1.jpg");
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
