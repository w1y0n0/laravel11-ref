<!-- Modal -->
<div class="modal fade" data-backdrop="static" tabindex="-1" id="modal-form" aria-labelledby="modal-form"
   aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form action="">
                @csrf
                @method('post')

                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body px-4">
                    {{-- <fieldset class="border border-secondary px-3 pb-2">
                        <legend class="p-3 pt-0" style="width: auto; margin-bottom: 0;">
                            <small>Input Data</small>
                        </legend> --}}
                        <div class="form-group row">
                            <label for="nama_unit_kerja" class="col-sm-3 col-form-label">Nama Unit Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_unit_kerja" name="nama_unit_kerja"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                            </div>
                        </div>
                    {{-- </fieldset> --}}
                </div>

                <div class="modal-footer">
                    <div class="pr-2">
                        <button type="button" class="btn btn-sm btn-secondary mr-1 px-3"
                            data-dismiss="modal">Tutup</button>
                        <button class="btn btn-sm btn-primary px-3">Simpan</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>