@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="header-banner-overlay"></div>
</div>
<div class="container">
    <div class="pagini">
        <a href="/" class="pagini-link">Homepage |</a>
        <a href="confidentialitate" class="pagini-link">Confidentialitate</a>
    </div>
    <div class="pages-title">Politica de confidentialitate</div>
    <div class = "termeni-text">{!!setting('site.confidentialitate')!!}</div>
</div>
@endsection
