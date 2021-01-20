@extends('layouts.admin.master')

@section('content')
<div class="card">
                                    <div class="card-header">
                                        Tambah
                                        <strong>Kelas</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="kelas" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="input-normal" placeholder="Masukkan Kelas" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-sm-5">
                                                    <label for="jurusan" class=" form-control-label">Jurusan</label>
                                                </div>
                                                <div class="col col-sm-6">
                                                    <input type="text" id="input-normal" name="input-normal" placeholder="Masukkan Jurusan" class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <a href="/admin/list_class" " class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </a>
                                    </div>
                                </div>
                                @endsection