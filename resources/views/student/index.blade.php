@extends('layout.main')
<main>
    <div class="card card-cascade narrower">
        <!-- Card image -->
        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
            <h5 class="mb-0 font-weight-bold">Data Siswa</h5>
        </div>
        <!-- Card image -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card-body">
                    <table class="table table-hover" style="background-color: white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">TGL Lahir</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $item->name_student }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>