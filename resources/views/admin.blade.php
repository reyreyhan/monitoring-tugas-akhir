<!DOCTYPE html>
<html lang="en">

<head>
@include('include.head')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
@include('include.headeradmin')
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
    <h1 class="mb-3">Set Koor PA</h1>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10 col-xs-6 ">

            <div class="col-lg-12">

              <form action="{{ url('/admin')}}" method="post">
                {{ csrf_field() }}
                {{ method_field('post')}}

                <select class="form-control col-lg-6 mb-2" name="id">
                <option>Pilih Koor</option>
                @foreach($data2 as $u)
                <option value="{{$u->id}}">{{$u->nama}}</option>
                @endforeach
                </select>

                <button type="submit" class="btn btn-success" name="button">Add</button>
              </form>

            </div>
            <br>

            <div class="col-lg-12">
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">NIP</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $u)
                <tr>
                  <td>{{$u->nama}}</td>
                  <td>{{$u->nip}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>







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
