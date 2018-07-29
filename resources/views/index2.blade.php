<!DOCTYPE html>
<html lang="en">

<head>
@include('include.head')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
@include('include.header')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

    @if($data3[0]->status == 0 || $data3[0]->status == 3)
    <h1 class="mb-3">Update Judul TA</h1>
      @if($data3[0]->status == 3)
      <h3 class="mb-3">Judul TA di Tolak, Silahlkan Update Judul TA Anda</h3>
      @endif
    @elseif($data3[0]->status == 1)
    <h1 class="mb-3">Anda Sudah Submit Judul TA</h1>
    <h3 class="mb-3">Silahkan Tunggu di Approve</h3>
    @elseif($data3[0]->status == 2)
    <h1 class="mb-3">Selamat TA Anda di Approve</h1>
    @endif
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10 col-xs-6 ">

            <div class="col-lg-12">


                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Judul Tugas Akhir : {{ $data3[0]->judul }}</label>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Abstrak : {{ $data3[0]->abstrak }}</label>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 1 : {{ $data3[0]->dos1->nama }}</label>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 2 : {{ $data3[0]->dos2->nama }}</label>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 3 : {{ $data3[0]->dos3->nama }}</label>
                </div>

                <div class="form-group row" name="dosen4">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 4 : {{ $data3[0]->dos4->nama }}</label>
                </div>

                @if($data3[0]->status == 0 || $data3[0]->status == 3 )
                <div class="col-12 mt-3 text-center">
                    <a href="{{ url('pengajuan/update')}}">
                      <button type="submit" name="button" class="col-sm-2 btn btn-primary">Update</button>
                    </a>
                </div>
                @endif

            </div>
      <!-- Area Chart Example-->


      <!-- Example DataTables Card-->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('include.footer')
  </div>
</body>

</html>
