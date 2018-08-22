@extends('layouts.main')

@section('content')
@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
                
        
        <main role="main" class="front">
            <div class="mast">
                <img src="themes/wordplate/assets/images/portfinewinetop.png" alt="wine bottles" style="width: 100%;">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 text-black box-container">
                        <img src="themes/wordplate/assets/images/phoneimage.png" alt="assorted liquors" style="width: 90%;">
                    </div>
                    <div class="col-md-6 col-lg-4 text-black box-container">
                        <h1>Cheers!</h1>
                            <p>This is where the content will go.</p>
                    </div>
                </div>
            </div>
        </main>

        <div class="feature-box-section">
            <div class="box-container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 text-white box-container">
                        <div class="feature-box feat-one">
                            <h3>{{ $featureBox1['title'] }}</h3>
                            <p>{{ $featureBox1['text'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 text-white box-container">
                        <div class="feature-box feat-two">
                            <h3>{{ $featureBox2['title'] }}</h3>
                            <p>{{ $featureBox2['text'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 text-white box-container">
                        <div class="feature-box feat-two">
                            <h3>{{ $featureBox2['title'] }}</h3>
                            <p>{{ $featureBox2['text'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endwhile
@else
    @include('pages.404')
@endif
@endsection