@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="container">
    <div class="pagini">
        <a href="/" class="pagini-link">Homepage |</a>
        <a href="facilitati" class="pagini-link">Facilitati</a>
    </div>
    <div class="pages-title">Facilitati</div>
    <div class="facilitati-container">
        @foreach($facilitati as $item)
        <div class="facilitati-item">
            <div class="facilitati-imagine"><img src="{{ route('thumb', ['width:1000', $item->image]) }}" class="width"></div>
            <div class="facilitati-titlu">{{$item->title}}</div>
            <div class="facilitati-text">{{$item->text}}</div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@push('scripts')
<script>
</script>
@endpush