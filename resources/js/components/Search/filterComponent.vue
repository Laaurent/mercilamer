<template>
    <div class="wrapper">
        <div class="container">
            <div class="title">
                <h4>{{ title }}</h4>
            </div>

            <hr />
            <div class="data">
                <filterItemComponent
                    v-for="(item, index) in filteredData"
                    :key="index"
                    :item="item"
                    @itemCheck="getElement($event)"
                />
            </div>
        </div>
    </div>
</template>

<script>
import filterItemComponent from "./filterItemComponent.vue";
export default {
    props: ["theme", "type", "title", "data"],
    components: { filterItemComponent },
    data() {
        return {
            checked: false,
            tmp: null,
            request: []
        };
    },
    watch: {
        path: function() {
            if (this.path == `${this.type}=`) this.$emit("path", null);
            else this.$emit("path", this.path);
        }
    },
    computed: {
        path: function() {
            let path = `${this.type}=`;
            this.request.forEach(element => {
                path += element + ",";
            });
            return path;
        },
        filteredData: function() {
            let data = this.data;
            if (this.theme) {
                let theme = this.theme;

                data.forEach(element => {
                    if (element.id == theme) {
                        console.log("ok", theme, element.id);
                        element.check = true;
                    } else {
                        element.check = false;
                    }
                });
            }
            return data;
        }
    },
    methods: {
        getElement: function(event) {
            if (event.checked) {
                this.request.push(event.id);
            } else {
                const index = this.request.indexOf(event.id);
                if (index > -1) {
                    this.request.splice(index, 1);
                }
            }
        },
        check: function(item) {
            this.checked = !this.checked;
            this.$emit("filter", { id: item.id, checked: this.checked });
        }
    }
};
</script>

<style lang="scss" scoped>
.container {
    width: 100%;
    border-bottom: 1px solid #1c1c1c;
    .title {
        padding: 14px 24px;
        h4 {
            margin: 0;
            font-family: "Founders Grotesk Mono";
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 18px;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }
    }
    hr {
        margin: 0;
        width: 100%;
        height: 0px;
        border: none;
        border-top: 1px dotted #1c1c1c;
    }
    .data {
        /* width: 100%;
            width: 100%; */
        display: flex;
        flex-wrap: wrap;
        margin: 14px 24px 28px;
        gap: 10px;
    }
}
</style>
