<template>
    <div class="wrapper">
        <div class="container">
            <h1>Que veux-tu apprendre aujourd'hui?</h1>
            <form>
                <input
                    class="searchBar"
                    type="search"
                    name="searchBar"
                    placeholder="Rechercher un mot, une vidéo, un sujet..."
                />
            </form>
            <div class="themes">
                <a class="link_theme" href="#">Climat</a>
                <a class="link_theme" href="#">Bio-diversité</a>
                <a class="link_theme" href="#">Pêche</a>
                <a class="link_theme" href="#">Pollution plastique</a>
                <a class="link_theme" href="#">Éco-responsabilité</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped lang="scss">
.wrapper {
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
        h1 {
            width: 674px;
        }
        form input.searchBar {
            width: 653px;
            padding: 17px;
            color: #1c1c1c;
            font-family: "maax rounded";
            font-size: 20px;
            text-align: center;
            border-radius: 40px;
            border: 2px solid #00d4ae;
        }
        .themes {
            display: flex;
            gap: 10px;
            justify-content: center;
            a {
                border: 1px solid #1c1c1c;
                border-radius: 40px;
                padding: 12px 40px;
            }
        }
    }
}
</style>
