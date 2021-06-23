<template>
    <footer>
        <div class="wrapper">
            <div class="container">
                <h3>Cap sur l'océan</h3>
                <div class="items">
                    <div class="left">
                        <div class="top">
                            <div class="contact">
                                <img src="/images/icons/email.svg" alt="" />
                                <p>CONTACT@CAPSURLOCEAN.COM</p>
                            </div>
                            <div class="number">
                                <img src="/images/icons/phone.svg" alt="" />
                                <p>01 43 50 82 82</p>
                            </div>
                            <div class="address">
                                <img src="/images/icons/place.svg" alt="" />
                                <p>
                                    cap sur l'océan <br />3 rue bellini
                                    <br />92800 Puteaux
                                </p>
                            </div>
                        </div>
                        <div class="bot">
                            <div>
                                <a href="#">
                                    m’INSCRIRE à la newsletter
                                </a>
                                <img src="/images/icons/arrow.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="col">
                            <div class="row rowhead">COMMENT ça marche?</div>
                            <div class="row ">Enseignant</div>
                            <div class="row ">Elève</div>
                            <div class="row ">Curieux</div>
                        </div>
                        <div class="col">
                            <div class="row rowhead">Agir ensemble</div>
                            <div class="row ">Dons</div>
                            <div class="row ">Devenir partenaire</div>
                            <div class="row ">Proposer un projet</div>
                        </div>
                        <div class="col">
                            <div class="row rowhead">Recherche</div>
                            <div class="row ">Climat biodiversité</div>
                            <div class="row ">Pêche</div>
                            <div class="row ">Pollution plastique</div>
                            <div class="row ">Eco-responsabilité</div>
                            <div class="row ">Climat</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="left">
                    <div class="item">
                        <img src="/images/icons/insta.svg" alt="" />
                    </div>
                    <div class="item">
                        <img src="/images/icons/linkedin.svg" alt="" />
                    </div>
                    <div class="item">
                        <img src="/images/icons/tiktok.svg" alt="" />
                    </div>
                </div>
                <div class="right">
                    <div class="item">Confidentialité</div>
                    <div class="item">Mentions légales</div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {};
</script>

<style scoped lang="scss">
.wrapper {
    margin-top: 110px;
    border-top: 3px solid #1c1c1c;
    font-family: Founders Grotesk Mono;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    /* or 125% */

    text-transform: uppercase;

    .container {
        /*  width: 100%; */
        padding: 0 80px;
        .items {
            display: flex;
            justify-content: space-between;
            .left {
                text-transform: uppercase;
                height: 325px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                .top {
                    div {
                    }
                }
                div {
                    div {
                        padding: 7px 37px;
                        border: 2px solid #1c1c1c;
                        border-top: none;
                        display: flex;
                        align-items: center;
                        &:first-child {
                            border: 2px solid #1c1c1c;
                        }
                        img {
                            margin-right: 46px;
                        }
                    }
                }
                .bot {
                    div {
                        border: 2px solid #1c1c1c;
                        justify-content: space-between;
                        img {
                            margin-right: 0;
                        }
                    }
                }
            }
            .right {
                display: flex;
                .col {
                    width: 270px;
                    .row {
                        padding: 16px 20px;
                        border: 2px solid #1c1c1c;
                        border-top: none;
                        border-bottom: 1px dashed #1c1c1c;
                        border-right: none;
                        display: flex;
                        align-items: center;
                        &:first-child {
                            border-top: 2px solid #1c1c1c;
                            border-bottom: 2px solid #1c1c1c;
                        }
                        &:last-child {
                            border-bottom: 2px solid #1c1c1c;
                        }
                    }
                    .rowhead {
                        text-transform: uppercase;
                    }
                    &:last-child {
                        .row {
                            border-right: 2px solid #1c1c1c;
                        }
                    }
                }
            }
        }
    }
    .footer {
        border-top: 1px dashed #1c1c1c;
        margin-top: 52px;
        padding: 0 80px;
        display: flex;
        justify-content: space-between;
        div {
            margin: 12px 0;
            display: flex;
            gap: 39px;
        }
    }
}
</style>
