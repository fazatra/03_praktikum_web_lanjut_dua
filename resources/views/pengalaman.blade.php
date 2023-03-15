@extends('layout.main')
    
@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                @foreach ($datapengalaman1 as $dt1)
                    <h4 style="font-weight: bold">Pengalaman Kuliah Naresh</h4>
                    <hr>
                    <h5 style="font-weight: bold"></h5>
                    Nama Lengkap :   <br>
                    {{$dt1 -> namaLengkap}}
                    <br><hr>
                
                    <h5 style="font-weight: bold"></h5>
                    Nama panggilan :   <br>
                    {{$dt1 -> namaPanggilan}}
                    <br><hr>

                    <h5 style="font-weight: bold"></h5>
                    Umur :   <br>
                    {{$dt1 -> umur}}
                    <br><hr>

                    <h5 style="font-weight: bold"></h5>
                    Pesan :   <br>
                    {{$dt1 -> pesan}}
                    <br><hr>

                @endforeach
                @foreach ($datapengalaman2 as $dt2)
                    <h4 style="font-weight: bold">Pengalaman Kuliah Farhan</h4>
                    <hr>
                    <h5 style="font-weight: bold"></h5>
                    Nama Lengkap :   <br>
                    {{$dt2 -> namaLengkap}}
                    <br><hr>
                
                    <h5 style="font-weight: bold"></h5>
                    Nama panggilan :   <br>
                    {{$dt2 -> namaPanggilan}}
                    <br><hr>

                    <h5 style="font-weight: bold"></h5>
                    Umur :   <br>
                    {{$dt2 -> umur}}
                    <br><hr>

                    <h5 style="font-weight: bold"></h5>
                    Pesan :   <br>
                    {{$dt2 -> pesan}}
                    <br><hr>
                    
                @endforeach
                @foreach ($datapengalaman3 as $dt3)
                    <h4 style="font-weight: bold">Pengalaman Kuliah Khafabi</h4>
                    <hr>
                    <h5 style="font-weight: bold"></h5>
                    Nama Lengkap :   <br>
                    {{$dt3 -> namaLengkap}}
                    <br><hr>
                
                    <h5 style="font-weight: bold"></h5>
                    Nama panggilan :   <br>
                    {{$dt3 -> namaPanggilan}}
                    <br><hr>

                    <h5 style="font-weight: bold"></h5>
                    Umur :   <br>
                    {{$dt3 -> umur}}
                    <br><hr>

                    <h5 style="font-weight: bold"></h5>
                    Pesan :   <br>
                    {{$dt3 -> pesan}}
                    <br><hr>
                
                @endforeach
            </div>
            
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection