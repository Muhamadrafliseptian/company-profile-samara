@php
use App\Models\Akun\MenuRole;
use App\Models\Pengaturan\Menu;
@endphp

<link rel="stylesheet" href="{{ url('/template') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th>Menu</th>
            <th class="text-center">#</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 0;
        @endphp
        @foreach ($data_menu as $data)
            @php
                $misal = Menu::where('menu_id', $data->id)->first();
            @endphp
            @php
                $jika = MenuRole::where('id_menu', $data->id)
                    ->where('id_role', $role->id)
                    ->first();
            @endphp
            @if ($misal)
            @else
                @if ($jika)
                @else
                    <tr>
                        <input type="hidden" name="id_role[]" value="{{ $role->id }}">
                        <td class="text-center">{{ ++$no }}.</td>
                        <td>{{ $data->menu_nama }}</td>
                        <td class="text-center">
                            <input type="checkbox" name="id_menu[]" value="{{ $data->id }}">
                        </td>
                    </tr>
                @endif
            @endif
            {{-- @if ($jika)
            @else

            @endif --}}
        @endforeach
    </tbody>
</table>

<script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#example2').DataTable()
    })
</script>
