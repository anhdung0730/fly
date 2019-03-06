@extends('layouts.app')

@section('content')
  <main>
    <div class="container">
      <section>
        <h3>Flight Booking</h3>
        <div class="panel panel-default">
          <div class="panel-body">
            <form role="form" action="flight-list.html">
              <div class="row">
                <div class="col-sm-4">
                  <h4 class="form-heading">1. Flight Destination</h4>
                  <div class="form-group">
                    <label class="control-label">From: </label>
                    <select class="form-control" name="from" id="from">
                      <option value="1">TP. Hồ Chí Minh (SGN)</option>
                      <option value="2">Hà Nội (HAN)</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">To: </label>
                    <select class="form-control" name="to" id="to">
                      <option value="1">TP. Hồ Chí Minh (SGN)</option>
                      <option value="2">Hà Nội (HAN)</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <h4 class="form-heading">2. Date of Flight</h4>
                  <div class="form-group">
                    <label class="control-label">Departure: </label>
                    <input type="date" class="form-control" placeholder="Choose Departure Date">
                  </div>
                  <div class="form-group">
                    <div class="radio">
                      <label><input type="radio" name="flight_type" checked value="one-way">One Way</label>
                      <label><input type="radio" name="flight_type" value="return">Return</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Return: </label>
                    <input type="date" class="form-control" placeholder="Choose Return Date">
                  </div>
                </div>
                <div class="col-sm-4">
                  <h4 class="form-heading">3. Search Flights</h4>
                  <div class="form-group">
                    <label class="control-label">Total Person: </label>
                    <select class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Flight Class: </label>
                    <select class="form-control">
                      <option value="economy">Economy</option>
                      <option value="business">Business</option>
                      <option value="premium-economy">Premium Economy</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Search Flights</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection
