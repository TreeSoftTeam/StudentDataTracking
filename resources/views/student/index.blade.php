@extends('layouts.management')

@section('head')
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />

@endsection

@section('content')
                <!-- Page-Title -->
                <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">Management</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active"><a href="#">Management</a></li>
                            </ol>
                        </div>
                </div>

                    
        <button class="btn btn-success waves-effect waves-light" type="button" data-toggle="collapse" data-target="#collapseAddStudent" aria-expanded="false" aria-controls="collapseAddStudent">Add</span></button>
        <button class="btn btn-success waves-effect waves-light" type="button" data-toggle="collapse" data-target="#collapseEditStudent" aria-expanded="false" aria-controls="collapseEditStudent">Edit</span></button>

        <div class="row">
                <div class="collapse col-12 show" id="collapseAddStudent" data-parent="#accordion">
                    <div class="card-box">
                            <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
                                @csrf

                                    <div class="row">
                                            <div class="col-lg-6">
                                    <div class="card-box shadow-sm">

                                        <div class="row">
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="student_code">Student Code</label>
                                                    <input type="text" name="student_code" class="form-control" placeholder="รหัสนักศึกษา"/>
                                                </div>
                                                </div>
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="fullname">Full name</label>
                                                    <input type="text" name="fullname" class="form-control" placeholder="ชื่อ - สกุล"/>
                                                </div>
                                                </div>
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="country">Nationality</label>
                                                    <select class="selectpicker" data-live-search="true"  data-style="btn-white" name="province">
                                                            <option value="" selected>---- เลือกประเทศ ----</option>
                                                            <option value="กรุงเทพมหานคร">United State</option>
                                                            <option value="กระบี่">Thailande </option>
                                                            <option value="กาญจนบุรี">China </option>
                                                    </select>
                                                </div>
                                                </div>
                                        </div>

                                        <div class ="row">
                                                <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="student_code">Address</label>
                                                            <input type="text" name="student_code" class="form-control" placeholder="ที่อยู่ปัจจุบนในประเทศไทย"/>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class ="row">
                                                    <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="country">Faculty</label>
                                                                <select class="selectpicker" data-live-search="true"  data-style="btn-white" name="province">
                                                                        <option value="" selected>---- เลือกคณะ ----</option>
                                                                        <option value="กรุงเทพมหานคร">วิทยาศาสตร์</option>
                                                                        <option value="กระบี่">มนุษย์ศาสตร์</option>
                                                                        <option value="กาญจนบุรี">บริหารธุรกิจ</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="country">Department</label>
                                                                <select class="selectpicker" data-live-search="true"  data-style="btn-white" name="province">
                                                                        <option value="" selected>---- เลือกสาขา ----</option>
                                                                        <option value="กรุงเทพมหานคร">...</option>
                                                                        <option value="กระบี่">....</option>
                                                                        <option value="กาญจนบุรี">....</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="country">Course</label>
                                                                <select class="selectpicker" data-live-search="true"  data-style="btn-white" name="province">
                                                                        <option value="" selected>---- เลือกหลักสูตรระยะสั้น ----</option>
                                                                        <option value="กรุงเทพมหานคร">Eng for everyday</option>
                                                                        <option value="กระบี่">Thai Skill</option>
                                                                        <option value="กาญจนบุรี">Marketing</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="country">สถานะนักศึกษา</label>
                                                                <select class="selectpicker" data-live-search="true"  data-style="btn-white" name="province">
                                                                        <option value="" selected>---- เลือกสถานะ ----</option>
                                                                        <option value="กรุงเทพมหานคร">กำลังศึกษา</option>
                                                                        <option value="กระบี่">ลาออก</option>
                                                                        <option value="กาญจนบุรี">จบการศึกษา</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    
                                            </div>

                                            
                                </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card-box shadow-sm">
                                                    

                                                    <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="passport">Passport No.</label>
                                                                    <input type="text" name="passport" class="form-control" placeholder="เลขที่พาสปอร์ต"/>
                                                                </div>
                                                            </div>
            
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="passport_of_issue">Date of issue</label>
                                                                    <div class="input-group">
                                                                        <input name="passport_of_issue" id="datepicker" type="text" class="form-control" placeholder="mm/dd/yyyy">
                                                                        <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="md md-event-note"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label for="passport_of_expiry">Date of expiry</label>
                                                                        <div class="input-group">
                                                                            <input name="passport_of_expiry" id="datepicker" type="text" class="form-control" placeholder="mm/dd/yyyy">
                                                                            <div class="input-group-append">
                                                                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <input type="file" class="filestyle" data-iconname="fa fa-file-image-o">
                                                                </div>
                                                            </div>
                                                        </div>
            
                                                        <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label for="passport">Visa No.</label>
                                                                        <input type="text" name="passport" class="form-control" placeholder="เลขที่วีซ่า"/>
                                                                        
                                                                    </div>
                                                                </div>
                
                                                                <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label for="passport_of_issue">Date of issue</label>
                                                                    <div class="input-group">
                                                                        <input name="passport_of_issue" id="datepicker" type="text" class="form-control" placeholder="mm/dd/yyyy">
                                                                        <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="md md-event-note"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                
                                                                <div class="col-lg-4">
                                                                        <div class="form-group">
                                                                            <label for="passport_of_expiry">Date of expiry</label>
                                                                            <div class="input-group">
                                                                                <input name="passport_of_expiry" id="datepicker" type="text" class="form-control" placeholder="mm/dd/yyyy">
                                                                                <div class="input-group-append">
                                                                                <span class="input-group-text"><i class="md md-event-note"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                        </div>
                                    </div>
                            </div> <!-- end row card -->

                                <center>
                                <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            <button type="reset" data-toggle="collapse" data-target="#collapseAddStudent" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                        </div>
                                </div>
                                </center>
                                    
                                
                            </form>
                    </div>
                </div>

                <!-- Edit -->
                <div class="collapse col-12" id="collapseEditStudent" data-parent="#accordion">
                        <div class="card-box">
                                <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
                                    @csrf
    
                                    <div class="col-lg-4">
                                        <div class="row">
                                        <input type="text" name="student_code" class="form-control" placeholder="Enter StudentCode"/>
                                        <input type="text" name="fullname" class="form-control" placeholder="Enter Fullname"/>
                                        <input type="text" name="country" class="form-control" placeholder="Enter Country"/>
                                        
                                        <input type="text" name="passport" class="form-control" placeholder="Passport No."/>
                                            <div class="col-lg-6">
                                    
                                                <div class="input-group date">
                                                    <input id="datepicker" type="text" class="form-control" placeholder="mm/dd/yyyy">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="md md-event-note"></i></span>
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                <button type="reset" data-toggle="collapse" data-target="#collapseAddStudent" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                            </div>
                                    </div>
                                        
                                    
                                </form>
                        </div>
                    </div>
                    <!-- End Edit -->
            
        

       
                <div class="col-lg-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title m-b-30">ข้อมูลนักศึกษา</h4>

                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>StudentCode</th>
                                            <th>Fullname</th>
                                            <th>Faculty</th>
                                            <th>Department</th>
                                            <th>Country</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($StudentDataList as $StudentDataList)
                                        <tr>
                                            <td>{{$StudentDataList->student_code}}</td>
                                            <td>{{$StudentDataList->fullname}}</td>
                                            <td></td>
                                            <td>{{$StudentDataList->department_id}}</td>
                                            <td>{{$StudentDataList->country}}</td>
                                            <td>{{$StudentDataList->status_id}}</td>
                                            <td><a class ="mr-3" href="/student/{{$StudentDataList->student_code}}"><i class= "ti-search "></i></a>
                                                <a class ="mr-3" href="/student/{{$StudentDataList->student_code}}/edit"><i class= "ti-pencil-alt" style="color:green"></i></a>
                                                <a href="{{route('student.destroy', $StudentDataList->student_code)}}" onclick="event.preventDefault(); document.getElementById('del-form').submit();"><i class = "ti-close" style="color:red"></i></a>
                                                <form id="del-form" action="{{route('student.destroy', $StudentDataList->student_code)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                </div>

                

        </div> <!-- end row -->
            

@endsection

<!-- Required datatable js -->
@section('bottom')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Buttons examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<!-- select + search  -->
<script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/country-picker/js/countrypicker.min.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // DatePicker
        $('#datepicker').datepicker({
            startView: 2,
            autoclose: true,
            format: "dd/mm/yyyy",
            
        });

        // Default Datatable
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: true,
            //buttons: ['excel', 'pdf']
        });

        // Key Tables

        $('#key-table').DataTable({
            keys: true
        });

        // Responsive Datatable
        $('#responsive-datatable').DataTable();

        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });

        table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );
</script>
@endsection