<template>
  <div class="wrapper">
    <div class="container">
      <h2>Devenir partenaire</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos
        beatae voluptatem quidem quo iure, maxime cum voluptate delectus veniam
        quam magni quae rem aliquid obcaecati suscipit dolor, incidunt
        repudiandae vero.
      </p>
      <div class="input">
        <div class="first">
          <input type="text" name="nom" id="nom" placeholder="NOM" />
          <input type="text" name="prenom" id="prenom" placeholder="PRÉNOM" />
        </div>
        <input type="email" name="email" id="email" placeholder="EMAIL" />
        <textarea name="proposition" id="proposition" cols="30" rows="10">
Saisissez votre proposition de projet...</textarea
        >
        <div class="submit">
          <input type="submit" value="Envoyer" />
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
    width: 66%;
    .container {
      .input {
        textarea {
          border: 3px solid #f4a0d2;
          padding: 20px 20px;
          resize: none;
        }
        input:not([type="submit"]) {
          text-transform: uppercase;
          display: block;
          padding: 20px 20px;
          border: 3px solid #f4a0d2;
          border-bottom: none;
          &:first-child {
            border-bottom: none;
          }
        }
        div {
          display: flex;
          input:first-child {
            border-right: none;
          }
          * {
            flex: 1;
          }
        }
        .submit {
          margin: 24px auto;
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
        display: flex;
        flex-direction: column;
      }
    }
  }
</style>