@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">    
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Collection Details
                </h1>    
                <p class="text-white link-nav"><a href="{{ route('index') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  Details</p>
            </div>                                            
        </div>
    </div>
</section>
<!-- End banner Area -->    

<!-- Start quote Area -->
<section class="quote-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 quote-left">
                <h1>
                    <span>Art</span> speaks where words are <br>
                    unable to explain, <br>
                    <span>preserving</span> history and <br>
                    inspiring future generations.
                </h1>
            </div>
            <div class="col-lg-6 quote-right">
                <p>
                    Museums are not just places of history, they are sanctuaries of knowledge, where every exhibit
                    tells a story. <br>
                    Each collection is a bridge to the past, offering a deeper understanding of culture, heritage, 
                    and the human journey.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End quote Area -->


<section class="collection-detail section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Title and Category -->
                <h1 class="mb-4" style="font-size: 36px; font-weight: bold; color: #333;">{{ $collection->name }}</h1>
                <p class="text-muted mb-4" style="font-size: 18px; color: #666;">Category: <span style="font-weight: bold;">{{ $collection->category->name }}</span></p>
                
                <!-- Image -->
                <img src="{{ Storage::url($collection->image) }}" alt="{{ $collection->name }}" 
                     style="width: 100%; height: auto; max-height: 500px; object-fit: contain; border-radius: 10px;">
                
                <!-- Description -->
                <p class="mt-4" style="font-size: 18px; color: #444; line-height: 1.6;">
                    <strong>Description:</strong> {{ $collection->description }}
                </p>

                <!-- Date Added -->
                <p style="font-size: 16px; color: #888; margin-top: 20px;"><strong>Added on:</strong> {{ $collection->created_at->format('jS F, Y') }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
