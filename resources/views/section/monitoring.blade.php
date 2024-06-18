@extends('layouts.template')

@section('plugin')
    @vite(['resources/css/plugin/dataTables.min.css', 'resources/js/plugin/dataTables.min.js', 'resources/js/monitoring.js'])
@endsection

@section('section')
    <div class="container-fluid py-3">
        <div class="row mb-2">
            <div class="col-md-3">
                <input type="text" class="form-control search-employee-table--datatable" placeholder="Cari data karyawan disini..">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped text-left employee-table--datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" style="min-width: 180px">Nama</th>
                                <th scope="col" style="min-width: 150px">Tempat Lahir</th>
                                <th scope="col" style="min-width: 150px">Tanggal Lahir</th>
                                <th scope="col">Email</th>
                                <th scope="col" style="min-width: 150px">Phone Number</th>
                                <th scope="col">Dokumen</th>
                                <th scope="col" style="min-width: 150px">Tanggal Masuk</th>
                                <th scope="col" style="min-width: 150px">Akhir Kontrak</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col" style="min-width: 130px">Tempat Kerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $key => $item)
                                <tr>
                                    <th scope="row" class="text-center">{{ $key+1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->place_of_birth }}</td>
                                    <td class="text-center">{{ date('d-M-Y', strtotime($item->date_of_birth)) }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td class="text-center">{{ $item->phone }}</td>
                                    <td class="text-start">-</td>
                                    <td class="text-center">{{ date('d-M-Y', strtotime($item->work_entry_date)) }}</td>
                                    <td class="text-center">{{ date('d-M-Y', strtotime($item->work_end_date)) }}</td>
                                    <td>{{ $item->job }}</td>
                                    <td>{{ $item->workplace }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
