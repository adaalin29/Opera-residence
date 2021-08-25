@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="container">
    <div class="pagini">
        <a href="/" class="pagini-link">Homepage |</a>
        <a href="despre" class="pagini-link">Despre proiect</a>
    </div>
    <div class="despre-titlu desktop-hidden">{{setting('despre.titlu')}}</div>
    <div class="despre-container">
        <div class="despre-left"  data-aos="fade-right">
            <div class="despre-titlu mobile-hidden">{{setting('despre.titlu')}}</div>
            <div class="despre-descriere">{!!setting('despre.descriere')!!}</div>
            <a href="galerie" class="buton-container despre-buton">
                <div class="buton-text buton-text-programare">Vezi galeria</div>
                <div class="buton-top buton-programare-culoare"></div>
                <div class="buton-bottom buton-programare-culoare"></div>
            </a>
        </div>
        <div class="despre-right"  data-aos="fade-left" data-aos-delay="250">
            <img src="{{ route('thumb', ['width:1920', setting('despre.imagine')]) }}" class="full-width">
        </div>
    </div>
</div>
<div class="number-section despre-number-section mobile-hidden">
    <div class="container">
        <div class="number-container">
            <div class="number-element">
                <div class="number-image"><img src="images/etaje.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.etaje')}}' data-delay='1' data-increment='1'>{{setting('index.etaje')}}</div>
                <div class="number-text">etaje</div>
            </div>
            <div class="number-element">
                <div class="number-image"><img src="images/vederi.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.vederi')}}' data-delay='1' data-increment='1'>{{setting('index.vederi')}}</div>
                <div class="number-text">vederi la mare</div>
            </div>
            <div class="number-element">
                <div class="number-image"><img src="images/metri.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.metri')}}' data-delay='1' data-increment='25'>{{setting('index.metri')}}</div>
                <div class="number-text">metri patrati</div>
            </div>
            <div class="number-element">
                <div class="number-image"><img src="images/parcare.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.locuri')}}' data-delay='1' data-increment='1'>{{setting('index.locuri')}}</div>
                <div class="number-text">locuri de parcare</div>
            </div>
            <div class="number-element">
                <div class="number-image"><img src="images/apartamente.svg" class="width"></div>
                <div class="number numscroller" data-min='0' data-max='{{setting('index.apartamente')}}' data-delay='1' data-increment='1'>{{setting('index.apartamente')}}</div>
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
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class = "container">
    <div class="facilitati-container">
        @php ($delay_contor = 0)
        @foreach($facilitati as $item)
        <div class="facilitati-item despre-facilitati-item" data-aos-delay="{{$delay_contor*200}}" data-aos-easing="ease-in-sine"  data-aos="fade-right">
            <div class="facilitati-imagine"><img src="{{ route('thumb', ['width:1000', $item->image]) }}" class="width"></div>
            <div class="facilitati-titlu">{{$item->title}}</div>
            <div class="facilitati-text">{{$item->text}}</div>
        </div>
        <?php $delay_contor++ ?>
        @endforeach
    </div>
</div>
<div class = "index-contact">
    <div class = "index-contact-left despre-contact-left">
        <div class = "index-contact-container">
            <div class = "index-contact-container-title">Contacteaza-ne</div>
            <div class = "index-contact-container-locatie">{!!setting('contact.adresa')!!}</div>
            <div class = "address-container">
            <div class = "address-text">Telefon: <a href = "tel:{{setting('contact.telefon')}}" class = "address-href">{{setting('contact.telefon')}}</a></div>
            <div class = "address-text">Fax: <a href = "tel:{{setting('contact.fax')}}" class = "address-href">{{setting('contact.fax')}}</a></div>
            <div class = "address-text">Email: <a href = "mailto:{{setting('contact.email')}}" class = "address-href">{{setting('contact.email')}}</a></div>
            </div>
        </div>
    </div>
    <div class = "index-contact-right">
        <div id="map-canvas" onclick="mapsSelector()" style="height:100%"></div>
    </div>
</div>
@endsection
@push('scripts')
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
<script>
    $slidere = 2;
    if(screen.width<=480)
        $slidere = 1;
    var swiper = new Swiper('.number-section-mobile .swiper-container', {
    slidesPerView: $slidere,
    spaceBetween: 30,
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
});
</script>
@endpush