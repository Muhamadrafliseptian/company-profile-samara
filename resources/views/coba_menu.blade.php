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
                        $menu = Menu::where('menu_id', 0)->get();
                    @endphp

                    @foreach ($menu as $data)
                        @php
                            $misal = MenuRole::where('id_role', Auth::user()->id_role)
                                ->where('id_menu', $data->id)
                                ->first();
                        @endphp

                        @php
                            $role = Menu::where('menu_id', $data->id)->get();
                        @endphp

                        @if ($misal)
                            @if ($role->count() == 0)
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">
                                        {{ $data->menu_nama }}
                                    </a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $data->menu_nama }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($role as $item)
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    {{ $item->menu_nama }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
