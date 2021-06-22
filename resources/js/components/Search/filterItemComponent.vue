<template>
    <div class="wrapper">
        <div class="container">
            <input
                class="check"
                type="checkbox"
                :id="item.name"
                v-model="checked"
            />
            <label
                :for="item.name"
                :class="{
                    climatBorderColor: item.name == 'Climat',
                    'bioBorderColor ': item.name == 'Bio-diversité',
                    'pecheBorderColor ': item.name == 'Pêche',
                    'pollutionBorderColor ': item.name == 'Pollution plastique',
                    'ecoBorderColor ': item.name == 'Éco-responsabilité',
                    climatBGColor: item.name == 'Climat' && checked,
                    'bioBGColor ': item.name == 'Bio-diversité' && checked,
                    'pecheBGColor ': item.name == 'Pêche' && checked,
                    'pollutionBGColor ':
                        item.name == 'Pollution plastique' && checked,
                    'ecoBGColor ': item.name == 'Éco-responsabilité' && checked
                }"
                >{{ item.name }}</label
            >
        </div>
    </div>
</template>

<script>
export default {
    props: ["item"],
    data() {
        return {
            checked: false
        };
    },
    watch: {
        checked: function() {
            this.$emit("itemCheck", {
                id: this.item.id,
                checked: this.checked
            });
        }
    }
};
</script>

<style lang="scss" scoped>
.wrapper {
    margin: 4px 0px;
    .container {
        input[type="checkbox"].check {
            display: none;
        }
        input[type="checkbox"].check + label {
            background-color: #fff;
            font-size: 14px;
            padding: 5px 15px;
            border: 2px solid #1c1c1c;
            border-radius: 30px;
            cursor: pointer;
        }
        input[type="checkbox"].check:checked + label {
            transition: background-color 150ms linear;
            background-color: #1c1c1c;
            color: #fff;
        }
    }
}
</style>
