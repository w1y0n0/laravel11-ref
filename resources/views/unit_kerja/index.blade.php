@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Unit Kerja</h6>
                <button type="button" class="btn btn-primary btn-sm px-3">
                    Perbarui
                </button>
            </div> --}}
            <div class="card-header py-3">
                <div class="float-left">
                    <h4 class="m-0 font-weight-bold text-primary">
                        Data Unit Kerja
                    </h4>
                </div>
                <div class="float-right">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Aksi">

                        <button type="button" class="btn btn-primary btn-sm rounded"
                            onclick="addForm('{{ route('unit-kerja.store') }}')" data-bs-toggle="modal"
                            data-bs-target="#modal-form">
                            <i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data
                        </button>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">#</th>
                                <th>Unit Kerja</th>
                                <th>Lokasi</th>
                                <th width="15%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @includeIf('unit_kerja.form')
@endsection

@push('scripts')
    <script type="text/javascript">
        let table;

        $(document).ready(function() {
            table = $('#dataTable').DataTable({
                ajax: {
                    url: '{{ route('unit-kerja.data') }}',
                },
                columns: [
                    { data: 'DT_RowIndex', searchable: false, sortable: false },
                    { data: 'nama_unit_kerja' },
                    { data: 'lokasi' },
                    { data: 'aksi', searchable: false, sortable: false }
                ],
            });

            // Fokus ke input saat modal ditampilkan
            $('#modal-form').on('shown.bs.modal', function() {
                $('#nama_unit_kerja').trigger('focus');
            });

            $('#modal-form').validator().on('submit', function(e) {
                if (!e.preventDefault()) {
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                        .done((response) => {
                            $('#modal-form').modal('hide');
                            Swal.fire({
                                title: 'Tersimpan!',
                                text: response.message,
                                icon: 'success',
                                customClass: {
                                    popup: 'my-custom-popup',
                                    confirmButton: 'my-custom-button',
                                },
                                confirmButtonText: 'OK',
                            })
                            table.ajax.reload();
                        })
                        .fail((errors) => {
                            console.log(errors);
                            alert('Tidak dapat menyimpan data!');
                            return;
                        });
                }
            });
        });

        // Fungsi untuk membuka modal tambah form
        function addForm(url) {
            $('#modal-form').modal('show'); // Menampilkan modal
            $('#modal-form .modal-title').text('Tambah Unit Kerja'); // Set judul modal

            $('#modal-form form')[0].reset(); // Reset form pada modal
            $('#modal-form form').attr('action', url); // Set URL form action dengan URL pada parameter
            $('#modal-form [name=_method]').val('post'); // Isi value dari input [name=_method] dengan 'post'
            $('#modal-form [name=nama_unit_kerja]').focus(); // Fokus ke input [name=nama_unit_kerja]
        }

        // Fungsi untuk membuka modal edit form
        function editForm(url) {
            $('#modal-form').modal('show'); // Menampilkan modal
            $('#modal-form .modal-title').text('Edit Unit Kerja'); // Set judul modal

            $('#modal-form form')[0].reset(); // Reset form pada modal
            $('#modal-form form').attr('action', url); // Set URL form action dengan URL pada parameter
            $('#modal-form [name=_method]').val('put'); // Isi value dari input [name=_method] dengan 'post'
            $('#modal-form [name=nama_unit_kerja]').focus(); // Fokus ke input [name=nama_unit_kerja]

            $.get(url) // Ambil data dari URL pada parameter
                .done((response) => {
                    $('#modal-form [name=nama_unit_kerja]').val(response.nama_unit_kerja);
                    $('#modal-form [name=lokasi]').val(response.lokasi);
                })
                .fail((errors) => {
                    console.log(errors);
                    alert('Tidak dapat menampilkan data!');
                    return;
                });
        }

        // Fungsi untuk menghapus data dengan SweetAlert2
        function deleteData(url) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'my-custom-popup',
                    confirmButton: 'my-custom-button',
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post(url, { // Kirim data ke URL pada parameter
                            _method: 'delete', // Isi value dari input [_method] dengan 'delete'
                            _token: $('[name=csrf-token]').attr(
                                'content') // Isi value dari input [_token] dengan token CSRF
                        })
                        .done((response) => {
                            Swal.fire({
                                title: 'Terhapus!',
                                text: response.message,
                                icon: 'success',
                                customClass: {
                                    popup: 'my-custom-popup',
                                    confirmButton: 'my-custom-button',
                                },
                                confirmButtonText: 'OK',
                            })
                            table.ajax.reload(); // Reload data pada DataTable
                        })
                        .fail((errors) => {
                            console.log(errors);
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Tidak dapat menghapus data.',
                                icon: 'error',
                                customClass: {
                                    popup: 'my-custom-popup',
                                    confirmButton: 'my-custom-button',
                                },
                                confirmButtonText: 'OK',
                            })
                        });
                }
            });
        }
    </script>
@endpush
