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
    <h1 class="mb-3">Upload Persyaratan TPPA</h1>
    <h3 class="mb-3">Upload {{ $data3->kategori->kategori }} Sebelum {{ $data3->deadline }}</h1>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10 col-xs-6 ">

            <div class="col-lg-12 mb-5">

              <form action="{{ url('/tppa/store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post')}}


                <select class="form-control col-lg-6 mb-2" name="jenis">
                  @foreach($data as $u)
                    <option value="{{ $u->id }}">{{ $u->jenis }}</option>
                  @endforeach
                </select>
                <input type="file" id="file" name="file" class="form-control-file mb-2">
                <button type="submit" name="button" class="col-sm-2 btn btn-success pull-left mb-3">Submit</button>

              </form>

            </div>

            <div class="col-lg-12">

              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Persyaratan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach($data2 as $u)
                <tr>
                  <td>{{ $u->jenis->jenis }}</td>
                  <td>
                    <a href="{{ url('upload/TPPA')}}/{{ $u->file }}">Sudah Upload</a>
                    @if($u->status == 1)
                    || Approved
                    @endif
                  </td>
                    @if($u->status == 0)
                    <td>
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
      <!-- Area Chart Example-->


      <!-- Example DataTables Card-->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('include.footer')
  </div>
</body>

</html>
