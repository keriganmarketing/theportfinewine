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
                <div class="row">
                    <div class="imageContainer relative"></div>
                    <div class="col-md-6 cheersText absolute">
                        <img src="themes/wordplate/assets/images/phoneimage.png" alt="assorted liquors" style="margin: 2rem; width: 90%;">
                    </div>
                    <div class="col-md-6">
                        <div class="row-no-gutters">
                            <div class="text cheersText" style="vertical-align: top;">
                                <h1><img src="themes/wordplate/assets/images/smollogo.png" alt="wheel logo" style="padding-right: 0.5rem;">Cheers!</h1>
                                <p>The Port Fine Wine and Spirits has what you need. We offer over 100 brands of ice cold beer, 400 wine varietals and the largest selection of spirits from Mexico beach to Cape San Blas. With over 10,000 bottles in stock, we are sure you will find something to sip on. And if you have special requests, contact us and we'll have your order waiting when you arrive on vacation.</p>
                                <p style="padding-top: 2rem;">Conveniently located on Hwy 98 in Port St. Joe, Florida, across the street from Hungry Howies, you'll find fair prices and friendly service.</p>
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
                            <div class="card-body  big-text">
                                <h2 class="card-title">Craft Beer</h2>
                                <p class="card-text">Looking for craft beer? Then you're in luck! Port Fine Wine & Spirits offers domestic and imported beer and cider, and even low & non-alcoholic beer. Come check out our selection of stouts, pilsners, lagers, Belgian white ales, IPA's, and so much more!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="gallery" class="container">
            <h1>Just a lil itty bitty section where the insta feed will go</h1>
        </div>


        <div id="contact" class="row background-img vmiddle">
            <div class="col-12 text-center">
                <img src="themes/wordplate/assets/images/theportfinewine.png" class="img-fluid">
            </div>
        </div>


       

    @endwhile
@else
    @include('pages.404')
@endif
@endsection