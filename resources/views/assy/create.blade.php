@extends('index')

@section('title')
  Assy
@endsection

@section('content')
  <div class="card mb-4">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center">
        <h5>Assy</h5>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body text-center">
      <div class="row">
        <div class="col-12">
          <form action="{{ route('assy.create')}}" method="post">
            @csrf
            @method('post')
            <div class="form-group row">
              <div class="col-12 col-md mt-2">
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
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
              <span class="d-none d-md-block col">unit</span>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="ratio_1tr"><h4>Ratio (1TR : 2TR)</h4></label>
              <div class="col-12 col-md">
                <div class="row">
                  <div class="col">
                    <input type="number" name="ratio_1tr" id="ratio_1tr" class="form-control" required>
                  </div>
                  <div class="col">
                    <input type="number" name="ratio_2tr" id="ratio_1tr" class="form-control" required>
                  </div>
                </div>
              </div>
              <span class="d-none d-md-block col">unit</span>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="satu_tr"><h4>1TR</h4></label>
              <div class="col-12 col-md">
                <input type="number" name="satu_tr" id="satu_tr" class="form-control" required>
              </div>
              <span class="d-none d-md-block col">unit</span>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="dua_tr"><h4>2TR</h4></label>
              <div class="col-12 col-md">
                <input type="number" name="dua_tr" id="dua_tr" class="form-control" required>
              </div>
              <span class="d-none d-md-block col">unit</span>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="overtime"><h4>Overtime</h4></label>
              <div class="col-12 col-md">
                <input type="number" name="overtime" id="overtime" class="form-control" required>
              </div>
              <span class="col d-none d-md-block">Jam</span>
            </div>
            <div class="form-group row">
              <label class="col-12 col-md-4 col-form-label" for="tack_time"><h4>Tack Time</h4></label>
              <div class="col-12 col-md">
                <input type="number" name="tack_time" id="tack_time" class="form-control" required>
              </div>
              <span class="col d-none d-md-block">Minute</span>
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
        var date = moment().format('YYYY-MM-DD');
        $('#tanggal').val(date);
        
        window.setInterval(function () {
          $('#jam').val(moment().format('HH:mm:ss'));
      }, 1000);
      });
    </script>
@endsection