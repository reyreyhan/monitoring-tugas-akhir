<!DOCTYPE html>
<html lang="en">

<head>
@include('include.head')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
@include('include.headerkoor')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
    <h1 class="mb-3">Tambah Pengumuman</h1>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10 col-xs-6 ">

            <div class="col-lg-12">

              <form action="{{ url('/koor/pengumuman')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post')}}

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Judul Pengumuman</label>
                  <div class="col-sm-6">
                    <input required type="text" class="form-control" id="colFormLabel" placeholder="Masukkan Judul Pengumuman" name="judul">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Isi</label>
                  <div class="col-sm-6">
                    <textarea required type="text" class="form-control" id="colFormLabel" placeholder="Masukkan Isi Pengumuman" rows="5" name="pengumuman"></textarea>
                  </div>
                </div>


                <div class="col-12 mt-3 text-center">
                    <button type="submit" name="button" class="col-sm-2 btn btn-primary">submit</button>
                </div>


              </form>

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
