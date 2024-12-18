@extends('layouts.app')

@section('content')


<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8">
               <h6 class="text-white">{{ $currentDate }}</h6>
                <h1 class="text-white">
                    Exhibition on Modern Era
                </h1>
                <p class="pt-20 pb-20 text-white">
                   Explore the collection of artifacts and artworks from the modern era that reveal history, culture, and the evolution of society. Discover inspiring works that enrich your knowledge of art and civilization's progress.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start quote Area -->
<section class="quote-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 quote-left">
                <h1>
                    <span>Art</span> unlocks the secrets of <br>
                    history, <span>preserving</span> memories <br>
                    and <span>inspiring</span> future generations.
                </h1>
            </div>
            <div class="col-lg-6 quote-right">
                <p>
                    Museums are not just places of history, they are sanctuaries of knowledge, where every exhibit
                    tells a story. <br>
                    Each artifact is a window into the past, providing insight, wonder, and a deeper understanding
                    of humanity’s journey.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End quote Area -->

<!-- Start exibition Area -->
<section class="exibition-area section-gap" id="exhibitions">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Current Exhibits at the Museum</h1>
                    <p>Explore our diverse collection, showcasing history, art, and culture.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-exibition-carusel owl-carousel">
                @foreach ($collections as $collection)
                    <div class="single-exibition item card p-3 shadow-sm">
                        <!-- Pastikan ini sesuai dengan Owl Carousel -->
                        <img src="{{ Storage::url($collection->image) }}" alt="Exhibition Image"
                            style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                        <ul class="tags mt-3">
                            <li><a href="#">{{ $collection->category->name }}</a></li>
                        </ul>
                        <a href="{{ route('collection.show', $collection->id) }}">
                            <h4 class="mt-2">{{ $collection->name }}</h4>
                        </a>                        
                        <p class="text-muted">{{ $collection->description }}</p>
                        <h6 class="date text-secondary">{{ $collection->created_at->format('jS F, Y') }}</h6>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End exibition Area -->

<!-- Start upcoming-event Area -->
<section class="upcoming-event-area section-gap" id="programmers">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Meet Our Talented Programmers</h1>
                    <p>Passionate individuals who contribute to the world of technology and innovation.</p>
                </div>
            </div>
        </div>
        <div class="row">
    @foreach($programmers as $programmer)
        <div class="{{ $loop->iteration % 2 == 0 ? 'event-right' : 'event-left' }}">
            <div class="single-events">
                <img class="programmer-img" src="{{ Storage::url($programmer->image) }}" alt="{{ $programmer->name }}">
                <div class="programmer-info">
                    <h4>{{ $programmer->name }}</h4>
                    <h6><span>{{ $programmer->role }}</span> - NIM: {{ $programmer->nim }}</h6>
                    <p>Email: <a href="mailto:{{ $programmer->email }}">{{ $programmer->email }}</a></p>
                   
                </div>
            </div>
        </div>
    @endforeach
</div>


    </div>
</section>


<!-- End upcoming-event Area -->

@endsection
