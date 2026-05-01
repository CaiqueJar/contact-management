<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} | {{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  {{ $styles ?? '' }}
</head>

<body>

    @if(session('success'))
        <div class="alert alert--success">
            <x-bi-check-circle-fill />
            {{ session('success') }}
        </div>
    @endif

  <x-header />

  {{ $slot }}

  <x-footer />

  <script src="{{ asset('js/alert.js') }}" defer></script>
  {{ $scripts ?? '' }}
</body>

</html>
