@extends('layouts.main')

@section('title', 'Patient')

@section('content')
<body> 
    <div id="event-create-container" class="col-md-6 offset-md-3">
    <div id="patientforms">
    </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
</body>
@endsection