@extends('index')

@section('title')
  Block
@endsection

@section('content')
  <div class="card mb-4">
    @php
      if(session('error')){
        echo '<div class="card-body">
                <div class="alert alert-success">'.session('error').'</div>
              </div>';
      }elseif(session('success')){
        echo '<div class="card-body">
                <div class="alert alert-success">'.session('success').'</div>
              </div>';
      }
    @endphp
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center">
        <h5>Block</h5>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body text-center">
      <div class="row">
        <div class="col-12">
          <form action="{{ route('block.create')}}" method="post" id="form">
            @csrf
            @method('post')
                        <div class="form-group row">
              <div class="col-12 col-md mt-2">
                <input type="date" name="tanggal" id="tanggal" class="form-control" onchange="checkData()" required>
              </div>
              <div class="col-12 col-md mt-2">
                <input type="text" name="jam" id="jam" class="form-control" required>
              </div>
              <div class="col-12 col-md mt-2">
                <select name="tipe" id="tipe" class="form-control" onchange="checkData()" required>
                  <option value="NULL">-- Pilih Data --</option>
                  <option value="RED">RED</option>
                  <option value="WHITE">WHITE</option>
                </select>
              </div>
              <div class="col-12 col-md mt-2">
                <select name="waktu" id="waktu" class="form-control" required>
                  <option value="">-- Pilih Data --</option>
                  <option value="SIANG">SIANG</option>
                  <option value="MALAM">MALAM</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="total_produksi"><h4>Total Produksi</h4></label>
              <div class="col-12 col-md d-flex justify-content-between align-items-center">
                <input type="number" name="total_produksi" id="total_produksi" class="form-control" required>
                <span class="d-none d-md-block col ml-2">unit</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="ratio_1tr"><h4>Ratio (1TR : 2TR)</h4></label>
              <div class="col-12 col-md d-flex justify-content-between align-items-center">
                <input type="number" name="ratio_1tr" id="ratio_1tr" class="form-control" required>
                <span class="mx-2">:</span>
                <input type="number" name="ratio_2tr" id="ratio_2tr" class="form-control" required>
                <span class="d-none d-md-block col ml-2">unit</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="satu_tr"><h4>1TR</h4></label>
              <div class="col-12 col-md d-flex justify-content-between align-items-center">
                <input type="number" name="satu_tr" id="satu_tr" class="form-control" required>
                <span class="d-none d-md-block col ml-2">unit</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="dua_tr"><h4>2TR</h4></label>
              <div class="col-12 col-md d-flex justify-content-between align-items-center">
                <input type="number" name="dua_tr" id="dua_tr" class="form-control" required>
                <span class="d-none d-md-block col ml-2">unit</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="overtime"><h4>Overtime</h4></label>
              <div class="col-12 col-md d-flex justify-content-between align-items-center">
                <input type="number" name="overtime" id="overtime" class="form-control" step="any" required>
                <span class="col d-none d-md-block ml-2">Jam</span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="tack_time"><h4>Tack Time</h4></label>
              <div class="col-12 col-md d-flex justify-content-between align-items-center">
                <input type="number" name="tack_time" id="tack_time" class="form-control" step="any" required>
                <span class="col d-none d-md-block ml-2">Minute</span>
              </div>
            </div>
            <a href="#" class="btn btn-warning">CANCEL</a>
            <button type="submit" class="btn btn-success">SAVE</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
    <script>

      $(document).ready(function(){
        $('#tanggal').val(moment().format('YYYY-MM-DD'));
        
        checkData();
      });

      function checkData(){
        var date = $('#tanggal').val();
        var tipe = $('#tipe').val();
        var url = "{{ route('block.check', [":date", ":tipe"])}}";
        url = url.replace(":date", date).replace(":tipe", tipe);
        $.ajax({
          url: url,
          method: "GET",
          success: function(data){
            if(data == ''){
              var tgl = $('#tanggal').val();
              var tp  = $('#tipe').val();

              $('#form')[0].reset();
              $('#tanggal').val(tgl);
              $('#tipe').val(tp);
              $('#jam').val(moment().format('HH:mm:ss'));
            }else{
              $('#tanggal').val(data[0]['tanggal']);
              $('#jam').val(data[0]['jam']);
              $('#tipe').val(data[0]['tipe']);
              $('#waktu').val(data[0]['waktu']);
              $('#total_produksi').val(data[0]['total_produksi']);
              $('#ratio_1tr').val(data[0]['ratio_1tr']);
              $('#ratio_2tr').val(data[0]['ratio_2tr']);
              $('#satu_tr').val(data[0]['satu_tr']);
              $('#dua_tr').val(data[0]['dua_tr']);
              $('#overtime').val(data[0]['overtime']);
              $('#tack_time').val(data[0]['tack_time']);
            }
          },error: function(){
            alert('error');
          }
        })
      }
    </script>
@endsection