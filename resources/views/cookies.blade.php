@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="container">
    <div class="pagini">
        <a href="/" class="pagini-link">Homepage |</a>
        <a href="cookies" class="pagini-link">cookies</a>
    </div>
    <div class="pages-title">Politica de cookies</div>
    <div class = "termeni-text">{!!setting('site.cookies')!!}</div>
</div>
@endsection
