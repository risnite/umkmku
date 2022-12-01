function swalConfirm(formId) {
  Swal.fire({
    title: 'Yakin ingin menghapus data?',
    text: "Data yang sudah dihapus tidak dapat dikembalikan!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Ya, hapus data!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Terhapus!',
        'Data sudah terhapus.',
        'success'
      ).then(() => {
        document.getElementById(formId).submit()
      })
    }
  })
}