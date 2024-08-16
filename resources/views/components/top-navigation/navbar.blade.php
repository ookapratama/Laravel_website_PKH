<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="/" class="navbar-brand sidebar-gone-hide">{{ $title }}</a>
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    <div class="nav-collapse">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
        </a>
       
    </div>
    <form class="form-inline ml-auto">
        <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
       
    </form>
    <ul class="navbar-nav navbar-right">
    
    </ul>
</nav>

<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
           
            <li class="nav-item active">
                <a href="#" class="nav-link"><span>Home</span></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link"><span>Kontak</span></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link"><span>Informasi PKH</span></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link"><span>Pendaftaran Calon Penerima PKH</span></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link"><span>Statistik</span></a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('dashboard') }}" class="nav-link"><span>Login</span></a>
            </li>
           
        </ul>
    </div>
</nav>
