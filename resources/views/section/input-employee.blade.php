@extends('layouts.template')

@section('plugin')
    @vite([
        // 'resources/css/plugin/daterangepicker.css',
        // 'resources/js/plugin/moment.min.js',
        // 'resources/js/plugin/daterangepicker.min.js',
        'resources/js/plugin/select2.min.js',
        'resources/css/plugin/select2.min.css',
        'resources/js/input.js'])
@endsection

@section('section')
    <div class="container-fluid py-3">
        <div class="row mb-2">
            <div class="col-md-2"></div>
            <div class="col-md-8 my-3">

                @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @endif

                @if ($message = Session::get('success'))
                <div class="alert alert-success mb-2" role="alert">
                {{ $message }}
                </div>
                @endif

                <form action="{{ route('input.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="name" class="form-control" id="nama" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir</label>
                                <input type="text" name="place_of_birth" class="form-control" id="tempatLahir" placeholder="Masukkan Tempat Lahir">
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="form-group">
                                <label for="tanggalMasuk">Tanggal Lahir</label>
                                <input type="date" name="date_of_birth" class="form-control" id="tanggalMasuk">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="phoneNumber" placeholder="Masukkan Nomor Telepon" maxlength="13">
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label for="dokumen">Dokumen</label><br>    
                                <input type="file" class="form-control-file" id="dokumen">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="tanggalMasuk">Tanggal Masuk</label>
                                <input type="date" name="work_entry_date" class="form-control" id="tanggalMasuk">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="tanggalKeluar">Tanggal Keluar</label>
                                <input type="date" name="work_end_date" class="form-control" id="tanggalKeluar">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label><br>
                                <select name="job" class="form-control select-employee-job--select2" id="pekerjaan">
                                    <option value="">Pilih...</option>
                                    <option value="Pekerjaan 1">Pekerjaan 1</option>
                                    <option value="Pekerjaan 2">Pekerjaan 2</option>
                                    <option value="Pekerjaan 3">Pekerjaan 3</option>
                                    <option value="Pekerjaan 4">Pekerjaan 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempatKerja">Tempat Kerja</label><br>
                                <select name="workplace" class="form-control select-workplace--select2" id="tempatKerja">
                                    <option value="">Pilih...</option>
                                    <option value="Kantor 1">Kantor 1</option>
                                    <option value="Kantor 2">Kantor 2</option>
                                    <option value="Kantor 3">Kantor 3</option>
                                    <option value="Kantor 4">Kantor 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
