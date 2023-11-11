<div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            @if(session('akses')== 1)
                            <li class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-user"></i>Dasboard</a>
                                <li class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-calendar-alt"></i>Pengajuan Cuti</a>
                            </li>
                            @elseif(session('akses')==2)
                              <li class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-user"></i>Dasboard</a>
                                <li class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-calendar-alt"></i>Pengajuan Cuti</a>
                            </li>
                            @elseif(session('akses')==3)
                                I don't have anny records!
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>