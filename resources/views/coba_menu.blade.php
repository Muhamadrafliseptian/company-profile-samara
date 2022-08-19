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

    @php
        $menu_role = MenuRole::where('id_role', Auth::user()->id_role)->first();
    @endphp

    @php
        $menu = Menu::where('');
    @endphp

    @foreach ($menu_role as $item)
        @php
            $punya_parent = Menu::where('id', $item->getMenu->menu_id)
                ->distinct()
                ->get();
        @endphp
        @foreach ($punya_parent as $item)
            {{ $item->menu_nama }}
        @endforeach

        <br>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
