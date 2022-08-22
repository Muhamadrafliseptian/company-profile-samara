@php
use App\Models\Komentar;
@endphp
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            @if (empty($data_profil->nama_perusahaan))
                -
            @else
                {{ $data_profil->nama_perusahaan }}
            @endif
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">
                            @php
                                $count = Komentar::count();
                            @endphp
                            {{ $count }}
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Ada {{ $count }} Pesan Yang Masuk</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                @php
                                    $pesan = Komentar::get();
                                @endphp

                                @forelse ($pesan as $data)
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="../../dist/img/user2-160x160.jpg" class="img-circle"
                                                    alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                @empty
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <i>
                                                <b>
                                                    Tidak Ada Pesan
                                                </b>
                                            </i>
                                        </div>
                                    </div>
                                @endforelse
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if (empty(Auth::user()->foto))
                            <img src="{{ url('/gambar/gambar_user.png') }}" class="user-image" alt="User Image">
                        @else
                            <img src="{{ url('/storage/' . Auth::user()->foto) }}" class="user-image">
                        @endif
                        <span class="hidden-xs">{{ Auth::user()->nama }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url('/template') }}/dist/img/user2-160x160.jpg" class="img-circle"
                                alt="User Image">

                            <p>
                                {{ Auth::user()->nama }} - Administrator
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">Logout</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
