@extends('layout.main')

@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                
                    <h4 style="font-weight: bold">Pengalaman Kuliah</h4>
                    <hr>
                    <h5 style="font-weight: bold">Pengalaman {{ $rfull_name }}</h5>
                    Nama panggilan: {{ $rname }}  <br><br>
                    {{ $rpengalaman }}<br><hr> <br>

                    <h5 style="font-weight: bold">Pengalaman {{ $sfull_name }}</h5>
                    Nama panggilan: {{ $sname }} <br><br>
                    {{ $spengalaman }}<br><hr><br>

                    <h5 style="font-weight: bold">Pengalaman {{ $zfull_name }}</h5>
                    Nama panggilan: {{ $zname }} <br><br>
                    {{ $zpengalaman }}<br> <br>

                    
                    
                    
                
                <br>
            </div>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection