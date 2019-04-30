<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
@section('content')
  <body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000">
                    StudentDataTracking
                </a>
                <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarSupportedContent" aria-label="Toggle navigation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                  <span class="navbar-toggler-icon"></span>
                </button> <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto"></ul>

            </div>
          </div>
        </nav>
        <main class="py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                <div class="card-header">Status</div>
                <div class="card-body">
        Welcome to manage status
        <div class="col-md-9 col-lg-9 col-sm-3 pull-left">
            <ul class="list-group">
              <a href="{{route('status.create')}}">Create</a>
                @foreach($StatusDataList as $StatusDataList)
                <select id="status_id" name="status_name" style="font-size:12px; width:270px;" onchange="checkSelectIIE(this.value)">
                            <option value="status_id">{{$StatusDataList->status_name}}</option>
                                                        <option value="status_id">{{$StatusDataList->status_name}}</option>
                                                    </select>
                    <a href="/status/{{$StatusDataList->status_id}}/edit">แก้ไขข้อมูล</a>
                      <a href="{{route('status.destroy', $StatusDataList->status_id)}}" onclick="event.preventDefault(); document.getElementById('del-form').submit();">ลบ</a>
                            <form id="del-form" action="{{route('status.destroy', $StatusDataList->status_id)}}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                    </li>

                @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
