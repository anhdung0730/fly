@extends('layouts.app')

@section('content')
  <main>
    <div class="container">
        <section>
            <h2><i class="glyphicon glyphicon-arrow-right"></i></h2>
            @foreach ($flights as $flight)
              <article>
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <h4><strong><a href="flight-detail.html">{{ $flight->airplane_name }}</a></strong></h4>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <label class="control-label">From:</label>
                                          <div><big class="time">{{ date("H:i", strtotime($flight->flight_departure_time)) }}</big></div>
                                          <div><span class="place">{{ $flight->city_from }} ({{ $flight->airport_from_code }})</span></div>
                                      </div>
                                      <div class="col-sm-3">
                                          <label class="control-label">To:</label>
                                          <div><big class="time">{{ date("H:i", strtotime($flight->flight_arrival_time)) }}</big></div>
                                          <div><span class="place">{{ $flight->city_to }} ({{ $flight->airport_to_code }})</span></div>
                                      </div>
                                      <div class="col-sm-3">
                                          <label class="control-label">Duration:</label>
                                          <div><big class="time">{{ date("H:i", strtotime($flight->duration)) }}</big></div>
                                          {{-- <div><strong class="text-danger">1 Transit</strong></div> --}}
                                      </div>
                                      <div class="col-sm-3 text-right">
                                          <h3 class="price text-danger"><strong>{{ str_replace(',', '.', number_format($flight->flight_cost)) }}</strong></h3>
                                          <div>
                                              <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                              <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </article>
            @endforeach
            <div class="text-center">
                {{ $flights->render() }}
            </div>
        </section>
    </div>
  </main>
@endsection
