<!DOCTYPE html>
<html lang="en">

<head>
@include('include.head')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
@include('include.headerdosen')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
    <h1 class="mb-3">Daftar Mahasiswa Bimbingan</h1>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10">

        <div class="col-md-12">



            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">NRP</th>
                <th scope="col">Nama</th>
                <th scope="col">Judul</th>
              </tr>
            </thead>
            <tbody>
              @foreach($nip1 as $u)
              <tr>
                <td>{{ $u->nrp }}</td>
                <td><a href="{{ url('/bimbinganmahasiswatppa/') }}/{{ $u->dosTA->nrp}}">{{ $u->dosTA->nama }}</a></td>
                <td>{{ $u->judul }}</td>
              </tr>
              @endforeach
              @foreach($nip2 as $u)
              <tr>
                <td>{{ $u->nrp }}</td>
                <td><a href="{{ url('/bimbinganmahasiswatppa/') }}/{{ $u->dosTA->nrp}}">{{ $u->dosTA->nama }}</a></td>
                <td>{{ $u->judul }}</td>
              </tr>
              @endforeach
              @foreach($nip3 as $u)
              <tr>
                <td>{{ $u->nrp }}</td>
                <td><a href="{{ url('/bimbinganmahasiswatppa/') }}/{{ $u->dosTA->nrp}}">{{ $u->dosTA->nama }}</a></td>
                <td>{{ $u->judul }}</td>
              </tr>
              @endforeach
              @foreach($nip4 as $u)
              <tr>
                <td>{{ $u->nrp }}</td>
                <td><a href="{{ url('/bimbinganmahasiswatppa/') }}/{{ $u->dosTA->nrp}}">{{ $u->dosTA->nama }}</a></td>
                <td>{{ $u->judul }}</td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </div>




              </form>
      <!-- Area Chart Example-->


      <!-- Example DataTables Card-->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('include.footer')
  </div>
</body>

</html>
