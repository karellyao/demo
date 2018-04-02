
@extends('layouts.master')

@section('title')
  welcome
@endsection
 
@section('container')
 <h1>Demo</h1>
 <!-- {!! $name !!}  {{-- !! pr interpreter du code html --}} -->
 

<!-- @push('script.footer')

<script src="bhdudj"></script>

@endpush -->

@include('partials_shared/_weekend')

{{$name}}

@stop


 
