<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mancing Mania - Jurnal</title>
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container-index">
        <div class="header-area">
            <h1 class="title-main">mancing mania</h1>
            <a href="{{ route('pancingans.create') }}" class="btn btn-add">+ Catat Ikan</a>
        </div>

        @if(session('success'))
            <div class="alert-success">
                <strong>Strike!</strong> {{ session('success') }}
            </div>
        @endif

        <table class="table-pancing">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Spesies</th>
                    <th>Berat</th>
                    <th>Lokasi</th>
                    <th>Umpan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pancingans as $key => $ikan)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><strong>{{ $ikan->spesies_ikan }}</strong></td>
                    <td>{{ number_format($ikan->berat_kg, 2) }} Kg</td>
                    <td>{{ $ikan->lokasi_mancing }}</td>
                    <td>{{ $ikan->umpan }}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('pancingans.edit', $ikan->id) }}" class="btn btn-edit">Edit</a>
                            
                            <form action="{{ route('pancingans.destroy', $ikan->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="empty-state">Belum ada ikan yang dipancing. Ayo pergi memancing!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>