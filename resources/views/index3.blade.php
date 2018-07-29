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

    @if($data3[0]->status == 0)
    <h1 class="mb-3">Update / Finalisasi Judul TA</h1>
    @elseif($data3[0]->status == 1)
    <h1 class="mb-3">Anda Sudah Finalisasi Judul TA</h1>
    @endif
      <!-- Icon Cards-->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-10 col-xs-6 ">

            <div class="col-lg-12">

              <form action="{{ url('/pengajuan/update')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT')}}

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Judul Tugas Akhir</label>
                  <div class="col-sm-6">
                    <input value="{{ $data3[0]->judul }}" required type="text" class="form-control" id="colFormLabel" placeholder="Masukkan Judul Tugas Akhir Anda" name="judul">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Abstrak</label>
                  <div class="col-sm-6">
                    <textarea required type="text" class="form-control" id="colFormLabel" placeholder="Ketikkan Abstrak Tugas Akhir Anda" rows="5" name="abstrak">{{ $data3[0]->abstrak }}</textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 1</label>
                  <div class="col-sm-6">
                    <select class="custom-select" name="dosen1">
                      <option value="{{ $data3[0]->dos1->nip }}">{{ $data3[0]->dos1->nama }}</option>
                      @foreach($data as $u)
                      <option value="{{ $u->nip }}">{{ $u->nama }}</option>
                      @endforeach
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 2</label>
                  <div class="col-sm-6">
                    <select class="custom-select" name="dosen2">
                      <option value="{{ $data3[0]->dos2->nip }}">{{ $data3[0]->dos2->nama }}</option>
                      @foreach($data as $u)
                      <option value="{{ $u->nip }}">{{ $u->nama }}</option>
                      @endforeach
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 3</label>
                  <div class="col-sm-6">
                    <select class="custom-select" name="dosen3">
                      <option value="{{ $data3[0]->dos3->nip }}">{{ $data3[0]->dos3->nama }}</option>
                      @foreach($data as $u)
                      <option value="{{ $u->nip }}">{{ $u->nama }}</option>
                      @endforeach
                    </select>
                    </div>
                </div>

                <div class="form-group row" name="dosen4">
                  <label for="colFormLabel" class="col-sm-3 col-form-label">Dosen Pembimbing 4</label>
                  <div class="col-sm-6">
                    <select class="custom-select" name="dosen4">
                      <option value="{{ $data3[0]->dos4->nip }}">{{ $data3[0]->dos4->nama }}</option>
                      @foreach($data as $u)
                      <option value="{{ $u->nip }}">{{ $u->nama }}</option>
                      @endforeach
                    </select>
                    </div>
                </div>

                <div class="col-12 mt-3 text-center">
                      <button type="submit" name="button" class="col-sm-2 btn btn-primary">Update</button>
                </div>



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
