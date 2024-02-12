<form action="{{ route('admin.content.destroy', ['id' => $model->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" id="delete">Hapus</button>
    <button class="btn btn-info edit-content" data-id="{{ $model->id }}">Edit</button>
</form>

<script src="{{ asset('assets/template/libs/sweetalert2/sweetalert2.js') }}"></script>
<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault();
        var form = event.target.form;
        var href = $(this).attr('href');
        Swal.fire({
            title: 'Apakah kamu yakin hapus data ini?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                    'Deleted!',
                    'Data telah dihapus.',
                    'success'
                )
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Data tidak jadi dihapus :)',
                    'error'
                )
            }
        });
    });
</script>
