@extends('index')

@section('title')
  Cam
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
        <h5>Cam</h5>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body text-center">
      <div class="row">
        <div class="col-12">
          <form action="{{ route('cam.create')}}" method="post" id="form">
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
                <select name="tipe" id="tipe" class="form-control" required>
                  <option value="">-- Pilih Data --</option>
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
              <div class="col-12 col-md">
                <input type="number" name="total_produksi" id="total_produksi" class="form-control" required>
              </div>
              <span class="d-none d-md-block col-2">unit</span>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="ratio"><h4>Ratio (Set)</h4></label>
              <div class="col-12 col-md">
                <input type="number" name="ratio" id="ratio" class="form-control" required>
              </div>
              <span class="d-none d-md-block col-2">unit</span>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="overtime"><h4>Overtime</h4></label>
              <div class="col-12 col-md">
                <input type="number" name="overtime" id="overtime" class="form-control" required>
              </div>
              <span class="col-2 d-none d-md-block">Jam</span>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="tack_time"><h4>Tack Time</h4></label>
              <div class="col-12 col-md">
                <input type="number" name="tack_time" id="tack_time" class="form-control" required>
              </div>
              <span class="col-2 d-none d-md-block">Minute</span>
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
        date = $('#tanggal').val();
        var url = "{{ route('cam.check', ":date")}}";
        url = url.replace(":date", date);
        $.ajax({
          url: url,
          method: "GET",
          success: function(data){
            if(data == ''){
              var tgl = $('#tanggal').val();

              $('#form')[0].reset();
              $('#tanggal').val(tgl);
              $('#jam').val(moment().format('HH:mm:ss'));
            }else{
              $('#tanggal').val(data[0]['tanggal']);
              $('#jam').val(data[0]['jam']);
              $('#tipe').val(data[0]['tipe']);
              $('#waktu').val(data[0]['waktu']);
              $('#total_produksi').val(data[0]['total_produksi']);
              $('#ratio').val(data[0]['ratio']);
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