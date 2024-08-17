<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">Website PKH</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">PKH</a>
        </div>
        <ul class="sidebar-menu">
           

            
            <li class="{{ $menu == 'dashboard' ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i
                        class="far fa-square"></i> <span>Dashboard</span></a>
            </li>

            <li class="{{ $menu == 'penerima' ? 'active' : '' }}"><a class="nav-link" href="{{ route('penerima.index') }}"><i
                        class="far fa-square"></i> <span>Calon Penerima PKH</span></a>
            </li>

            {{-- <li class="{{ Request::is('blank') ? 'active' : '\' }}"><a class="nav-link" href="{{ route('blank') }}"><i
                        class="far fa-square"></i> <span>Kepala Rumah Tangga</span></a>
            </li>

            <li class="{{ Request::is('blank') ? 'active' : '' }}"><a class="nav-link" href="{{ route('blank') }}"><i
                        class="far fa-square"></i> <span>Data Perumahan</span></a>
            </li>

            <li class="{{ Request::is('blank') ? 'active' : '' }}"><a class="nav-link" href="{{ route('blank') }}"><i
                        class="far fa-square"></i> <span>Data Aset</span></a>
            </li> --}}

        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('auth.logout') }}" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Logout
            </a>
        </div>
    </aside>
</div>
