@component('mail::message')
# Aveti o rezervare noua

@component('mail::panel')
<div style="width:100%; text-align:center; font-size:30px; font-height:bold;">
Rezervare noua
</div>

Nume: {{$message['name']}}<br>
Telefon: {{$message['phone']}}<br>
Email: {{$message['email']}}<br>
Mesaj: {{$message['message']}}<br>


@endcomponent

Multumim,<br>
Echipa Opera residence
@endcomponent
