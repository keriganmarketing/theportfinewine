@extends('layouts.main')

@section('content')
@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
                
        
        <main role="main" class="front">
            <div class="mast">
                <div class="centered text-center">
                    <h1>Discover</h1>
                    <p>Port Fine Wine & Spirits offers the widest selection of wines, imported & cold beers, cigars and liquor from Mexico Beach to Cape San Blas.</p>
                </div>
            </div>


            <div id="about" class="container cheers">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 col-lg-6 content-image">
                        <img src="themes/wordplate/assets/images/phoneimage.png" alt="assorted liquors">
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <div class="row-no-gutters">
                            <div class="text cheersText">
                                <h1><img src="themes/wordplate/assets/images/smollogo.png" alt="wheel logo" style="padding-right: 0.5rem;">Cheers!</h1>
                                <p>The Port Fine Wine and Spirits has what you need. We offer over 100 brands of ice cold beer, 400 wine varietals and the largest selection of spirits from Mexico beach to Cape San Blas. With over 10,000 bottles in stock, we are sure you will find something to sip on. And if you have special requests, contact us and we'll have your order waiting when you arrive on vacation.</p>
                                <p>Conveniently located on Hwy 98 in Port St. Joe, Florida, across the street from Hungry Howies, you'll find fair prices and friendly service.</p>
                                <social-icons :size="37" :margin=".25" class="d-flex social-icons" ></social-icons>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <div id="services" class="card-section">
            <div class="text-center services">
                <h1>Services</h1>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card text-center">
                            <div class="card-image-container" >
                                <img class="card-img-top" src="/themes/wordplate/assets/images/specialrequests.png" alt="Taylor Bottls">
                            </div>
                            <img class="bump" src="/themes/wordplate/assets/images/thebumptm.png" alt="Port Fine Wine & Spirits" >
                            <div class="card-body  big-text">
                                <h2 class="card-title">Special Requests</h2>
                                <p class="card-text">We are devoted to finding unique wine, spirits and beer to offer our most discriminating customers. But if you don't find what you're looking for, our team is always ready to assist, from tracking down one rare bottle to helping stock your bar for your next event.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card text-center" >
                            <div class="card-image-container" >
                                <img class="card-img-top" src="/themes/wordplate/assets/images/specialevents.png" alt="Wine Bottles">
                            </div>
                            <img class="bump" src="/themes/wordplate/assets/images/thebumptm.png" alt="Port Fine Wine & Spirits" >
                            <div class="card-body  big-text">
                                <h2 class="card-title">Special Event</h2>
                                <p class="card-text">Need help selecting which wine, beer and spirits to serve at your special event? We'll make personalized recommendations based on your taste, menu and size of your party. And with the largest inventory on The Forgotten Coast, there's a bottle to fit every budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card text-center">
                            <div class="card-image-container" >
                                <img class="card-img-top" src="/themes/wordplate/assets/images/craftbeer.png" alt="Voodoo Ranger">
                            </div>
                            <img class="bump" src="/themes/wordplate/assets/images/thebumptm.png" alt="Port Fine Wine & Spirits" >
                            <div class="card-body big-text">
                                <h2 class="card-title">Craft Beer</h2>
                                <p class="card-text">Looking for craft beer? Then you're in luck! Port Fine Wine & Spirits offers domestic and imported beer and cider, and even low & non-alcoholic beer. Come check out our selection of stouts, pilsners, lagers, Belgian white ales, IPA's, and so much more!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="gallery">
            <insta-feed :feed-data='{{ $photos }}'></insta-feed>
        </div>

        <div id="contact" class="background-img">
            <div class="building-photo d-md-none d-lg-flex">
                <img src="/themes/wordplate/assets/images/theportfinewine.png" alt="The Port Fine Wine & Spirits" class="img-fluid" >
            </div>
            <div class="container-fluid nopad">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="/themes/wordplate/assets/images/theportfinewine-tile.jpg" alt="The Port Fine Wine & Spirits" style="width:100%;" class="d-none d-md-block d-lg-none" >
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3461.79763546761!2d-85.30551958489032!3d29.812390181967395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88949665c2ade10b%3A0x18df6db9c701003b!2sThe+Port+Fine+Wine+%26+Spirits!5e0!3m2!1sen!2sus!4v1536606304754" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
       

    @endwhile
@else
    @include('pages.404')
@endif
@endsection