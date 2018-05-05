<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Dashboard</h3>
        <strong>DS</strong>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href={{url('dashboard')}}  aria-expanded="false">
                <i class="glyphicon glyphicon-home"></i>
                Data Real Time Polling
            </a>
            <!-- <ul class="collapse list-unstyled" id="homeSubmenu">
                <li><a href="#">Home 1</a></li>
                <li><a href="#">Home 2</a></li>
                <li><a href="#">Home 3</a></li>
            </ul> -->
        </li>
        <li>
            <!-- <a href="#">
                <i class="glyphicon glyphicon-briefcase"></i>
                About
            </a> -->
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="glyphicon glyphicon-duplicate"></i>
                Data Statistik Polling
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href={{url('dashboardv')}}>Data Pemilih </a></li>
                <li><a href={{url('dashboardp')}}>Polling Berdasarkan Profesi</a></li>
                <li><a href={{url('dashboardkl')}}>Polling Kelompok Umur</a></li>
            </ul>
        </li>
        <li>
            <a href={{url('dashboardpeta')}}>
                <i class="glyphicon glyphicon-map-marker"></i>
                Persebaran Peta Pemilih
            </a>
        </li>
        <li>
            <a href={{url('dashboardkandidat')}}>
                <i class="glyphicon glyphicon-user"></i>
                Data kandidat
            </a>
        </li>

        <li>
            <a href={{url('faq')}}>
                <i class="glyphicon glyphicon-paperclip"></i>
                FAQ
            </a>
        </li>
        <li>
            <a href={{url('contact')}}>
                <i class="glyphicon glyphicon-send"></i>
                Contact
            </a>
        </li>
    </ul>


</nav>
