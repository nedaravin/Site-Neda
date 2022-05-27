<a href="{{ route('admin.do-admin.entrepreneur.show', $id) }}" class="btn btn-primary">View</a>
<a href="{{ route('admin.do-admin.entrepreneur') }}?update={{ $id }}" class="btn btn-warning btn-sm">Update</a>


<a class="btn btn-danger btn-sm" href="{{ route('admin.do-admin.delete-entrepreneur') }}"
   onclick="event.preventDefault();document.getElementById('logout-form-{{ $id }}').submit();">
    Delete
</a>
<form id="logout-form-{{ $id }}" action="{{ route('admin.do-admin.delete-entrepreneur') }}" method="POST" class="d-none">
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">
    <input type="hidden" name="redirect" value="{{ request()->getUri() }}">

</form>
