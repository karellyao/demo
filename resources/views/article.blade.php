
@extends('layouts/master')

@section('container')
<p>c'est l'article numero {{ $numero }}</p>

@include('partials_shared/_weekend')

@endsection

@push('script.footer')
<script src="http//code.jquery.com/jquery.min.js"></script>
@endpush