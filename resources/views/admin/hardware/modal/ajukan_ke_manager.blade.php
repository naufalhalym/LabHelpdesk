<!-- Modal permintaan instalasi software -->
<div class="modal fade" id="ajukan_ke_manager_{{ $data->id_permintaan }}" tabindex="-1" role="dialog"
    aria-labelledby="ajukan_ke_manager_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ajukan_ke_manager_label">Ajukan Rekomendasi Pengecekan Hardware</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="signature-pad">
                <form action="/admin/tindak_lanjut_hardware/{id_permintaan}" method="POST" id="form-instalasi-software"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="detail_admin">
                        <h6>Direkomendasikan oleh</h6>
                        <input hidden id="id_permintaan" name="id_permintaan" value="{{ $data->id_permintaan }}">
                        <input hidden id="id_otorisasi" name="id_otorisasi" value="{{ $data->id_otorisasi }}">

                        <div class="row">
                            <div class="form-group col-sm-5">
                                <label for="nip">NIP</label>
                                <input disabled type="text" class="form-control" id="nip_pegawai" name="nip"
                                    placeholder="Masukkan NIP" maxlength="5" required
                                    value="{{ Auth::user()->pegawai->nip }}">
                            </div>

                            <div class="form-group col-sm-7">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama_pegawai" name="nama"
                                    placeholder="Nama" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-5">
                                <label for="bagian">Bagian</label>
                                <input type="text" class="form-control" id="bagian_pegawai" name="bagian"
                                    placeholder="Bagian" disabled>
                            </div>

                            <div class="form-group col-sm-7">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan_pegawai" name="jabatan"
                                    placeholder="Jabatan" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Laboratorium</label>
                            <input type="text" class="form-control" id="lokasi_pegawai" name="lokasi"
                                placeholder="Lokasi" disabled>
                        </div>
                        <hr>

                        <div class="form-group mt-3">
                            <label for="rekomendasi">Rekomendasi<span class="text-danger">*</span></label>
                            <textarea class="form-control @error('rekomendasi') is-invalid @enderror" name="rekomendasi" id="rekomendasi"
                                cols="20" rows="5">{{ old('rekomendasi') }}</textarea>
                            @error('rekomendasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="small text-danger">*Isi rekomendasi hasil pengecekan hardware</span>
                        </div>

                        <hr>

                        <div class="form-group text-center">
                            <label for="">Tanda Tangan</label>
                            <div>
                                <div id="note">Silakan tanda tangan di area kolom ini</div>
                                <canvas onmouseover="my_function();" id="the_canvas" class="form-ttd isi-ttd"
                                    height="150px"></canvas>
                            </div>
                            <div style="margin:10px;">
                                <input type="hidden" id="signature" name="signature">
                                <button type="button" id="clear_btn" class="btn btn-danger"
                                    data-action="clear">Clear</button>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer p-0">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-sm btn-primary" id="btn-simpan">Ajukan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Perulangan untuk cek error --}}
<?php $listError = ['rekomendasi']; ?>
@foreach ($listError as $err)
    @error($err)
        <script type="text/javascript">
            window.onload = function() {
                OpenBootstrapPopup();
            };

            function OpenBootstrapPopup() {
                $("#ajukan_ke_manager_{{ $data->id_permintaan }}").modal('show');
            }
        </script>
    @break
@enderror
@endforeach
