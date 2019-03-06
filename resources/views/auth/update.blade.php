@extends('layouts.app')

@section('content')
  <div class="container">
    <section>
      <h3>Update personal infomation</h3>
      <div class="panel panel-default">
        <div class="panel-body">
          {{ $user }}
          <form action="updateUserInfo.php" name="updateUserInfo" method="POST">
            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="text" name="email" class="form-control" disabled value="{{ Auth::user()->email }}">
            </div>
            <div class="form-group">
              <label class="control-label">Name:</label>
              <input type="text" name="fullName" class="form-control" placeholder="Enter your fullname" value="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
              <label class="control-label">Day of birth (MM/DD/YYYY):</label>
              <div class="row">
                <div class="col-md-3">
                  <input type="date" name="dob" class="form-control" placeholder="Enter your day of birth" value="{{ Auth::user()->email }}">
                </div>
              </div>
            </div>
            <div class="form-group form-inline">
              <label class="control-label">Gender:</label>
              <div class="row">
                <div class="col-md-3">
                  <select class="form-control" name="gender">
                    <option value="male">Nam</option>
                    <option value="male">Nữ</option>
                    <option value="male">Khác</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Phone:</label>
              <input type="text" name="phone" class="form-control" placeholder="Enter your phone" value="">
            </div>
            <div class="form-group">
              <label class="control-label">Address:</label>
              <input type="text" name="address" class="form-control" placeholder="Enter your address" value="">
            </div>
            <div class="form-group">
              <label class="control-label">New password:</label>
              <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="Enter your new password" autocomplete="new-password">
            </div>
            <div class="text-left">
              <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
@endsection
