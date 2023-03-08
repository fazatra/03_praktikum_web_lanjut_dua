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
                    <h5 style="font-weight: bold">{{$full_nameF}}</h5>
                    Nama panggilan: {{$nameF}}  <br>
                    {{$pengalamanF}}<br><hr>
                
                    <h5 style="font-weight: bold">{{$full_nameN}}</h5>
                    Nama panggilan: {{$nameN}}  <br>
                    {{$pengalamanN}}<br><hr>

                    <h5 style="font-weight: bold">{{$full_nameK}}</h5>
                    Nama panggilan: {{$nameK}}  <br>
                    {{$pengalamanK}} <br><hr>
            </div>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection