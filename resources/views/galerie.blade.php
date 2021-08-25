@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="container">
    <div class="pagini">
        <a href="/" class="pagini-link">Homepage |</a>
        <a href="galerie" class="pagini-link">Galerie</a>
    </div>
    <div class="pages-title">Galerie</div>
    <div class="galery-categories">
        @foreach($categorii as $category)
        <div class="category-item" id_categorie="{{$category['id']}}">{{$category->name}}</div>
        @endforeach
    </div>
    <div class="gallery-categories-mobile desktop-hidden">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($categorii as $category)
                <div class="swiper-slide">
                    <div class="category-item" id_categorie="{{$category['id']}}">{{$category->name}}</div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
        </div>
        <div class="swiper-pagination"></div>
    </div>
    @if($gallery->count() > 0)
    <div class="gallery-container">
        @php ($delay_contor = 0)
        @foreach($gallery as $portofoliu)
        @foreach($portofoliu['images'] as $poza)
        <div class="poza-galerie" item_category={{$portofoliu->id}}>
            <a class="fancybox-width" data-fancybox="gallery" href="{{ route('thumb', ['width:1000', $poza]) }}">
                <img class="full-width" src="{{ route('thumb', ['width:1000', $poza]) }}">
            </a>
        </div>
        <?php $delay_contor++ ?>
        @endforeach
        @endforeach
    </div>
    @endif
</div>
<div class="programeaza-container">
    <div class="programeaza-overlay">
        <div class="programeaza-interior">
            <div class="programeaza-titlu">Programeaza o intalnire</div>
            <a href="tel:{{setting('contact.telefon')}}"
                class="address-href adress-href-center">{{setting('contact.telefon')}}</a>
            <a href="mailto:{{setting('contact.email')}}"
                class="address-href adress-href-center">{{setting('contact.email')}}</a>
            <a href="contact" class="buton-container buton-container-programare">
                <div class="buton-text buton-text-programare">Programeaza-ma</div>
                <div class="buton-top buton-programare-culoare"></div>
                <div class="buton-bottom buton-programare-culoare"></div>
            </a>

        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(".fancybox-thumb").fancybox({
        prevEffect: 'none',
        nextEffect: 'none',
        helpers: {
            title: {
                type: 'outside'
            },
            thumbs: {
                width: 100,
                height: 100
            },
            overlay: {
                locked: false
            }
        }
    });

    $('.category-item').click(function () {
        $('.category-item').removeClass('categorii-element-selected');
        $(this).toggleClass('categorii-element-selected');
        var categorie_curenta = $(this).attr('id_categorie');
        var categorie_curenta_galerie = $(this).attr('id_categorie');
        console.log(categorie_curenta);
        console.log(categorie_curenta_galerie);
        $(".poza-galerie").hide();
        $(".poza-galerie[item_category=" + categorie_curenta + "]").fadeIn("slow");
        $(".poza-galerie[poze_category=" + categorie_curenta_galerie + "]").fadeIn("slow");
    });
    $pagination = 3;
    if(screen.width<=768)
    $pagination = 2;
    if(screen.width<=480)
    $pagination = 1;

    var swiper = new Swiper('.gallery-categories-mobile .swiper-container', {
      slidesPerView: $pagination,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
</script>
@endpush