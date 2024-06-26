@foreach ($permintaan as $data)
    <script>
        $(function() {
            $('#detail_permintaan_{{ $data->id_permintaan }}').hide();
            $('#detail_pegawai_{{ $data->id_permintaan }}').hide();
            $('#tombol_detail_permintaan{{ $data->id_permintaan }}').hide();
            $('#tombol_detail_pegawai_{{ $data->id_permintaan }}').hide();
        });
    </script>

    <!-- Modal permintaan instalasi software -->
    <div class="modal fade" id="detail_permintaan_hardware_{{ $data->id_permintaan }}" tabindex="-1" role="dialog"
        aria-labelledby="detail_permintaan_hardware_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detail_permintaan_hardware_label">Permintaan Pengecekan Hardware</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="signature-pad">
                    <div id="detail_barang_{{ $data->id_permintaan }}">
                        <h5>Informasi Hardware</h5>
                        <div class="form-group">
                            <label for="kode_barang">No. Aset / Inventaris / Serial Number</label>
                            <input disabled class="form-control" value="{{ $data->kode_barang }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input disabled class="form-control" value="{{ $data->nama_barang }}">
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan</label>
                            <textarea disabled class="form-control" rows="3">{{ $data->keluhan_kebutuhan }}</textarea>
                        </div>
                        <div class="d-flex justify-content-end my-2"
                            id="tombol_detail_barang_{{ $data->id_permintaan }}">
                            <button type="button" class="btn btn-sm btn-primary"
                                id="btn_lanjut_2_{{ $data->id_permintaan }}">Lanjut <i
                                    class="fas fa-arrow-right"></i></button>
                        </div>

                    </div>

                    <div id="detail_pegawai_{{ $data->id_permintaan }}">
                        <h6>Pengajuan Permintaan</h6>
                        <div class="row">
                            <div class="form-group col-sm-5">
                                <label for="nip">NIP</label>
                                <input disabled class="form-control" value="{{ $data->nip }}">
                            </div>

                            <div class="form-group col-sm-7">
                                <label for="nama">Nama</label>
                                <input class="form-control" value="{{ $data->nama }}" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-5">
                                <label for="bagian">Bagian</label>
                                <input class="form-control" value="{{ $data->bagian }}" disabled>
                            </div>

                            <div class="form-group col-sm-7">
                                <label for="jabatan">Jabatan</label>
                                <input class="form-control" value="{{ $data->jabatan }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Laboratorium</label>
                            <input class="form-control" value="{{ $data->nama_stasiun }}" disabled>
                        </div>
                        <hr>

                        <div class="form-group text-center">

                            <figcaption class="mb-2">Tanda Tangan</figcaption>
                            <div class="border rounded p-2">
                                <img class="gambar_ttd"
                                    src="{{ asset('tandatangan/pengecekan_hardware/requestor/' . $data->ttd_requestor) }}"
                                    title="Tanda tangan {{ $data->nama }}" oncontextmenu="return false;"
                                    ondragstart="return false;">
                                <figcaption>{{ $data->nama }}</figcaption>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end my-2"
                            id="tombol_detail_pegawai_{{ $data->id_permintaan }}">
                            <button type="button" class="btn btn-sm btn-danger mr-1"
                                id="tombol_kembali{{ $data->id_permintaan }}"><i class="fas fa-arrow-left"></i>
                                Kembali</button>
                        </div>

                    </div>

                    {{-- UNTUK MENAMPILKAN VIEW CETAK FORM INSTALASI SOFTWARE --}}
                    <div class="overlay" id="overlay_{{ $data->id_permintaan }}">
                        <div class="iframe-container">
                            <a id="tombol_print_{{ $data->id_permintaan }}" href="#" target="_blank"
                                class="btn btn-sm bg-primary text-white tombol-print"
                                title="Cetak Form Pengecekan Hardware"
                                onclick="cetakPDF(event, '/form_pengecekan_hardware/{{ $data->id_permintaan }}')">
                                <i class="fas fa-file-pdf"></i> Cetak Dokumen
                            </a>
                            <button id="tutup_form_software_{{ $data->id_permintaan }}"
                                class="btn btn-sm bg-danger text-white tutup-form-software" title="Tutup Iframe">
                                <i class="fas fa-times"></i>
                            </button>
                            <iframe id="myIframe_{{ $data->id_permintaan }}" src=""
                                style="display: none;"></iframe>
                        </div>
                    </div>
                    {{-- END OF OVERLAY --}}

                    <div class="modal-footer d-flex justify-content-between">
                        <button id="view_form_hardware_{{ $data->id_permintaan }}"
                            class="btn btn-sm bg-primary text-white rounded tombol-cetak-hardware"
                            title="Cetak Form Pengecekan Hardware" onclick="loadIframe({{ $data->id_permintaan }})"><i
                                class="fa fa-print"></i> Form
                            Pengecekan Hardware
                        </button>
                        <button data-dismiss="modal" class="btn btn-sm bg-secondary text-white rounded">
                            Tutup
                        </button>
                    </div>
                    {{-- script untuk fungsi iframe agar diload hanya pada saat tombol print diklik --}}
                    <script>
                        function loadIframe(id_permintaan) {
                            var iframe = document.getElementById("myIframe_" + id_permintaan);
                            var iframeSrc = "/form_pengecekan_hardware/" + id_permintaan;
                            iframe.src = iframeSrc;
                            iframe.style.display = "block";
                        }

                        // Event listener untuk tombol "Form Pengecekan Hardware"
                        var viewFormSoftwareButtons = document.getElementsByClassName("tombol-cetak-hardware");
                        for (var i = 0; i < viewFormSoftwareButtons.length; i++) {
                            viewFormSoftwareButtons[i].addEventListener("click", function() {
                                var id_permintaan = this.id.split("_")[3];
                                loadIframe(id_permintaan);
                            });
                        }
                    </script>


                </div>
            </div>
        </div>
    </div>

    <script>
        function cetakPDF(event, url) {
            event.preventDefault(); // Mencegah tautan terbuka di tab baru

            // Buat elemen <iframe> dengan URL tujuan cetak
            const iframe = document.createElement('iframe');
            iframe.style.display = 'none';
            iframe.src = url;

            // Tambahkan elemen <iframe> ke dalam dokumen
            document.body.appendChild(iframe);

            // Setelah elemen <iframe> selesai dimuat, lakukan aksi cetak
            iframe.onload = function() {
                iframe.contentWindow.print();
            };

            // Hapus elemen <iframe> setelah cetak selesai
            iframe.onafterprint = function() {
                document.body.removeChild(iframe);
            };
        }

        // Tangani klik tombol Tampilkan Iframe
        document.getElementById('view_form_hardware_{{ $data->id_permintaan }}').addEventListener('click', function() {
            // Tampilkan overlay
            document.getElementById('overlay_{{ $data->id_permintaan }}').style.display = 'block';
        });

        // Tangani klik tombol Tutup Iframe
        document.getElementById('tutup_form_software_{{ $data->id_permintaan }}').addEventListener('click', function() {
            // Sembunyikan overlay_{{ $data->id_permintaan }}
            document.getElementById('overlay_{{ $data->id_permintaan }}').style.display = 'none';
        });
    </script>

    <script>
        $(function() {
            // handler untuk tombol kembali 1
            $('#tombol_kembali{{ $data->id_permintaan }}').click(function() {
                $('#detail_barang_{{ $data->id_permintaan }}').show();
                $('#detail_permintaan_{{ $data->id_permintaan }}').hide();
                $('#detail_pegawai_{{ $data->id_permintaan }}').hide();

                $('#tombol_detail_barang_{{ $data->id_permintaan }}').show();
                $('#tombol_detail_permintaan{{ $data->id_permintaan }}').hide();
            });

            // handler untuk tombol lanjut 2
            $('#btn_lanjut_2_{{ $data->id_permintaan }}').click(function() {
                $('#detail_barang_{{ $data->id_permintaan }}').hide();
                $('#detail_permintaan_{{ $data->id_permintaan }}').hide();
                $('#detail_pegawai_{{ $data->id_permintaan }}').show();


                $('#tombol_detail_pegawai_{{ $data->id_permintaan }}').show();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Handler tombol Tutup
            $('#detail_permintaan_hardware_{{ $data->id_permintaan }}').on('hidden.bs.modal', function() {
                $(this).find('input[type=text]').not(
                    '#detail_pegawai_{{ $data->id_permintaan }} input[type=text]').val('');
                // $(this).find('button[type=submit]').prop('disabled', true);
                $('#detail_barang_{{ $data->id_permintaan }}').show();
                $('#detail_permintaan_{{ $data->id_permintaan }}').hide();
                $('#detail_pegawai_{{ $data->id_permintaan }}').hide();

                // hapus centang pada setiap checkbox
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = false;
                });
                // kosongkan textarea
                uraianKebutuhanTextarea.value = '';

                $('#btn_lanjut_2_{{ $data->id_permintaan }}').prop('disabled', true);
            });
        });
    </script>
@endforeach
