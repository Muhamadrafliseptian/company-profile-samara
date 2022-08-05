<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
        <a href="{{ url('/admin/dashboard') }}">
            <i class="fa fa-files-o"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-bars"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('/admin/tag') }}">
                    <i class="fa fa-tags"></i> Tag
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/kategori') }}">
                    <i class="fa fa-bars"></i> Kategori
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/blog') }}">
                    <i class="fa fa-upload"></i> Blog
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-gears"></i>
            <span>Pengaturan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('/admin/profil_perusahaan') }}">
                    <i class="fa fa-edit"></i> Profil Perusahaan
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/hubungi_kami') }}">
                    <i class="fa fa-envelope"></i> Pesan
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/pengaturan/visi_misi') }}">
                    <i class="fa fa-edit"></i> Visi & Misi
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/pengaturan/testimonials') }}">
                    <i class="fa fa-user"></i> Testimonials
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Akun</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('/admin/users') }}">
                    <i class="fa fa-circle-o"></i> Users
                </a>
                <a href="{{ url('/admin/profil_saya') }}">
                    <i class="fa fa-users"></i> Profil Saya
                </a>
                <a href="{{ url('/admin/informasi_login') }}">
                    <i class="fa fa-book"></i> Informasi Login
                </a>
            </li>
        </ul>
    </li>
</ul>
