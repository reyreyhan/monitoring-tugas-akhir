<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.html">Welcome {{ session('sessionUser')[0]->nama}}</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{ url('/pengajuan')}}">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Pengajuan Judul TA</span>
        </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-database"></i>
          <span class="nav-link-text">Upload Persyaratan</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">

          <li>
            <a href="{{url('/tppa')}}">TPPA</a>
          </li>
          <li>
            <a href="{{url('/revtppa')}}">Revisi TPPA</a>
          </li>

          @if(str_split(session('sessionUser')[0]->nrp)[2] . str_split(session('sessionUser')[0]->nrp)[3] == 10)
          <li>
            <a href="">Progress TA</a>
          </li>
          <li>
            <a href="">Revisi Progress TA</a>
          </li>
          @endif


          <li>
            <a href="{{url('/ta')}}">TA</a>
          </li>
          <li>
            <a href="{{url('/revta')}}">Revisi TA</a>
          </li>


        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">Bimbingan</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
          <li>
            <a href="{{url('/bimbingantppa')}}">TPPA</a>
          </li>
          @if(str_split(session('sessionUser')[0]->nrp)[2] . str_split(session('sessionUser')[0]->nrp)[3] == 10)
          <li>
            <a href="">Progress TA</a>
          </li>
          @endif
          <li>
            <a href="{{url('/bimbingan2')}}">TA</a>
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
