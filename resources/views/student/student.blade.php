@extends('layout.main')
<main>
    <div class="card card-cascade narrower">
        <!-- Card image -->
        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
            <h5 class="mb-0 font-weight-bold">Data Student</h5>
        </div>
        <!-- Card image -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card-body">
                    <table class="table table-hover  container" style="background-color: white">
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
                                <th scope="row">{{[$item->name_student]}}</th>
                                <th scope="row">{{$item->tgl_lahir}}</th>
                                <th scope="row">{{$item->alamat}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>