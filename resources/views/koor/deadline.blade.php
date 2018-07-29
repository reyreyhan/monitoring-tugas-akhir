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
    <h1 class="mb-3">Set Deadline</h1>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10">
        <div class="col-md-12">

          <form action="{{ url('koor/deadline')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('post')}}
            <div class="form-group">

            <div class="form-row">

            <div class="form-group col-md-6">
              <label for="inputPassword4">Tanggal</label>
            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                <input name="tanggal" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>

          <div class="form-group col-md-6">
              <label for="inputPassword4">Pilih</label>
              <div class="col-sm-6">
                <select class="custom-select" name="persyaratan">
                  @foreach($data as $u)
                  <option value="{{ $u->id }}">{{ $u->kategori->kategori }}</option>
                  @endforeach
                </select>
              </div>
          </div>

          </div>

          <button type="submit" class="btn btn-success col-md-2 mb-3" name="button">Submit</button>

            </div>
          </form>
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Kategori</th>
                <th scope="col">Deadline</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $u)
              <tr>
                <td>{{ $u->kategori->kategori }}</td>
                <td>{{ $u->deadline }}</td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </div>


        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'L'
                });
            });
        </script>

      <!-- Area Chart Example-->


      <!-- Example DataTables Card-->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('include.footer')
  </div>
</body>

</html>
