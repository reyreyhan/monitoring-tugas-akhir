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
      <h2 class="mb-3">Bimbingan TPPA Mahasiswa</h2>
        <!-- Icon Cards-->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-11">

          <div class="col-md-12">

            <div class="card mb-3" style="width: 24rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><h5>{{ $data2[0]->mahasiswa->nama }} </h5></li>
              <li class="list-group-item">{{ $data2[0]->nrp }}</li>
              <li class="list-group-item">{{ $data2[0]->judul }}</li>
            </ul>
            </div>


              <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Persyaratan</th>
                  <th scope="col">Berkas</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $u)
                <tr>
                  <td>{{ $u->jenis->jenis }}</td>
                  <td><a href="{{ url('upload/TPPA')}}/{{ $u->file }}">Sudah Upload</a></td>

                    @if($u->status == 0)
                    <td>
                      <form method="POST" action="{{url('koor/tppa')}}/{{$u->id}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <button type="submit" class="btn btn-success btn-sm" name="button">Approve</button>
                      </form>
                      <br>
                      <form method="POST" action="{{url('tppa/delete')}}/{{$u->nrp}}/{{$u->id_kategori}}/{{$u->id_jenis}}/{{$u->id}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-sm" name="button">Delete</button>
                      </form>
                    </td>
                    @else
                    <td></td>
                    @endif
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
