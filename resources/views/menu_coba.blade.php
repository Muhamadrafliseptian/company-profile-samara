@php
use App\Models\Pengaturan\Menu;
use App\Models\Akun\MenuRole;
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @php
                        $menu_role = MenuRole::where('id_role', Auth::user()->id_role)->first();
                    @endphp

                    @php
                        $role_menu = MenuRole::where('id_role', $menu_role->id_role)->get();
                    @endphp

                    @foreach ($role_menu as $item)
                        @if ($item->getMenu->menu_id != 0)
                            @php
                                $menu = Menu::where('id', $item->getMenu->menu_id)->distinct();
                            @endphp

                            @if ($menu->count())
                                Ada
                            @endif
                            {{-- {{ $menu->menu_nama }} --}}
                            <b>
                                {{ $item->getMenu->menu_id }}
                            </b>
                        @else
                            {{ $item->getMenu->menu_nama }}
                        @endif
                    @endforeach

                    {{-- @php
                        $menu = Menu::where('menu_id', 0)->get();
                    @endphp

                    @foreach ($menu as $data)
                        @php
                            $misal = MenuRole::where('id_role', Auth::user()->id_role)
                                ->where('id_menu', $data->id)
                                ->get();
                        @endphp

                        @php
                            $role = Menu::where('menu_id', $data->id)->get();
                        @endphp


                    @endforeach --}}

                    {{-- @foreach ($menu_role as $item)
                        {{ $item }}
                        {{-- @php
                            $menu = Menu::distinct()
                                ->count('menu_id');
                        @endphp

                        {{ $menu }} --}}

                    {{-- @if ($menu)
                            @php
                                $detail = Menu::where('id', $menu->menu_id)->first();
                            @endphp
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $detail->menu_nama }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    {{ $item->getMenu->menu_nama }}
                                </a>
                            </li>
                        @endif --}}



                    {{-- @if (empty($menu->menu_id))
                        @else
                            {{ $menu->menu_id }}
                        @endif --}}

                    {{-- @if (empty($menu))
                        @else
                        @endif --}}

                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
