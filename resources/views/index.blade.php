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
    <h1 class="mb-3">Pengajuan Judul TA</h1>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-8 col-xs-6 ">

            <div class="col-lg-12">

              <form action="{{ url('/test2')}}" method="post">
                {{ csrf_field() }}
                {{ method_field('post')}}

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Judul Tugas Akhir</label>
                  <div class="col-sm-6">
                    <input required type="text" class="form-control" id="colFormLabel" placeholder="Masukkan Judul Tugas Akhir Anda">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Abstrak</label>
                  <div class="col-sm-6">
                    <textarea required type="text" class="form-control" id="colFormLabel" placeholder="Ketikkan Abstrak Tugas Akhir Anda" rows="5"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 1</label>
                  <div class="col-sm-6">
                    <select required class="custom-select">
                      <option selected>Null</option>
                      <option value="1">lalalaalalalalalalalalaalalal</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 2</label>
                  <div class="col-sm-6">
                    <select required class="custom-select">
                      <option selected>Null</option>
                      <option value="1">lalalaalalalalalalalalaalalal</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 3</label>
                  <div class="col-sm-6">
                    <select class="custom-select">
                      <option selected>Null</option>
                      <option value="1">lalalaalalalalalalalalaalalal</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 4</label>
                  <div class="col-sm-6">
                    <select class="custom-select">
                      <option selected>Null</option>
                      <option value="1">lalalaalalalalalalalalaalalal</option>
                    </select>
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
