

@extends('layout.master')

@section('content')
    Hello {{ $name }}
    <br>
    Age = {{ $age }}

    @if($age > 25)
    Age greater than 25
    @elseif($age == 25 )
    Age is Equal 25
    @else
    Age less than 25
    @endif

    @for($i=0 ; $i<5 ; $i++)
    <br>
    Ahmed
    @endfor

    @include('partials.loop')

@endsection



