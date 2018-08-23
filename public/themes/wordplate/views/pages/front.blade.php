@extends('layouts.main')

@section('content')
@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
                
        
        <main role="main" class="front">
            <div class="mast">
                <img src="themes/wordplate/assets/images/portfinewinetop.png" alt="wine bottles" style="width: 100%;">
                <div class="text-center">
                    <div class="centered">
                        <h1 style="font-size:8vw;">Discover</h1>
                        <p style="font-size:1vw;">Port Fine Wine & Spirits offers the widest selection of wines, imported</p>
                        <p style="font-size:1vw;">& cold beers, cigars and liquor from Mexico Beach to Cape San Blas.</p>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="themes/wordplate/assets/images/phoneimage.png" alt="assorted liquors" style="width: 90%;">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <img src="themes/wordplate/assets/images/smollogo.png" alt="wheel logo">
                            <div class="text">
                                <h1>Cheers!</h1>
                                &nbsp;
                                <p>The Port Fine Wine and Spirits has what you need. We offer over 100 brands of ice cold beer, 400 wine varietals and the largest selection of spirits from Mexico beach to Cape San Blas. With over 10,000 bottles in stock, we are sure you will find something to sip on. And if you have special requests, contact us and we'll have your order waiting when you arrive on vacation.</p>
                                &nbsp;
                                <p>Conveniently located on Hwy 98 in Port St. Joe, Florida, across the street from Hungry Howies, you'll find fair prices and friendly service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <div><h1 class="mast"></h1></div>

        <div class="card-section">
            <div class="text-center">
                <h1>Services</h1>
            </div>
            <div class="container card-one vmiddle">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="card text-center" style="width: 18rem;">
                            <img class="card-img-top" src='/themes/wordplate/assets/images/specialrequests.png' alt="Taylor Bottls">
                            <img src='/themes/wordplate/assets/images/thebumptm.png' style="vbottom">
                            <div class="card-body">
                                <h5 class="card-title">Special Requests</h5>
                                <p class="card-text">We are devoted to finding unique wine, spirits and beer to offer our most discriminating customers. But if you don't find what you're looking for, our team is always ready to assist, from tracking down one rare bottle to helping stock your bar for your next event.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="card text-center" style="width: 18rem;">
                            <img class="card-img-top" src='/themes/wordplate/assets/images/specialevents.png' alt="Wine Bottles">
                            <div class="card-body">
                                <h5 class="card-title">Special Event</h5>
                                <p class="card-text">Need help selecting which wine, beer and spirits to serve at your special event? We'll make person- alized recommendations based on your taste, menu and size of your party. And with the largest inventory on The Forgotten Coast, there's a bottle to fit every budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="card text-center" style="width: 18rem;">
                            <img class="card-img-top" src='/themes/wordplate/assets/images/craftbeer.png' alt="Voodoo Ranger">
                            <div class="card-body">
                                <h5 class="card-title">Craft Beer</h5>
                                <p class="card-text">Looking for craft beer? Then you're in luck! Port Fine Wine & Spirits offers domestic and imported beer and cider, and even low & non-al- coholic beer. Come check out our selection of stouts, pilsners, lagers, Belgian white ales, IPA's, and so much more!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h1>Just a lil itty bitty section where the insta feed will go</h1>
        </div>


        <div class="row background-img vmiddle">
            <div class="col-12 text-center">
                <img src="themes/wordplate/assets/images/theportfinewine.png" class="img-fluid">
            </div>
        </div>

       

    @endwhile
@else
    @include('pages.404')
@endif
@endsection