<div class="row mt-4" style="max-height: 400px;
    overflow-x: auto;">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Roll No.</th>                            
                            <th>phone_no</th>
                            <th>Address</th>
                            <th>Last Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teacher->students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->class }}</td>
                                <td>{{ $student->roll_no }}</td>
                                <td>{{ $student->phone_no }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->updated_at->diffForHumans() }}</td>
                                <td class="btn-td">
                                
    <div class="btn-group" role="group" aria-label="View Student">
        <a href="{{ route('students.show', $student) }}" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-info">
            <i class="fas fa-eye"></i>
        </a>     
    </div></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
       
