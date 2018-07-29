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
      <h2 class="mb-3">Bimbingan Mahasiswa</h2>
        <!-- Icon Cards-->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-11">

          <div class="col-md-12">

            <div class="card mb-3" style="width: 24rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><h5>Mahasiswa : ripat </h5></li>
              <li class="list-group-item">4103151011</li>
              <li class="list-group-item">test judul</li>
            </ul>
            </div>


              <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Persyaratan</th>
                  <th scope="col">Status</th>
                  <th scope="col"></th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>Proposal</td>
                  <td>Belum Upload</td>
                  <td>Preview | Download</td>
                  <td>
                    <button type="submit" class="btn btn-success btn-sm" name="button">Approve</button>
                  </td>
                </tr>

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
