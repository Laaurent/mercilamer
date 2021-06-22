<template>
    <div class="wrapper">
        <div class="container">
            <div class="title">
                <h4>{{ title }}</h4>
            </div>

            <hr />
            <div class="data">
                <filterItemComponent
                    v-for="(item, index) in data"
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
    props: ["type", "title", "data"],
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
    border-bottom: 2px solid #1c1c1c;
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
        margin: 14px 24px;
        gap: 10px;
    }
}
</style>
