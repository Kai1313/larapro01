@extends('admin_template')
@section('content')
   <div class="row">
     <div class="col-md-4 col-xs-12">
       <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Form Master Driver</h3>
        </div>
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label>Kode</label>
              <input type="text" name="kode_driver" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_driver" class="form-control">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat_driver" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label>Kota</label>
              <input type="text" name="kota_driver" class="form-control">
            </div>
            <div class="form-group">
              <label>Telepon</label>
              <input type="text" name="tlp_driver" class="form-control">
            </div>
            <div class="form-group">
              <label>Jenis</label>
              <input type="text" name="jenis_driver" class="form-control">
            </div>
          </div>
        </form>
       </div>
     </div>
     <div class="col-md-8 col-xs-12">
      <div class="box">
        <div class="box-body">
          <table id="m_driver" class="table table-bordered table-striped" cellpadding="0" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Kota</th>
                <th class="text-center">Telepon</th>
                <th class="text-center">Jenis</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td class="text-center">BRG001</td>
                <td class="text-center">BARANG A</td>
                <td class="text-center">09876</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1A</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">2</td>
                <td class="text-center">BRG002</td>
                <td class="text-center">BARANG B</td>
                <td class="text-center">09866</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1A</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">3</td>
                <td class="text-center">BRG003</td>
                <td class="text-center">BARANG C</td>
                <td class="text-center">06876</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1A</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">4</td>
                <td class="text-center">BRG004</td>
                <td class="text-center">BARANG A</td>
                <td class="text-center">09872</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1A</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">5</td>
                <td class="text-center">BRG005</td>
                <td class="text-center">BARANG E</td>
                <td class="text-center">19876</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1A</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">6</td>
                <td class="text-center">BRG006</td>
                <td class="text-center">BARANG F</td>
                <td class="text-center">07876</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1B</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">7</td>
                <td class="text-center">BRG007</td>
                <td class="text-center">BARANG G</td>
                <td class="text-center">09816</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1B</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">8</td>
                <td class="text-center">BRG008</td>
                <td class="text-center">BARANG H</td>
                <td class="text-center">29876</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1B</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">9</td>
                <td class="text-center">BRG009</td>
                <td class="text-center">BARANG I</td>
                <td class="text-center">39876</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1B</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">10</td>
                <td class="text-center">BRG010</td>
                <td class="text-center">BARANG J</td>
                <td class="text-center">09873</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1B</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">11</td>
                <td class="text-center">BRG011</td>
                <td class="text-center">BARANG K</td>
                <td class="text-center">09176</td>
                <td class="text-center">1</td>
                <td class="text-center">4</td>
                <td class="text-center">1C</td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary">Edit</button>
                  <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>        
     </div>
   </div>
@endsection