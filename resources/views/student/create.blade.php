    <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="student_code" class="form-control" placeholder="Enter StudentCode"/>
            <input type="text" name="fullname" class="form-control" placeholder="Enter Fullname"/>
            <input type="submit" name="add" class="btn btn-primary" value="Add" />
    </form>
