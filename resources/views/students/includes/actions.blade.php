
    <div class="btn-group" role="group" >
        <a href="{{ route('students.show', $student) }}" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-info">
            <i class="fa fa-eye"></i>
        </a>

        <a href="{{ route('students.edit', $student) }}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary">
            <i class="fa fa-edit"></i>
        </a>
        <a href="javascript:void(0);" onclick="confirm('Are you sure you want to delete this item?')?$(this).find('form').submit():'';" class="btn btn-danger" >
        <i class="fa fa-trash"></i>
    <form action="{{ route('students.destroy', $student) }}" method="post">
        @method('delete')
        @csrf
    </form>
</a>
        
    </div>

