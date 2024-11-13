<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Yajra Datatables Tutorial - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
       
<div class="container-fluid         ">
    <div class="card mt-5">
        <h3 class="card-header p-3">Admin | University and Courses</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>university</th>
                        <th>course</th>
                        <th>fees</th>
                        <th>intake</th>
                        <th>duration</th>
                        <th>scholarship</th>
                        <th>entry_requirements</th>
                        <th>language_requirements</th>
                        <th>mode</th>
                        <th>location</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
       
</body>
       
<script type="text/javascript">
  $(function () {
        
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.course') }}",
        columns: [
            {data: 'universirt_id', name: 'universirt_id'},
            {data: 'course_id', name: 'course_id'},
            {data: 'fees', name: 'fees'},
            {data: 'intake', name: 'intake'},
            {data: 'duration', name: 'duration'},
            {data: 'scholarship', name: 'scholarship'},
            {data: 'entry_requirements', name: 'entry_requirements'},
            {data: 'language_requirements', name: 'language_requirements'},
            {data: 'mode', name: 'mode'},
            {data: 'location', name: 'location'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        
  });
</script>
</html>
