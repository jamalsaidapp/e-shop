<template>
    <div>
        <!-- header-section-starts -->
        <div class="header">
            <div class="header-top-strip">
                <div class="container">
                    <div class="header-top-left">
                        <ul>
                            <li><a @click.prevent="$router.push('/login')" href="#"><i class="fas fa-user mr-2"></i>Se
                                Connecter</a></li>
                            <li><a @click.prevent="$router.push('/register')" href="#"><i class="fas fa-lock mr-2"></i>S'inscrire</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <h3>
                                    <span class="simpleCart_total"> jQuery0.00 </span>
                                    (<span class="simpleCart_quantity" id="simpleCart_quantity"> 0 </span>)
                                    <img alt="bag" src="Assets/images/bag.png">
                                </h3>
                            </a>
                            <p><a class="simpleCart_empty" href="#">Vider La Panier</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- header-section-ends -->
        <div class="banner-top">
            <div class="container">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse"
                                type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <h1><a><span>E</span> -Shop</a></h1>
                        </div>
                    </div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <router-link to="/index">Home</router-link>
                            </li>
                            <li>
                                <router-link to="/products">Products</router-link>
                            </li>
                            <li>
                                <router-link to="/boutique">Mon Boutique</router-link>
                            </li>
                            <li>
                                <router-link to="/contact">Contact</router-link>
                            </li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse-->
                </nav>
                <!--/.navbar-->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Navbar"
    }
</script>

<style scoped>
    .router-link-active {
        color: #816263 !important;
        border: 1px solid !important;
    }
</style>
