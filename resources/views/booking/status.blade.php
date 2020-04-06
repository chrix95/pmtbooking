@extends('layouts.app')
@section('pageTitle', 'Booking Status')
@section('page', 'Booking Status')
@section('content')
  <booking-status></booking-status>
  {{-- <p>Date: <input type="text" id="datepicker"></p> --}}
@endsection
@section('javascript')
  <script>
    $(function() {
      $( "#datepicker" ).datepicker();
    });
  </script>
@endsection