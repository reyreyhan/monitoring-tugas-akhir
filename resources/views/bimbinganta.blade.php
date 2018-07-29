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
    <h1 class="mb-3">Bimbingan TA</h1>
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10">
        <div class="col-md-12">

          <form action="{{ url('bimbingan2/store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('post')}}
            <div class="form-group">

              <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Minggu Ke</label>
              <input name="minggu" type="text" class="form-control" id="inputMinggu" placeholder="Minggu ke">
            </div>

            <div class="form-group col-md-2">
              <label for="inputPassword4">Tanggal</label>
            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                <input name="tanggal" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label for="inputPassword4">Materi Pembahasan</label>
            <input name="isi" type="text" class="form-control" id="inputMateri" placeholder="Materi Pembahasan">
          </div>

          <div class="form-group col-md-4">
              <label for="inputPassword4">Dosen</label>
              <div class="col-sm-6">
                <select class="custom-select" name="nip">
                  <option value="{{ $data[0]->dos1->nip }}">{{ $data[0]->dos1->nama }}</option>
                  <option value="{{ $data[0]->dos2->nip }}">{{ $data[0]->dos2->nama }}</option>
                  <option value="{{ $data[0]->dos3->nip }}">{{ $data[0]->dos3->nama }}</option>
                  <option value="{{ $data[0]->dos4->nip }}">{{ $data[0]->dos4->nama }}</option>
                </select>
              </div>
          </div>

          </div>

          <button type="submit" class="btn btn-success col-md-2 mb-3" name="button">Submit</button>

            </div>
          </form>

            @if($data4 >= $data3->jml_bimbingan)
            <center><h1>SUDAH BOLEH PRINT</h1></center>
            @else
            <center><h1>BELUM BOLEH PRINT</h1></center>
            @endif
            
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Minggu Ke</th>
                <th scope="col">Dosen</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Materi Pembahasan</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data2 as $u)
              <tr>
                <td>{{ $u->Minggu }}</td>
                <td>{{ $u->dos->nama }}</td>
                <td>{{ $u->tanggal }}</td>
                <td>{{ $u->isi }}</td>
                @if( $u->status == 0)
                  <td>Tunggu di Approve</td>
                @elseif( $u->status == 1)
                  <td>Sudah di Approve</td>
                @endif
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
