@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="container">
    <div class="pagini">
        <a href="/" class="pagini-link">Homepage |</a>
        <a href="tipuri" class="pagini-link">Tipuri de locuinte</a>
    </div>
    <div class="pages-title">Tipuri de locuinte</div>
    <div class="tipuri-container">
        @php ($delay_contor = 0)
        @foreach($tipuri as $tip)
        <div class="tip-item" data-aos-delay="{{$delay_contor*200}}" data-aos-easing="ease-in-sine"  data-aos="fade-right">
            <div class="tip-titlu">{{$tip->type}}</div>
            <div class="tip-descriere">{{$tip->description}}</div>
            <a href="apartament\{{$tip->id}}" class="buton-container apartament-tip">
                <div class="buton-text buton-text-programare">Vezi apartamente</div>
                <div class="buton-top buton-programare-culoare"></div>
                <div class="buton-bottom buton-programare-culoare"></div>
            </a>
        </div>
        <?php $delay_contor++ ?>
        @endforeach
    </div>
</div>
@endsection
