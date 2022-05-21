@extends('templates/siswa_temp')

@section('container')

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h4>Form Hitung IMT</h4>
		</div>
		<div class="section-body">
			<div class="row">	
				<div class="col-6">
						<div class="card-deck">
						<div class="card">
                        <div class="card-body">
							<form action="" method="get">
                                     <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jk"  class="form-control text-dark" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Usia (tahun)</label>
                                        <input type="text" name="usia"  class="form-control text-dark" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tinggi Badang (cm)</label>
                                        <input type="number" name="tb"   class="form-control text-dark" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Berat Badan (kg)</label>
                                        <input type="number" name="bb"   class="form-control text-dark" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="date" name="tanggal"   class="form-control text-dark" value="">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">	
                                            <button type="submit" name="proses" class="btn btn-info form-control">SIMPAN</button>
                                        </div>
                                    </div>  
                                    <?php 
    if(isset($_GET['proses'])){
        $tbp = $_GET['tb'];
        $bb = $_GET['bb'];

        $tb = $tbp/100;
        $hitung = $bb / ($tb * $tb);
        if($hitung <= 18.4){
        echo'
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Tinggi Badan: '.$tbp.' Cm<br>
            Berat Badan : '.$bb.' Kg<br>
            BMI         : '.number_format($hitung,1).'<br>
            Keterangan : Kurus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
         ';
        }elseif($hitung <= 25){
          echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Tinggi Badan: '.$tbp.' Cm<br>
              Berat Badan : '.$bb.' Kg<br>
              BMI         : '.number_format($hitung,1).'<br>
              Keterangan : Normal
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
           </div>
           ';
        }elseif($hitung <= 27){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Tinggi Badan: '.$tbp.' Cm<br>
                Berat Badan : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Keterangan : Gemuk
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }elseif($hitung > 27 ){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Tinggi Badan: '.$tbp.' Cm<br>
                Berat Badan : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Keterangan : Obesitas
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }
    }?>
							</form>
                          </div>               
						</div>
					</div>
                
                
                
                
                </div>
			</div>
		</div>
	</section>
</div>

@endsection