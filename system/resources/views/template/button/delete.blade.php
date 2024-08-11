<form action="{{$url}}" method="POST" onsubmit="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>
