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
        Welcome to index manage student
        <div class="col-md-9 col-lg-9 col-sm-3 pull-left">
            <ul class="list-group">
                @foreach($StudentDataList as $StudentDataList)
                    <li class="list-group-item"><a>{{$StudentDataList->student_code}}</a> <a>{{$StudentDataList->fullname}} <a href="/student/{{$StudentDataList->student_code}}">ดูข้อมูล</a><a href="/student/{{$StudentDataList->student_code}}/edit">แก้ไขข้อมูล</a>
                    
                    <form action="{{route('student.destroy', $StudentDataList->student_code)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    
                    </li>
                @endforeach
            </ul>
    </body>
</html>
