<template>
  <div class="wrapper">
    <div class="container">
      <h2>Devenir partenaire</h2>
      <div class="partenaire_wrapper">
        <div class="left">
          <p class="form_title">1/ CHOISISSEZ VOTRE PROFIL</p>

          <form action="">
            <div>
              <input
                type="radio"
                id="Association"
                name="profil"
                value="Association"
                checked
              />
              <label for="Association">Association</label>
            </div>

            <div>
              <input
                type="radio"
                id="dewey"
                name="profil"
                value="Porteur de projet"
              />
              <label for="dewey">Porteur de projet</label>
            </div>
          </form>
          <p class="form_title">2/ CHOISISSEZ L’ÉTENDU DE VOTRE PROJET</p>
          <form action="">
            <div>
              <input
                type="radio"
                id="Local"
                name="projet"
                value="Local"
                checked
              />
              <label for="Local">Local</label>
            </div>

            <div>
              <input
                type="radio"
                id="National"
                name="projet"
                value="National"
              />
              <label for="National">National</label>
            </div>
            <div>
              <input
                type="radio"
                id="International"
                name="projet"
                value="International"
              />
              <label for="International">International</label>
            </div>
          </form>
        </div>
        <div class="right">
          <p class="form_title">3/ VOS INFORMATIONS</p>
          <p class="subtitle">*Champs obligatoires</p>
          <form class="form" action="">
            <input
              type="email"
              name="email"
              id=""
              placeholder="ADRESSE MAIL*"
            />
            <input type="file" name="" id="" />
            <div class="submit">
              <input type="submit" value="Envoyer" />
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
  .wrapper {
    margin-top: 100px;
    .container {
      .partenaire_wrapper {
        display: flex;
        div {
          width: 50%;
        }
        .left {
          form {
            display: flex;
            flex-direction: column;
            gap: 20px;
          }
        }
        .right {
          .form {
            margin: 47px 0;
            input:not([type="submit"]) {
              text-transform: uppercase;
              display: block;
              width: 100%;
              padding: 20px 20px;
              border: 3px solid #f4a0d2;
              &:first-child {
                border-bottom: none;
              }
            }
            .submit {
              margin: 24px;
              width: 100%;
              display: flex;
              justify-content: center;
              input[type="submit"] {
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
        }
      }
    }
  }
</style>