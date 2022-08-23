<h1>Olá, {{ $user->name }}!</h1>

<p>Paragrafo...</p>

<img src="{{ $message->embed($imageExample) }}" alt="{{ $user->name }}">
{{-- <img src="{{ $message->embedData($data, 'image.png') }}" alt="{{ $user->name }}"> --}}

