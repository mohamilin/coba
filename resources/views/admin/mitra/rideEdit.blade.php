@extends('admin.layouts.master')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title" style="text-align:center; font-size:30px;"><strong>EDIT DATA DRIVER</strong></h3>
    </div>
    <hr>
    <div class="panel-body">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="/ride/{{ $rides->id}}/update" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Driver</label>
                            <input name="id" type="text" value="{{ $rides->id }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID Driver">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Depan</label>
                            <input name="nama_depan" value="{{ $rides->nama_depan }}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Depan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Belakang</label>
                            <input name="nama_belakang" value="{{ $rides->nama_belakang }}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat Email</label>
                            <input name="alamat_email" value="{{ $rides->alamat_email }}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Daerah Orderan</label>
                            <select name="daerah_orderan" value="{{ $rides->daerah_orderan }}" class="form-control select2" style="width: 100%;">
                                <option selected="selected">pilih</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nomor HP</label>
                            <input name="nomor_hp" type="text" value="{{ $rides->nomor_hp }}" class="form-control" id="exampleInputPassword1" placeholder="Nomor HP">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tempat Lahir</label>
                            <input name="tempat_lahir" type="text" value="{{ $rides->tempat_lahir }}" class="form-control" id="exampleInputPassword1" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="text" value="{{ $rides->tgl_lahir }}" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select name="status" value="{{ $rides->status }}" class="form-control select2" style="width: 100%;">
                                    <option selected="selected">pilih</option>
                                    <option>Aktif</option>
                                    <option>Non Aktif</option>
                            </select>
                        </div>         
                        <div class="modal-footer">
                            <a href="{{ url('/ride') }}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size:30px;text-align:center;"><strong>Tambah Data Driver</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            </div>
            </div>
        </div>
</div>
@endsection