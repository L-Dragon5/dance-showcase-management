<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dance Showcase Management</title>

    <!-- Import Google icon Font -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="showcases">
      <div class="showcases__upcoming-list">
        <h3>Upcoming Showcases</h3>
        <div class="row">

          <!-- Insert upcoming showcases here -->

          <div class="col s12 m4">
            <div class="showcases__listing card">
              <div class="card-content">
                <span class="card-title">Kisetsucon 2019 Showcase</span>
                <span class="card-date">October 13th, 2019</span>
                <span class="card-time">TBD</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="showcases__divider divider"></div>
      <div class="showcases__past-list">
        <h3>Past Showcases</h3>
        <div class="row">

          <!-- Insert past showcases here -->

          <div class="col s12 m4">
            <div class="showcases__listing card">
              <div class="card-content">
                <span class="card-title">Tora-con 2019 Showcase</span>
                <span class="card-date">March 17th, 2019</span>
                <span class="card-time">1:00PM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
