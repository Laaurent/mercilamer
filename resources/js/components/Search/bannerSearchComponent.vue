<template>
    <div class="wrapper">
        <div class="container">
            <div class="search">
                <div class="form">
                    <!--  <img
                        class="searchIcon"
                        src="/images/icons/Search.svg"
                        alt=""
                    /> -->
                    <div class="input">
                        <input
                            class="searchBar"
                            type="search"
                            name="searchBar"
                            v-model="pattern"
                            placeholder="Que souhaitez-vous apprendre aujourd’hui?"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["search"],
    data() {
        return {
            pattern: this.search.replace(",", " ")
        };
    },
    mounted() {
        console.log(this.$route);
    },
    watch: {
        pattern: function() {
            this.$emit("pattern", this.pattern);
        }
    }
};
</script>

<style lang="scss" scoped>
.wrapper {
    margin: 80px 0;
    .container {
        .search {
            .form {
                display: flex;
                justify-content: center;
                .input {
                    &:before {
                        content: url("/images/icons/Search.svg");
                        position: absolute;
                        width: 30px;
                        height: 30px;
                        margin: 14px 16px;
                    }
                    .searchBar {
                        width: 804px;
                        padding: 14px 49px;
                        color: #1c1c1c;
                        font-family: "maax rounded";
                        font-size: 20px;
                        text-align: left;
                        border-radius: 40px;
                        border: 1px solid #1c1c1c;
                    }
                }
            }
        }
    }
}
</style>
