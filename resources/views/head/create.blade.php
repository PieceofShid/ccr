@extends('index')

@section('title')
  Head
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
        <h5>Head</h5>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body text-center">
      <div class="row">
        <div class="col-12">
          <form action="{{ route('head.create')}}" method="post" id="form">
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
            <div class="row">
              <div class="col-12 col-md">
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="total_produksi"><h4>Total Produksi</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="total_produksi" id="total_produksi" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="satu_tr_kai_lai"><h4>1TR Kai Lai</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="satu_tr_kai_lai" id="satu_tr_kai_lai" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="satu_tr_kai_wai"><h4>1TR Kai Wai</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="satu_tr_kai_wai" id="satu_tr_kai_wai" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="satu_tr_less_pipe"><h4>1TR Less Pipe</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="satu_tr_less_pipe" id="satu_tr_less_pipe" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="satu_tr_reguler_lai"><h4>1TR Reguler Lai</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="satu_tr_reguler_lai" id="satu_tr_reguler_lai" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="satu_tr_reguler_wai"><h4>1TR Reguler Wai</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="satu_tr_reguler_wai" id="satu_tr_reguler_wai" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
              </div>
              <div class="col-12 col-md">
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="ratio_1tr"><h4>Ratio (1TR : 2TR)</h4></label>
                  <div class="col-12 col-md">
                    <div class="row">
                      <div class="col">
                        <input type="number" name="ratio_1tr" id="ratio_1tr" class="form-control" required>
                      </div>
                      <div class="col">
                        <input type="number" name="ratio_2tr" id="ratio_2tr" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="dua_tr_kai_lai"><h4>2TR Kai Lai</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="dua_tr_kai_lai" id="dua_tr_kai_lai" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="dua_tr_kai_wai"><h4>2TR Kai Wai</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="dua_tr_kai_wai" id="dua_tr_kai_wai" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="dua_tr_less_pipe"><h4>2TR Less Pipe</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="dua_tr_less_pipe" id="dua_tr_less_pipe" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="dua_tr_reguler_lai"><h4>2TR Reguler Lai</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="dua_tr_reguler_lai" id="dua_tr_reguler_lai" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="dua_tr_reguler_wai"><h4>2TR Reguler Wai</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="dua_tr_reguler_wai" id="dua_tr_reguler_wai" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="dua_tr_ethanol"><h4>2TR Ethanol</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="dua_tr_ethanol" id="dua_tr_ethanol" class="form-control" required>
                  </div>
                  <span class="d-none d-md-block col-2">unit</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="tack_time"><h4>Tack Time</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="tack_time" id="tack_time" class="form-control" required>
                  </div>
                  <span class="col-2 d-none d-md-block">Minute</span>
                </div>
              </div>
              <div class="col">
                <div class="form-group row">
                  <label class="col-12 col-md-4 col-form-label" for="overtime"><h4>Overtime</h4></label>
                  <div class="col-12 col-md">
                    <input type="number" name="overtime" id="overtime" class="form-control" required>
                  </div>
                  <span class="col-2 d-none d-md-block">Jam</span>
                </div>
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
        date = $('#tanggal').val();
        var url = "{{ route('head.check', ":date")}}";
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
              $('#satu_tr_kai_lai').val(data[0]['satu_tr_kai_lai']);
              $('#satu_tr_kai_wai').val(data[0]['satu_tr_kai_wai']);
              $('#satu_tr_less_pipe').val(data[0]['satu_tr_less_pipe']);
              $('#satu_tr_reguler_lai').val(data[0]['satu_tr_reguler_lai']);
              $('#satu_tr_reguler_wai').val(data[0]['satu_tr_reguler_wai']);
              $('#ratio_1tr').val(data[0]['ratio_1tr']);
              $('#ratio_2tr').val(data[0]['ratio_2tr']);
              $('#dua_tr_kai_lai').val(data[0]['dua_tr_kai_lai']);
              $('#dua_tr_kai_wai').val(data[0]['dua_tr_kai_wai']);
              $('#dua_tr_less_pipe').val(data[0]['dua_tr_less_pipe']);
              $('#dua_tr_reguler_lai').val(data[0]['dua_tr_reguler_lai']);
              $('#dua_tr_reguler_wai').val(data[0]['dua_tr_reguler_wai']);
              $('#dua_tr_ethanol').val(data[0]['dua_tr_ethanol']);
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