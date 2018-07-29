<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.html">Welcome {{ session('sessionUser')[0]->nama}}</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{ url('/koor')}}">
          <i class="fa fa-fw fa-vcard"></i>
          <span class="nav-link-text">Evaluasi Judul</span>
        </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{ url('/koor/pengumuman')}}">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Pengumuman</span>
        </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-database"></i>
          <span class="nav-link-text">Cek Berkas Mahasiswa</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="{{url('/koor/tppa/')}}">TPPA</a>
          </li>
          <li>
            <a href="{{url('/koor/revtppa')}}">Revisi TPPA</a>
          </li>

          <li>
            <a href="{{url('/koor/ta')}}">TA</a>
          </li>
          <li>
            <a href="{{url('/koor/revta')}}">Revisi TA</a>
          </li>


        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{ url('/koor/deadline')}}">
          <i class="fa fa-fw fa-calendar"></i>
          <span class="nav-link-text">Set Deadline</span>
        </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">Bimbingan</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
          <li>
            <a href="{{url('/dosen')}}">TPPA</a>
          </li>
          <li>
            <a href="{{url('/bimdosen')}}">TA</a>
          </li>

        </ul>
      </li>


    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">


      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
