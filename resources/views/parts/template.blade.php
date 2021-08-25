<!DOCTYPE html>
<html>

<head>
  <base href="{{ URL::to('/') }}" />
  <title>{{setting('site.title')}}</title>
  <meta charset="utf-8" />
  <meta name="description" content="@yield('description')" />
  <meta name="keywords" content="@yield('keywords')" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- responsive use only -->
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53594859-28"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-53594859-28');
</script>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
  <link href="css/fancybox.min.css" rel="stylesheet" type="text/css" />
  <link href="css/aos.css" rel="stylesheet" type="text/css" />
  @stack('styles')
</head>

<body>
  <div class="overlay-cv">
    <div class="rezervare-apartament">
      <div class="close-rezervare-apartament"><img src="images/close-apartament.svg" class="width"></div>
      <form class="rezerva-apartament" action='{{ action("ContactController@send_message") }}' method="post">
        {{ csrf_field() }}
        <div class="rezervare-apartament-titlu">Cere oferta</div>
        <div class="rezervare-apartament-text">Completeaza datele tale de contact si un reprezentant de la Opera
          Residence o sa ia legatura cu tine pentru a stabili detaliile.</div>
        <input class="contact-form-element rezervare-apartament-element" type="text" id="fname" name="name" placeholder="Nume">
        <input class="contact-form-element rezervare-apartament-element" type="email" id="fname" name="email" placeholder="Email">
        <input class="contact-form-element rezervare-apartament-element" type="number" id="fname" name="phone" placeholder="Telefon">
        {{-- <input class="contact-form-element rezervare-apartament-element" type="text" id="fname" name="location" placeholder="Locatie"> --}}
        <textarea name="message" class = "rezervare-apartament-textarea" placeholder="Mesaj"></textarea>
        <div class="form-terms">
          <label class="checkbox">
            <input type="checkbox" id="accept-privacy" name="termeni" value="termeni">
            <span></span>
          </label>
          <div class="form-terms-text">Da, sunt de acord cu politica de confidentialitate.</div>
        </div>
        <button id = "send-apartament" class="buton-container-formular" type="submit">
          <div class="buton-text buton-text-programare">Trimite</div>
          <div class="buton-top buton-programare-culoare"></div>
          <div class="buton-bottom buton-programare-culoare"></div>
      </button>
      </form>
    </div>
  </div>

  <div id="page">
    <div class="menu">
      <div class="container" style="height:100%;">
        <div class="menu-header">
          <div class="close"><img src="images/x.svg" class="width"></div>
          <a href="/" class="header-logo menu-logo"><img src="images/menu-logo.svg" class="width"></a>
          <div class="support"></div>
        </div>
        <div class="align-center">
          <div class="menu-container">
            <a href="despre " class="menu-item @if(Request::path() == 'despre') menu-item-selected @endif">Despre</a>
            <a href="galerie" class="menu-item @if(Request::path() == 'galerie') menu-item-selected @endif">Galerie</a>
            <a href="tipuri" class="menu-item @if(Request::path() == 'tipuri') menu-item-selected @endif">Tipuri de
              locuinte</a>
            <a href="facilitati "
              class="menu-item @if(Request::path() == 'facilitati') menu-item-selected @endif">Facilitati</a>
            <a href="contact" class="menu-item @if(Request::path() == 'contact') menu-item-selected @endif">Contact</a>
          </div>
        </div>
      </div>
    </div>
    <form class="rezervare" action='{{ action("ContactController@send_rezervare") }}' method="post">
      {{ csrf_field() }}
      <div class="close-rezervare"><img src="images/close-rezervare.svg" class="width"></div>
      <div class="rezervare-container">
        <div class="plus-top"><img src="images/+.svg" class="width"></div>
        <div class="plus-bottom"><img src="images/+.svg" class="width"></div>
        <div class="rezervare-continut">
          <div class="rezervare-titlu">Sunt interesat.</div>
          <div class="rezervare-descriere">{{setting('site.rezervare')}}</div>
          <div class="rezervare-inputs">
            <input class="contact-form-element-rezervare" type="text" id="fname" name="name" placeholder="Nume">
            <input class="contact-form-element-rezervare" type="email" id="fname" name="email"
              placeholder="Adresa email">
            <input class="contact-form-element-rezervare" type="number" id="fname" name="phone" placeholder="Telefon">
            <select class = "rezervare-camere" name="camere">
              <option value="Studio">Studio</option>
              <option value="Studio dublu">Studio dublu</option>
              <option value="2 camere">2 camere</option>
              <option value="3 camere">3 camere</option>
            </select>
            <textarea class="rezervare-textarea" name="message" placeholder="Mesaj"></textarea>
            <div class="form-terms form-terms-rezervare">
              <label class="checkbox">
                <input type="checkbox" id="accept-privacy" name="termeni" value="termeni">
                <span></span>
              </label>
              <div class="form-terms-text-rezervare">Da, sunt de acord cu politica de confidentialitate.</div>
            </div>
            <button class="buton-container-formular buton-container-formular-rezervare" type="submit">
              <div class="buton-text buton-text-programare">Trimite</div>
              <div class="buton-top buton-programare-culoare"></div>
              <div class="buton-bottom buton-programare-culoare"></div>
            </button>
          </div>
        </div>
      </div>
    </form>
    @include('parts.header')
    <div id="wrapper" class="slide-right">



      <main id="content">
        @yield('content')
        <button class="scroll-up"> <img src="images/sagetica.svg"> </button>
      </main>
      @include('parts.footer')
    </div>
  </div>
  {{-- <button class="scroll-up"> <img src="images/arrow.png"> </button> --}}

  <!--[if lt IE 9]> <script src="js/html5shiv.js"></script> <![endif]-->
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/common.js" type="text/javascript"></script>
  <script src="js/swiper.min.js" type="text/javascript"></script>
  <script src="js/numscroll.js" type="text/javascript"></script>
  <script src="js/fancybox.min.js" type="text/javascript"></script>
  <script src="js/notify.js" type="text/javascript"></script>
  <script src="js/aos.js" type="text/javascript"></script>
  @stack('scripts')
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      $.ajaxSetup({

        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
      });
      var $formContact = $('.rezervare');
      $('.buton-container-formular-rezervare').on('click', function (event) {
        event.preventDefault();
        $.ajax({
          method: 'POST',
          url: '{{ action("ContactController@send_rezervare") }}',
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
              gap: 2
            });
          }
        });
        return;
      });

    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      $.ajaxSetup({

        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
      });
      var $formContact = $('.rezerva-apartament');
      $('#send-apartament').on('click', function (event) {
        event.preventDefault();
        $.ajax({
          method: 'POST',
          url: '{{ action("ContactController@send_apartament") }}',
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
              gap: 2
            });
          }
        });
        return;
      });

    });
  </script>
</body>

</html>