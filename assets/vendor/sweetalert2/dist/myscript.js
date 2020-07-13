const flashData = $('.flash-data').data('flashdata');

$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href')

    Swal.fire({
        title: 'Yakin?',
        text: "Data akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data.'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Terhapus!',
                'Data berhasil dihapus.',
                'success'
            )
            document.location.href = href;
        }
    })
});

$('.tombol-keluar').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href')

    Swal.fire({
        title: 'Yakin?',
        text: "Anda akan meninggalkan halaman ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Keluar.'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Sukses!',
                'Anda berhasil logout.',
                'success'
            )
            document.location.href = href;
        }
    })
});

$('.tombol-edit').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href')

    Swal.fire(
        'Edit berhasil!',
        'success'
    )
});