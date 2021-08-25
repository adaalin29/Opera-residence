@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="container">
    <div class="pagini">
        <a href="/" class="pagini-link">Homepage |</a>
        <a href="tipuri" class="pagini-link">Tipuri de locuinte |</a>
        @if($category!=NULL)
        <a href="apartament\{{$category->categories['id']}}" class="pagini-link">{{$category->categories['type']}}</a>
        @endif
    </div>
    @if($category!=NULL)
    <div class="pages-title">{{$category->categories['type']}}</div>
    @endif
    @if($apartamente!=NULL)
    @php ($delay_contor = 0)
    @php ($apartament_contor = 0)
      @foreach($apartamente as $apartament)
        @if($apartament_contor%2==1)
        <div class="apartament" apartament-contor = {{$apartament_contor}} data-aos-delay="{{$delay_contor*200}}" data-aos-easing="ease-in-sine"  data-aos="fade-right">
            <div class="apartament-titlu">{{$apartament->nume}}</div>
            <div class="apartament-container">
                <div class="apartament-left">
                    <div class="apartament-descriere">{{$apartament->descriere}}</div>
                    <div class="specificatii">
                        <div class="specificatii-item">
                            <div class="specificatii-title">Suprafata utila |</div>
                            <div class="specificatii-text">{{$apartament->sup_utila}} mp</div>
                        </div>
                        <div class="specificatii-item">
                            <div class="specificatii-title">Suprafata construita |</div>
                            <div class="specificatii-text">{{$apartament->sup_construita}} mp</div>
                        </div>
                        <div class="specificatii-item">
                            <div class="specificatii-title">Suprafata utila + balcon |</div>
                            <div class="specificatii-text">{{$apartament->sup_balcon}} mp</div>
                        </div>
                    </div>
                    <div  class="buton-container apartamente-buton formular-buton">
                        <div class="buton-text buton-text-programare">Contacteaza-ne</div>
                        <div class="buton-top buton-programare-culoare"></div>
                        <div class="buton-bottom buton-programare-culoare"></div>
                    </div>
                </div>
                <div class="apartament-centru">
                    @if($apartament->camera1!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera1.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera1}}</div>
                    </div>
                    @endif
                    @if($apartament->camera2!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera2.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera2}}</div>
                    </div>
                    @endif
                    @if($apartament->camera3!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera3.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera3}}</div>
                    </div>
                    @endif
                    @if($apartament->camera4!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera4.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera4}}</div>
                    </div>
                    @endif
                    @if($apartament->camera5!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera5.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera5}}</div>
                    </div>
                    @endif
                    @if($apartament->camera6!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera6.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera6}}</div>
                    </div>
                    @endif
                    @if($apartament->camera7!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera7.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera7}}</div>
                    </div>
                    @endif
                    @if($apartament->camera8!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera8.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera8}}</div>
                    </div>
                    @endif
                    @if($apartament->camera9!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera9.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera9}}</div>
                    </div>
                    @endif
                    @if($apartament->etaj!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/etaj.svg" class="width"></div>
                        <div class="apartament-camera-descriere">Etaj: {{$apartament->etaj}}</div>
                    </div>
                    @endif
                </div>
                <div class="apartament-dreapta">
                    @if($apartament->schema!=NULL)
                    <div class="swiper-container" swiper_id="{{$apartament->id}}">
                        <div class="swiper-wrapper">
                            @foreach($apartament->schema as $item)
                            <div class="swiper-slide">
                                <a class="fancybox-width apartament-image" data-fancybox="gallery"
                                    href="{{ route('thumb', ['width:1920', $item]) }}">
                                    <img src="{{ route('thumb', ['width:800', $item]) }}" class="full-width">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @if(count($apartament->schema)>=2)
                    <div class="swiper-pagination-{{$apartament->id}} swiper-pagination"></div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
        @else
        <div class="apartament" data-aos-delay="{{$delay_contor*200}}" data-aos-easing="ease-in-sine"  data-aos="fade-right">
            <div class="apartament-titlu">{{$apartament->nume}}</div>
            <div class="apartament-container apartament-container-reverse">
                <div class="apartament-left">
                    <div class="apartament-descriere">{{$apartament->descriere}}</div>
                    <div class="specificatii">
                        <div class="specificatii-item">
                            <div class="specificatii-title">Suprafata utila |</div>
                            <div class="specificatii-text">{{$apartament->sup_utila}} mp</div>
                        </div>
                        <div class="specificatii-item">
                            <div class="specificatii-title">Suprafata construita |</div>
                            <div class="specificatii-text">{{$apartament->sup_construita}} mp</div>
                        </div>
                        <div class="specificatii-item">
                            <div class="specificatii-title">Suprafata utila + balcon |</div>
                            <div class="specificatii-text">{{$apartament->sup_balcon}} mp</div>
                        </div>
                    </div>
                    <div class="buton-container apartamente-buton formular-buton">
                        <div class="buton-text buton-text-programare">Contacteaza-ne</div>
                        <div class="buton-top buton-programare-culoare"></div>
                        <div class="buton-bottom buton-programare-culoare"></div>
                    </div>
                </div>
                <div class="apartament-centru">
                    @if($apartament->camera1!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera1.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera1}}</div>
                    </div>
                    @endif
                    @if($apartament->camera2!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera2.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera2}}</div>
                    </div>
                    @endif
                    @if($apartament->camera3!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera3.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera3}}</div>
                    </div>
                    @endif
                    @if($apartament->camera4!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera4.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera4}}</div>
                    </div>
                    @endif
                    @if($apartament->camera5!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera5.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera5}}</div>
                    </div>
                    @endif
                    @if($apartament->camera6!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera6.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera6}}</div>
                    </div>
                    @endif
                    @if($apartament->camera7!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera7.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera7}}</div>
                    </div>
                    @endif
                    @if($apartament->camera8!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera8.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera8}}</div>
                    </div>
                    @endif
                    @if($apartament->camera9!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/camera9.svg" class="width"></div>
                        <div class="apartament-camera-descriere">{{$apartament->camera9}}</div>
                    </div>
                    @endif
                    @if($apartament->etaj!=NULL)
                    <div class="apartament-camera">
                        <div class="apartament-camera-image"><img src="images/etaj.svg" class="width"></div>
                        <div class="apartament-camera-descriere">Etaj: {{$apartament->etaj}}</div>
                    </div>
                    @endif
                </div>
                <div class="apartament-dreapta">
                    @if($apartament->schema!=NULL)
                    <div class="swiper-container" swiper_id="{{$apartament->id}}">
                        <div class="swiper-wrapper">
                            @foreach($apartament->schema as $item)
                            <div class="swiper-slide">
                                <a class="fancybox-width apartament-image" data-fancybox="gallery"
                                    href="{{ route('thumb', ['width:1920', $item]) }}">
                                    <img src="{{ route('thumb', ['width:800', $item]) }}" class="full-width">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @if(count($apartament->schema)>=2)
                    <div class="swiper-pagination-{{$apartament->id}} swiper-pagination"></div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
        @endif
        <?php $delay_contor++ ?>
        <?php $apartament_contor++ ?>
        @endforeach
    @endif
</div>
<div class = "programeaza-container">
    <div class = "programeaza-overlay">
        <div class = "programeaza-interior">
            <div class = "programeaza-titlu">Programeaza o intalnire</div>
            <a href = "tel:{{setting('contact.telefon')}}" class = "address-href adress-href-center">{{setting('contact.telefon')}}</a>
            <a href = "mailto:{{setting('contact.email')}}" class = "address-href adress-href-center">{{setting('contact.email')}}</a>
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
    // var swiper = new Swiper('.apartament-dreapta .swiper-container', {
    //     pagination: {
    //         el: '.swiper-pagination',
    //         clickable: true,
    //     },
    //     autoplay: {
    //         delay: 2500,
    //     },
    // });
    $(".swiper-container").each(function (index, element) {
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
@endpush