<template>
  <div class="wrapper">
    <div class="container">
      <h1>Agir ensemble?</h1>
      <img class="certified" src="/images/icons/Education.svg" alt="" />
      <h2 class="title">Les Dons</h2>
      <div class="don_container">
        <div class="don_item">
          <form action="">
            <h5>CAP SUR L'OCEAN</h5>
            <div class="border"></div>
            <select name="" id="">
              <option value="Spontané">Spontané</option>
              <option value="Spontané">Récurant</option>
            </select>
            <div class="amount">
              <input
                class="amount_input"
                type="number"
                name=""
                id=""
                placeholder="Montant €"
              />
            </div>
            <div class="submit_div">
              <input class="submit" type="submit" value="Je donne" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
  $rose: #f4a0d2;

  .wrapper {
    .container {
      h1 {
        color: $rose;
        margin: 52px auto 120px;
      }
      .don_item {
        height: 160px;
        h5 {
          margin: 14px 0;
        }
        border: 3px solid $rose;
        width: 500px;
        padding: 20px;
        form {
          select {
            margin: 14px 0;
            background-color: #fff;
            border: 3px solid #f4a0d2;
            border-radius: 50px;
            padding: 7px 27px;
          }
          .amount {
            .amount_input {
              border: none;
              border-bottom: 2px dashed rgba(0, 0, 0, 0.5);
            }
          }
          .submit_div {
            display: flex;
            justify-content: flex-end;
            position: relative;
            float: right;
            .submit {
              padding: 7px 27px;
              background-color: #fff;
              border: 3px solid #f4a0d2;
              border-radius: 50px;
              text-align: center;
              margin: 0 auto;
              &:hover {
                background-color: #f4a0d2;
                color: #fff;
                cursor: pointer;
              }
            }
          }
        }
        div.border {
          height: 1px;
          width: 100%;
          border-bottom: 2px dashed rgba(0, 0, 0, 0.5);
        }
      }
    }
  }
</style>