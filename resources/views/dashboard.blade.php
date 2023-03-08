<script>
  alert('Selamat Datang');
</script>

@extends('layout.main')

@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                <h4 style="font-weight: bold">Selamat Datang</h4>
                <style>
        .mycards {
            margin: 60px auto 0px auto;
            width: 45%;
            max-width: 1200px;
        }

    </style>
    <div class="mycards">
        <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col">
                <div class="card" style="width: 15rem;">
                    <img src="/FotoKTM.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Farhan Riza Putra</h5>
                        <p class="card-text">
                            NIM &ensp;&ensp;: 2141720197 <br>
                            Kelas&ensp;&ensp;: TI-2F <br>
                            Absen&ensp;: 19
                        </p>
                        
            </div>
        </div>
        <!-- /.content -->
    </div>
</section>
  <!-- /.content-wrapper -->
@endsection