@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<body>
<div id="event-create-container" class="col-md-2 offset-md-1">
<div id="homes"></div>
</div>


    <script src="{{ asset('js/app.js') }}" defer></script>
    <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
</body>
@endsection