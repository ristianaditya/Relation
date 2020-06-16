@extends('layout.main')
<main>

    <head>
        <style>
            .profile-pic {
                display: block;
                max-width: 100%;
            }
        </style>
    </head>
    <section class="bg0 p-t-104 p-b-116" style="background-color:#edf3ff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5" style="margin-bottom:10px;">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                            <h5 class="mb-0 font-weight-bold">MY Photo</h5>
                        </div>
                        <!-- Card image -->
                        <div class="card-body">
                            <div class="small-12 medium-2 large-2 columns">
                                <img class="profile-pic" style="width:100%;height:250px;" src="{{ asset('MDB/photo.jpg') }}"><br>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="card card-cascade narrower">
                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                            <h5 class="mb-0 font-weight-bold">Data Profile</h5>
                        </div>
                        <form action="{{ route('profile.store') }}" method="post">
                        @csrf
                            <!-- Card image -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="last-month" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputEmail2" name="name"
                                            value=""
                                                    placeholder="Masukan Nama Profile">
                                                <div style="color:red;margin-top:10px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NIK </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputEmail2" name="nik"
                                                    value="" placeholder="Masukan NIK">
                                                <div style="color:red;margin-top:10px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">No
                                                Telephone</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="exampleInputEmail2" name="tel"
                                                    value="" placeholder="Masukan Nomer Telephone">
                                                <div style="color:red;margin-top:10px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal Lahir </label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="exampleInputEmail2" name="tgl_lahir"
                                                    value=""
                                                    placeholder="Masukan Tanggal Lahir">
                                                <div style="color:red;margin-top:10px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Alamat </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleInputEmail2" name="alamat"></textarea>
                                                <div style="color:red;margin-top:10px">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>