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
    <body>
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                        </div>
                    </div>
            </nav>
            <div class="row justify-content-center">
                    <div class="col-md-8">
                    <div class="card"><div class="card-header">Department</div> 
                    <div class="card-body">
                            <h4>Welcome to index manage department</h4>
                            <div class="col-md-9 col-lg-9 col-sm-3 pull-left">
                                <ul class="list-group">
                                        <a href="/department/create">เพิ่มข้อมูล</a>
                                    @foreach($DepartmentDataList as $DepartmentDataList)
                                        <li class="list-group-item"><a>{{$DepartmentDataList->department_id}}</a> 
                                            <a>{{$DepartmentDataList->department_name}} 
                                                <a href="/department/{{$DepartmentDataList->department_id}}">ดูข้อมูล</a> 
                                                <a href="/department/{{$DepartmentDataList->department_id}}/edit">แก้ไขข้อมูล</a>                                    
                                            <a href="{{route('department.destroy', $DepartmentDataList->department_id)}}" onclick="event.preventDefault(); document.getElementById('del-form').submit();"></a>
                                            <form id="del-form" action="{{route('department.destroy', $DepartmentDataList->department_id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>                  
                        </div>
                        </div>
                        </div>        
            </form>
        </div>
    </div>
    </div>
    </div>       
                </div>
                </nav>
        </body>
    </html>