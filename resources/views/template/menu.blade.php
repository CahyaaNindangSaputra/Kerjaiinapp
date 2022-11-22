<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->




           <li class="nav-item menu-is-opening menu-open">
            <a href="#" class="nav-link">
                <i class="bi bi-diagram-3"></i>
            <p>
            Master Perusahaan
            <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview" style="display: block; height: 172.75px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
            <li class="nav-item">
            <a href="{{ route('perusahaann.index') }}"class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Perusahaan</p>
            </a>
            </li>
             <li class="nav-item">
                <a href="{{ route('legalitass.index') }}"class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Legalitas Perusahaan</p>
            </a>
            </li>
             <li class="nav-item">
                <a href="{{ route('cpperusahaann.index') }}"class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>CP Perusahaan</p>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lokasiperusahaann.index') }}"class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Lokasi Perusahaan</p>
            </a>
            </li>
            </ul>
            </li>

            <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                    Master Pelamar
                <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                <li class="nav-item">
                <a href="{{ route('pelamarr.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Pelamar</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('pendidikann.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pendidikan</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('prestasii.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Prestasi</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('nonformall.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>NonFormal</p>
                </a>
                </li>

                <li class="nav-item">
                <a href="{{ route('pengalamann.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pengalaman</p>
                </a>
                </li>




    </ul>
</nav>







  <script>
    $('#ok').click(function(){
      $('#sip').toggle("slow");

    });
    var toggler = document.getElementsByClassName("caret");
    var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}

  </script>
