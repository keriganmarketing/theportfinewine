<header class="top">
    <div role="navigation" class="topnav navbar navbar-expand-lg" >
        <div class="container">
            <div class="row no-gutters justify-content-between">
                <div class="col-lg-6 d-xl-none">
                    <div class="mini-navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item text-center text-lg-left" >{{ get_field('address', 'option') }}</li>
                            <li class="nav-item text-center text-lg-left" ><a href="tel:{{ get_field('phone', 'option') }}">{{ get_field('phone', 'option') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-xl-none">
                    <div class="mini-navigation">
                        <p class="text-center text-lg-right" >{{ get_field('hours', 'option') }}</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters justify-content-between">
                <div class="col-md-4 header-left">
                    <div class="mini-navigation d-none d-xl-block">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item" >{{ get_field('address', 'option') }}</li>
                            <li class="nav-item" ><a href="tel:{{ get_field('phone', 'option') }}">{{ get_field('phone', 'option') }}</a></li>
                        </ul>
                    </div>

                    <div class="main-navigation collapse navbar-collapse flex-grow-1">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item" ><a href="#about">About</a></li>
                            <li class="nav-item" ><a href="#services">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 header-center">
                    <div class="text-center" >
                        <a class="logo" href="/">
                            <img src="/themes/wordplate/assets/images/theport-logo.png" alt="The Port Fine Wine & Spirits" class="img-fluid" >
                        </a>
                    </div>
                </div>
                <div class="col-md-4 header-right">
                    
                    <div class="mini-navigation d-none d-xl-block">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ml-auto" >{{ get_field('hours', 'option') }}</li>
                        </ul>
                    </div>

                    <div class="main-navigation collapse navbar-collapse flex-grow-1">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item" ><a href="#gallery">Gallery</a></li>
                            <li class="nav-item" ><a href="#contact">Location & Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div v-if="mobileMenuOpen" class="mobile-menu" ref="mobileMenuContainer" :class="{ 'open': this.mobileMenuOpen }" >
    <mobile-menu :mobile-nav="{{ website_menu('mobile-navigation') }}" class="navbar-nav m-auto" ></mobile-menu>
</div>