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
    <h2 class="mb-3">Evaluasi Judul TA Mahasiswa</h2>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-xs-6 ">

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
                    <th scope="col">Judul TA</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $u)
                  <tr>
                    <td>{{ $u->nrp }}</td>
                    <td>{{ $u->mahasiswa->nama }}</td>
                    <td>{{ $u->judul }}</td>
                    <td>
                      @if($u->status == 1)
                      <form action="{{ url('/koor/approve')}}/{{$u->nrp}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <button type="submit" class="btn btn-success btn-sm" name="button">Approve</button>
                      </form>
                      <br>
                      <form action="{{ url('/koor/reject')}}/{{$u->nrp}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <button type="submit" class="btn btn-danger btn-sm" name="button">Reject</button>
                      </form>
                      @elseif($u->status == 2)
                      Approved
                      @elseif($u->status == 3)
                      Rejected
                    </td>
                      @endif
                    @endforeach
                  </tr>
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
