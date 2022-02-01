<a href="{{ route('admin.users.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> {{ __('trans.edit') }}</a>
{!! Form::open(['route' => ['admin.users.destroy', $query->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
<button class="btn btn-sm btn-danger" onclick="return showDeleteMessage()"> <i class="fa fa-remove"></i> {{ __('trans.delete') }}</button>
{!! Form::close() !!}

