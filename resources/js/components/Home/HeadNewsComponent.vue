<template>
    <div class="wrapper">
        <div class="container">
            <h2>Actualités à la une</h2>
            <div class="news_wrapper">
                <div class="news_header">
                    <div class="header_item isActive">
                        <button>Climat</button>
                    </div>
                    <div class="header_item">
                        <button>Pollution</button>
                    </div>
                </div>
                <div class="news_container">
                    <NewItemComponent />
                    <NewItemComponent />
                    <NewItemComponent />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NewItemComponent from "./NewItemComponent.vue";
export default {
    components: { NewItemComponent }
};
</script>

<style lang="scss" scoped>
.wrapper {
    margin: 57px 0;
    h3 {
        margin-bottom: 29px;
    }
    .news_wrapper {
        margin: 29px 0;
        .news_header {
            display: flex;

            margin: 0 3px;
            .header_item {
                padding: 6px 12px;
                position: relative;
                &.isActive {
                    z-index: 2;
                    button {
                        color: #fff;
                    }
                    &::before {
                        background-color: #276dff;
                    }
                }
                &::before {
                    position: absolute;
                    content: "";
                    border: 2px solid #1c1c1c;
                    background-color: #fff;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    z-index: -1;
                    transform: perspective(1em) rotateX(5deg);
                }
                button {
                    background: none;
                    border: none;
                    padding: 0;
                    font-family: "Founders Grotesk Mono";
                    text-transform: uppercase;
                    font-size: 13px;
                    &:hover {
                        cursor: pointer;
                    }
                }
            }
        }
        .news_container {
            border: 2px solid #1c1c1c;
            width: 100%;
            background-color: #e7e7e7;
            display: flex;
            justify-content: space-between;
        }
    }
}
</style>
