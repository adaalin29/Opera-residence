@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="container">
    <div class="pagini">
        <a href="/" class="pagini-link">Homepage |</a>
        <a href="termeni" class="pagini-link">Termeni</a>
    </div>
    <div class="pages-title">Termeni si conditii</div>
    <div class = "termeni-text">{!!setting('site.termeni')!!}</div>
</div>
@endsection
