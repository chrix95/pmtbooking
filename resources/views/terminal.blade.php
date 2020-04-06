@extends('layouts.app')
@section('pageTitle', 'Terminal')
@section('page', 'Terminal')
@section('content')
  <div class="wrap">
    <div class="row">
      <!--- Content -->
      <div class="content three-fourth textongrey">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Termial</th>
              <th scope="col">Address</th>
              <th scope="col">Manager</th>
              <th scope="col">Phone</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($terminal as $value => $item)
              <tr>
                <th scope="row">{{ $value + 1 }}</th>
                <td>{{ $item['depot'] }}</td>
                <td>{{ $item['address'] }}</td>
                <td>{{ $item['manager'] }}</td>
                <td>{{ $item['number'] }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!--- //Content -->

      <!--- Sidebar -->
      <aside class="one-fourth sidebar right offset">
        <!-- Widget -->
        <div class="widget">
          <h4>Why book with us?</h4>
          <div class="textwidget">
            <h5>Reliable and Safe</h5>
            <p>Lorem ipsum dolor sit amet, do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
            <h5>No hidden fees</h5>
            <p>Lorem ipsum dolor sit amet, do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
            <h5>We’re Always Here</h5>
            <p>Lorem ipsum dolor sit amet, do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
          </div>
        </div>
        <!-- //Widget -->

        <!-- Widget -->
        <div class="widget">
          <h4>Advertisment</h4>
          <a href="#"><img src="{{ asset('ui/images/uploads/advertisment.jpg') }}" alt="" /></a>
        </div>
        <!-- //Widget -->
      </aside>
      <!--- //Sidebar -->
    </div>
  </div>
@endsection