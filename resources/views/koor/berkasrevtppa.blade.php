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
    <h2 class="mb-3">Cek Berkas Revisi TPPA Mahasiswa</h2>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10 col-xs-6 ">

            <div class="col-lg-12">


                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-1 col-form-label">Kelas</label>
                  <div class="col-sm-2">
                    <select required class="custom-select">
                      <option selected>Kelas</option>
                      <option value="1">MMB A</option>
                      <option value="2">MMB B</option>
                    </select>
                  </div>
                </div>

                <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">NRP</th>
                    <th scope="col">Nama Mahasiswa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $u)
                  <tr>
                    <td scope="row"><a href="{{ url('/koor/revtppa')}}/{{$u->nrp}}">{{ $u->nrp }}</a></td>
                    <td>{{ $u->mahasiswa->nama}}</td>
                  </tr>
                  @endforeach
                </tbody>

              </table>

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
