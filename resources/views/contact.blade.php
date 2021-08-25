@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="contac-container">
    <div class="contac-left">
        <form class="contact-left-container" action='{{ action("ContactController@send_message") }}' method="post">
          {{ csrf_field() }}
            <div class="contact-title">Contact</div>
            <input class="contact-form-element" type="text" id="fname" name="name" placeholder="Nume">
            <input class="contact-form-element" type="email" id="fname" name="email" placeholder="Adresa email">
            <input class="contact-form-element" type="number" id="fname" name="phone" placeholder="Telefon">
            <textarea name="message" placeholder="Mesaj"></textarea>
            <div class="form-terms">
                <label class="checkbox">
                    <input type="checkbox" id="accept-privacy" name="termeni" value="termeni">
                    <span></span>
                </label>
                <div class="form-terms-text">Da, sunt de acord cu politica de confidentialitate.</div>
            </div>
            <button class="buton-container-formular" type="submit">
                <div class="buton-text buton-text-programare">Trimite</div>
                <div class="buton-top buton-programare-culoare"></div>
                <div class="buton-bottom buton-programare-culoare"></div>
            </button>
        </form>
    </div>
    <div class="index-contact-left">
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
</div>
<div class = "form-map">
    <div id="map-canvas" onclick="mapsSelector()" style="height:100%"></div>
</div>
<div class = "index-contact modificare">
  <div class = "index-contact-left form-index-contact-left">
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
    document.addEventListener("DOMContentLoaded", function () {
   $.ajaxSetup({

     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
     }
   });
   var $formContact = $('.contact-left-container');
   $('.buton-container-formular').on('click', function (event) {
     event.preventDefault();
     $.ajax({
       method: 'POST',
       url: '{{ action("ContactController@send_message") }}',
       data: $formContact.serializeArray(),
       context: this,
       async: true,
       cache: false,
       dataType: 'json'
     }).done(function (res) {
       console.log(res);
       if (res.success == true) {
         $.notify(res.successMessage, "success");
         setTimeout(function () {
           window.location.reload();
         
         }, 4000);
       } else {
         var eroare = res.error;
       for (var i = 0; i < eroare.length; i++) {
         eroare[i] = eroare[i] + "\n";
       }
         $.notify(res.error, {
           type: "error",
           breakNewLines: true,
           gap:2
         });
       }
     });
     return;
   });

 });
</script>
@endpush