<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        Welcome to index manage department
        <div class="col-md-9 col-lg-9 col-sm-3 pull-left">
            <ul class="list-group">
                @foreach($DepartmentDataList as $DepartmentDataList)
                    <li class="list-group-item"><a>{{$DepartmentDataList->department_id}}</a> <a>{{$DepartmentDataList->department_name}} <a href="/department/{{$DepartmentDataList->department_id}}">ดูข้อมูล</a><a href="/department/{{$DepartmentDataList->department_id}}/edit">แก้ไขข้อมูล</a>
                    
                        <a href="{{route('department.destroy', $DepartmentDataList->department_id)}}" onclick="event.preventDefault(); document.getElementById('del-form').submit();">ลบ</a>
                        <form id="del-form" action="{{route('department.destroy', $DepartmentDataList->department_id)}}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                        </form>
                    
                    </li>
                @endforeach
            </ul>
    </body>
</html>