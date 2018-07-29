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
    <h1 class="mb-3">Bimbingan Mahasiswa</h1>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10">

        <div class="col-md-12">

          <div class="card mb-3" style="width: 24rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5>Mahasiswa : {{ $data[0]->dosTA->nama }}</h5></li>
            <li class="list-group-item">{{ $data[0]->dosTA->nrp }}</li>
            <li class="list-group-item">{{ $data[0]->judul }}</li>
          </ul>
          </div>


            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Minggu ke</th>
                <th scope="col">Tanggal Bimbingan</th>
                <th scope="col">Materi Pembahasan</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data2 as $u)
              <tr>
                <td>{{ $u->Minggu }}</td>
                <td>{{ $u->tanggal }}</td>
                <td>{{ $u->isi }}</td>
                <td>
                  @if($u->status != 1 )
                  <form method="POST" action="{{url('bimbinganmahasiswatppa')}}/{{$data[0]->dosTA->nrp}}/{{$u->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-success btn-sm" name="button">Approve</button>
                  </form>
                  @elseif($u->status == 1)
                      Approved
                  @endif
                </td>
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
