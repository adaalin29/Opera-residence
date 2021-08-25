@extends('parts.template') @section('content')
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($indexBanner as $banner)
            <div class="swiper-slide"><img src="{{ route('thumb', ['width:1920', $banner->image]) }}"
                    class="full-width"></div>
            @endforeach
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="banner-overflow">
        <div class="banner-text">
            <div class="banner-title">{{setting('index.titlu-banner')}}</div>
            <div class="banner-subtitle">{{setting('index.subtitlu-banner')}}</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="index-servicii">
        <div class="index-serviciu" data-aos="fade-left">
            <div class="index-serviciu-image"><img src="images/index-service1.svg" class="width"></div>
            <div class="index-service-title">{{setting('index.titlu-servicii1')}}</div>
            <div class="index-service-descriere">{{setting('index.descriere-servicii1')}}</div>
            <a href="despre" class="buton-container buton-container-mobile">
                <div class="buton-text">Afla mai multe</div>
                <div class="buton-top"></div>
                <div class="buton-bottom"></div>
            </a>
        </div>
        <div class="index-serviciu">
            <div class="index-serviciu-image"><img src="images/index-service2.svg" class="width"></div>
            <div class="index-service-title">{{setting('index.titlu-servicii2')}}</div>
            <div class="index-service-descriere">{{setting('index.descriere-servicii2')}}</div>
            <a href="facilitati" class="buton-container buton-container-mobile">
                <div class="buton-text">Afla mai multe</div>
                <div class="buton-top"></div>
                <div class="buton-bottom"></div>
            </a>
        </div>
        <div class="index-serviciu" data-aos="fade-right" data-aos-delay="150">
            <div class="index-serviciu-image"><img src="images/index-service3.svg" class="width"></div>
            <div class="index-service-title">{{setting('index.titlu-servicii3')}}</div>
            <div class="index-service-descriere">{{setting('index.descriere-servicii3')}}</div>
            <a href="contact" class="buton-container buton-container-mobile">
                <div class="buton-text">Afla mai multe</div>
                <div class="buton-top"></div>
                <div class="buton-bottom"></div>
            </a>
        </div>
    </div>
    <div class = "index-servicii-mobile">
        <a href = "despre" class = "servicii-mobile-element"  data-aos="fade-left">
            <div class = "index-service-mobile"><img src="images/index-service1.svg" class="width"></div>
            <div class="index-service-title">{{setting('index.titlu-servicii1')}}</div>
        </a>
        <a href = "facilitati" class = "servicii-mobile-element">
            <div class = "index-service-mobile"><img src="images/index-service2.svg" class="width"></div>
            <div class="index-service-title">{{setting('index.titlu-servicii2')}}</div>
        </a>
        <a href = "contact" class = "servicii-mobile-element"  data-aos="fade-right">
            <div class = "index-service-mobile"><img src="images/index-service3.svg" class="width"></div>
            <div class="index-service-title">{{setting('index.titlu-servicii3')}}</div>
        </a>
    </div>
</div>
<div class="index-galerie">
    <div class="index-galerie-item">
        <a class="fancybox-width" data-fancybox="gallery"
            href="{{ route('thumb', ['width:1000', setting('index.imagine1')]) }}">
            <img class="full-width" src="{{ route('thumb', ['width:800', setting('index.imagine1')]) }}">
        </a>
    </div>
    <div class="index-galerie-item">
        <a class="fancybox-width" data-fancybox="gallery"
            href="{{ route('thumb', ['width:1000', setting('index.imagine2')]) }}">
            <img class="full-width" src="{{ route('thumb', ['width:800', setting('index.imagine2')]) }}">
        </a>
    </div>
    <div class="index-galerie-item">
        <a class="fancybox-width" data-fancybox="gallery"
            href="{{ route('thumb', ['width:1000', setting('index.imagine3')]) }}">
            <img class="full-width" src="{{ route('thumb', ['width:800', setting('index.imagine3')]) }}">
        </a>
    </div>
    <div class="index-galerie-item">
        <a class="fancybox-width" data-fancybox="gallery"
            href="{{ route('thumb', ['width:1000', setting('index.imagine4')]) }}">
            <img class="full-width" src="{{ route('thumb', ['width:800', setting('index.imagine4')]) }}">
        </a>
    </div>
    <div class="index-galerie-item hide-small">
        <a class="fancybox-width" data-fancybox="gallery"
            href="{{ route('thumb', ['width:1000', setting('index.imagine5')]) }}">
            <img class="full-width" src="{{ route('thumb', ['width:800', setting('index.imagine5')]) }}">
        </a>
    </div>
    <div class="index-galerie-item hide-small">
        <a class="fancybox-width" data-fancybox="gallery"
            href="{{ route('thumb', ['width:1000', setting('index.image6')]) }}">
            <img class="full-width" src="{{ route('thumb', ['width:800', setting('index.image6')]) }}">
        </a>
    </div>
    <div class="index-galerie-item hide-normal">
        <a class="fancybox-width" data-fancybox="gallery"
            href="{{ route('thumb', ['width:1000', setting('index.image7')]) }}">
            <img class="full-width" src="{{ route('thumb', ['width:800', setting('index.image7')]) }}">
        </a>
    </div>
    <div class="index-galerie-item hide-normal">
        <a class="fancybox-width" data-fancybox="gallery"
            href="{{ route('thumb', ['width:1000', setting('index.image8')]) }}">
            <img class="full-width" src="{{ route('thumb', ['width:800', setting('index.image8')]) }}">
        </a>
    </div>
</div>
<div class="number-section mobile-hidden">
    <div class="container">
        <div class="number-container">
            <div class="number-element">
                <div class="number-image"><img src="images/etaje.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.etaje')}}' data-delay='1'
                    data-increment='1'>{{setting('index.etaje')}}</div>
                <div class="number-text">etaje</div>
            </div>
            <div class="number-element">
                <div class="number-image"><img src="images/vederi.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.vederi')}}' data-delay='1'
                    data-increment='1'>{{setting('index.vederi')}}</div>
                <div class="number-text">vederi la mare</div>
            </div>
            <div class="number-element">
                <div class="number-image"><img src="images/metri.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.metri')}}' data-delay='1'
                    data-increment='25'>{{setting('index.metri')}}</div>
                <div class="number-text">metri patrati</div>
            </div>
            <div class="number-element">
                <div class="number-image"><img src="images/parcare.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.locuri')}}' data-delay='1'
                    data-increment='1'>{{setting('index.locuri')}}</div>
                <div class="number-text">locuri de parcare</div>
            </div>
            <div class="number-element">
                <div class="number-image number-image-modificat"><img src="images/apartamente.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.apartamente')}}' data-delay='1'
                    data-increment='1'>{{setting('index.apartamente')}}</div>
                <div class="number-text">apartamente</div>
            </div>
        </div>
    </div>
</div>
<div class = "container desktop-hidden">
    <div class = "number-section-mobile">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="number-element">
                        <div class="number-image"><img src="images/etaje.svg" class="width"></div>
                        <div class="number numscroller" data-min='0' data-max='{{setting('index.etaje')}}' data-delay='1' data-increment='1'>{{setting('index.etaje')}}</div>
                        <div class="number-text">etaje</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="number-element">
                        <div class="number-image"><img src="images/vederi.svg" class="width"></div>
                        <div class="number numscroller" data-min='0' data-max='{{setting('index.vederi')}}' data-delay='1' data-increment='1'>{{setting('index.vederi')}}</div>
                        <div class="number-text">vederi la mare</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="number-element">
                        <div class="number-image"><img src="images/metri.svg" class="width"></div>
                        <div class="number numscroller" data-min='0' data-max='{{setting('index.metri')}}' data-delay='1' data-increment='25'>{{setting('index.metri')}}</div>
                        <div class="number-text">metri patrati</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="number-element">
                        <div class="number-image"><img src="images/parcare.svg" class="width"></div>
                        <div class="number numscroller" data-min='0' data-max='{{setting('index.locuri')}}' data-delay='1' data-increment='1'>{{setting('index.locuri')}}</div>
                        <div class="number-text">locuri de parcare</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="number-element">
                        <div class="number-image"><img src="images/apartamente.svg" class="width"></div>
                        <div class="number numscroller" data-min='0' data-max='{{setting('index.apartamente')}}' data-delay='1' data-increment='1'>{{setting('index.apartamente')}}</div>
                        <div class="number-text">apartamente</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination-number"></div>
    </div>
</div>
<div class="container">
    <div class="index-apartamente">
        <div class="tip-container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($tip as $tip_apartament)
                    <div class="swiper-slide">
                    <div class="tip-item-apartament" id = "tip-apartament-{{$tip_apartament['id']}}" id_categorie="{{$tip_apartament['id']}}">{{$tip_apartament->type}}</div>
                        <div class="linie"></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @foreach($apartamente as $apartament)
        <div class="index-apartament" item_category={{$apartament->categories['id']}}>
            <div class = "index-apartament-stanga">
                @if($apartament->scheme!=NULL)
                <div class="swiper-container" swiper_id="{{$apartament->id}}">
                    <div class="swiper-wrapper">
                        @foreach($apartament->scheme as $item)
                        <div class="swiper-slide">
                            <a class="fancybox-width apartament-image mobile-apartament-image" data-fancybox="gallery"
                            href="{{ route('thumb', ['width:1920', $item]) }}">
                            <img src="{{ route('thumb', ['width:800', $item]) }}" class="full-width">
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-pagination-{{$apartament->id}} swiper-pagination"></div>
                @endif
            </div>
            <div class="index-apartament-dreapta">
                <div class="index-apartament-dreapta-titlu">{{$apartament->name}}</div>
                <div class="index-apartament-dreapta-descriere">{{$apartament->description}}</div>
                <a href="apartament\{{$apartament->categories['id']}}" class="buton-container index-buton-con">
                    <div class="buton-text buton-text-programare">Afla mai multe</div>
                    <div class="buton-top buton-programare-culoare"></div>
                    <div class="buton-bottom buton-programare-culoare"></div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="index-contact">
    <div class="index-contact-left index-contact-real-left">
        <div class="index-contact-container">
            <div class="index-contact-container-title">Contacteaza-ne</div>
            <div class="index-contact-container-locatie">{!!setting('contact.adresa')!!}</div>
            <div class="address-container">
                <div class="address-text">Telefon: <a href="tel:{{setting('contact.telefon')}}"
                        class="address-href">{{setting('contact.telefon')}}</a></div>
                <div class="address-text">Fax: <a href="tel:{{setting('contact.fax')}}"
                        class="address-href">{{setting('contact.fax')}}</a></div>
                <div class="address-text">Email: <a href="mailto:{{setting('contact.email')}}"
                        class="address-href">{{setting('contact.email')}}</a></div>
            </div>
        </div>
    </div>
    <div class="index-contact-right">
        <div id="map-canvas" onclick="mapsSelector()" style="height:100%"></div>
    </div>
</div>
@endsection
@push('scripts')
<script>

    $slidere = 2;
    if(screen.width<=480)
        $slidere = 2;
    var swiper = new Swiper('.number-section-mobile .swiper-container', {
    slidesPerView: $slidere,
    spaceBetween: 30,
    pagination: {
    el: '.swiper-pagination-number',
    clickable: true,
    },
    });
    $( document ).ready(function() {
        $( "#tip-apartament-1" ).trigger( "click" );
    });
    $('.tip-item-apartament').click(function () {
        $('.tip-item-apartament').removeClass('tip-item-apartament-active');
        $('.linie').removeClass('linie-vizibil');
        $(this).toggleClass('tip-item-apartament-active');
        $(this).parent().find('.linie').addClass('linie-vizibil');
        var categorie_curenta = $(this).attr('id_categorie');
        var categorie_curenta_galerie = $(this).attr('id_categorie');
        console.log(categorie_curenta);
        console.log(categorie_curenta_galerie);
        $(".index-apartament").hide();
        $(".index-apartament[item_category=" + categorie_curenta + "]").fadeIn("slow");
        $(".index-apartament[poze_category=" + categorie_curenta_galerie + "]").fadeIn("slow");
    });

    var swiperBanner = new Swiper('.banner .swiper-container', {
        effect: 'fade',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 2500,
        },
    });
    $slidereTip = 4;
    if(screen.width<=1024){
        $slidereTip = 2;
    }
    if(screen.width<=480){
        $slidereTip = 1;
    }
    var swiperTip = new Swiper('.tip-container .swiper-container', {
        slidesPerView: $slidereTip,
        spaceBetween: 30,
    });

    $(".index-apartament .swiper-container").each(function (index, element) {
        var vthis = $(this);
        var swiper_id = $(this).attr('swiper_id');
        var swiper_pag_class = '.swiper-pagination-'+swiper_id;
        swiper_pag_class += '.swiper-pagination';
//         $(this).parent().find(".swiper-pagination").addClass("pagina" + index);
        var swiper = new Swiper(vthis, {
            pagination: {
                el: swiper_pag_class,
                clickable: true,
            },
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCmM1P-D5Zka0kPEbZSrsR90gpBlDxgm18"></script>
<script>
    function initialize() {

        // 				var geocoder;

        //         var address = "{{setting('site.adresa')}}";

        // # Get marker data

        var defaultMarkerLat = "{{setting('contact.latitude')}}";

        var defaultMarkerLng = "{{setting('contact.longitude')}}";

        var markerImg = '../images/marker.png';

        var markerTitle = "{{setting('site.title')}}";



        // # Show map

        var myLatlng = new google.maps.LatLng(defaultMarkerLat, defaultMarkerLng);

        var mapOptions = {

            zoom: 15,

            center: myLatlng,

            scrollwheel: false,

            mapTypeId: google.maps.MapTypeId.ROADMAP,

            disableDefaultUI: true

        }

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // # Show marker

        var marker = new google.maps.Marker({



            position: myLatlng,

            map: map,

            // 					icon:{markerImg} ,
            icon: {
                url: "images/marker.png",
                scaledSize: new google.maps.Size(48, 58)
            },

            title: markerTitle
        });

    }


    google.maps.event.addDomListener(window, 'load', initialize);;

    function mapsSelector() {
        if /* if we're on iOS, open in Apple Maps */ ((navigator.platform.indexOf("iPhone") != -1) ||
            (navigator.platform.indexOf("iPad") != -1) ||
            (navigator.platform.indexOf("iPod") != -1))
            window.open(
                "http://maps.apple.com/?ll={{setting('contact.contact-latitudine')}},{{setting('contact.contact-longitudine')}}"
            );
        //      window.open("https://maps.google.com/maps?daddr={{setting('contact.contact-latitudine')}},{{setting('contact.contact-longitudine')}}&amp;ll=");
        else /* else use Google */
            window.open(
                "https://maps.google.com/maps?daddr={{setting('contact.contact-latitudine')}},{{setting('contact.contact-longitudine')}}&amp;ll="
            );
    }
</script>
@endpush