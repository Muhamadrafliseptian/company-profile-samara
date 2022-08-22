<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @foreach ($menu_role as $item)
        @if ($item->getMenu->menu_id != 0)
            <ul>
                {{ $detail->menu_nama }}
                <li>
                    <b>
                        {{ $item->getMenu->menu_nama }}
                    </b>
                </li>
            </ul>
        @else
            {{ $item->getMenu->menu_nama }}
        @endif
    @endforeach

</body>

</html>
