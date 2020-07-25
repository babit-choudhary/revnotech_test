
    <div class="btn-group" role="group" aria-label="@lang('labels.backend.access.users.user_actions')">
        <a href="{{ route('teachers.show', $teacher) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.view')" class="btn btn-info">
            <i class="fas fa-eye"></i>
        </a>

        <a href="{{ route('teachers.edit', $teacher) }}" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')" class="btn btn-primary">
            <i class="fas fa-edit"></i>
        </a>
 <a href="javascript:void(0);" onclick="confirm('Are you sure you want to delete this item?')?$(this).find('form').submit():'';" class="btn btn-danger" >
        <i class="fas fa-trash"></i>
    <form action="{{ route('teachers.destroy', $teacher) }}" method="post">
        @method('delete')
        @csrf
    </form>
</a>
        </div>
    </div>

