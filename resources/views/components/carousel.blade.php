<div class="carousel" data-delay="{{$delay}}">
    <div class="carousel-container">
        <img src="storage/placeholder/voiture1.jpg">
        <img src="storage/placeholder/voiture2.jpg">
        <img src="storage/placeholder/voiture3.jpg">
        <img src="storage/placeholder/voiture4.jpg">
        <img src="storage/placeholder/voiture5.jpg">
    </div>

    <div class="pills"></div>

    <div class="control">
        <div class="left">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="right">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
    {{--CAROUSEL SCRIPT--}}
    @php register_script('/js/carousel.js') @endphp
</div>


