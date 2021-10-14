@extends('layouts.app', ['activePage' => 'bil-rawatan', 'titlePage' => 'Bil Rawatan'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Senarai Bil Rawatan</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="zero_config">
                            <thead class="text-primary">
                                <tr>
                                    <th>
                                        Bil
                                    </th>
                                    <th>
                                        Nama Pegawai / Jawatan
                                    </th>
                                    <th>
                                        Nama Pesakit
                                    </th>
                                    <th>
                                        Jabatan Terkini
                                    </th>
                                    <th>
                                        Tarikh Bil
                                    </th>
                                    <th>
                                        Jumlah Tuntutan / No Bil
                                    </th>
                                    <th>
                                        Tindakan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bilrawatan as $index => $br)
                                    <tr>
                                        <th>
                                            {{ $index + 1 }}
                                        </th>
                                        <th>
                                            {{ $br->nama }}
                                        </th>
                                        <th>
                                            @if ($br->id_waris <> null)
                                            {{ $br->nama_waris }}
                                            @else
                                            {{ $br->nama }}
                                            @endif
                                        </th>
                                        <th>
                                            {{ $br->namaJabatan }}
                                        </th>
                                        <th>
                                            {{ $br->tarikh_bil }}
                                        </th>
                                        <th>
                                            RM {{ $br->jumlah_bil }} <br> No Bil : {{ $br->no_bil }}
                                        </th>
                                        <td class="td-actions text-right">
                                            <a class="btn btn-info btn-sm"
                                                href="{{ url('butiran-rawatan', [$br->idRawatan]) }}"
                                                role="button">Butiran
                                            </a>
                                            </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
