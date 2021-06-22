<template>
  <div class="wrapper">
    <div class="container">
      <p>JE DONNE</p>
      <table class="table">
        <tr v-for="(association, index) in associations" :key="index">
          <td>
            <div class="name">{{ association.name }}</div>
          </td>
          <td>
            <div class="url">
              <a class="link" target="_blank" :href="association.url">{{
                association.url
              }}</a>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  props: ["associations"],
};
</script>

<style lang="scss" scoped>
  $rose: #f4a0d2;

  .wrapper {
    .container {
      padding-top: 48px;
      p {
        margin-left: 67%;
        font-family: "Founders Grotesk Mono";
        text-transform: uppercase;
      }
      .table {
        border-collapse: collapse;
        width: 100%;
        border-bottom: 3px solid $rose;
        border-top: 3px solid $rose;
        tr {
          td {
            padding: 10px;

            &:first-child {
              border-right: 3px solid $rose;
              width: 66%;
            }
            div {
              border-bottom: 2px dashed rgba(0, 0, 0, 0.5);
            }
          }
        }
      }
    }
  }
</style>