<!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ url('anggota/index') }}">
                            <i class="bi bi-circle"></i><span>Anggota</span>
                        </a>
                    </li>

                    <li>
                         <a href="{{ url('buku/index') }}">
                             <i class="bi bi-circle"></i><span>Buku</span>
                         </a>
                     </li>

                    <li>
                         <a href="{{ route('role.index') }}">
                             <i class="bi bi-circle"></i><span>Role</span>
                         </a>
                     </li>

                     <li>
                        <a href="{{ url('lokasi/index') }}">
                            <i class="bi bi-circle"></i><span>Lokasi Buku</span>
                        </a>
                    </li>

                   <li>
                        <a href="{{ url('kategori/index') }}">
                            <i class="bi bi-circle"></i><span>Kategori Buku</span>
                        </a>
                    </li>

                    {{--
                    <li class="nav-item">
                       <a class="nav-link collapsed" href="{{ route('guests.index') }} ">
                           <i class="bi bi-person"></i>
                           <span>Guest</span>
                       </a>
                   </li>

                    <li class="nav-item">
                       <a class="nav-link collapsed" href="{{ route('reservation.index') }} ">
                           <i class="bi bi-calendar"></i>
                           <span>Reservasi</span>
                       </a>
                   </li> --}}
                </ul>
            </li><!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('transaction.index') }}">
                    <i class="bi bi-calender"></i>
                    <span>Pinjam Buku</span>
               </a>
            </li>
    </aside><!-- End Sidebar-->
