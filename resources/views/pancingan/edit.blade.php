<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Tangkapan</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>edit data</h1>
        <form action="{{ route('pancingans.update', $ikan->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label>Spesies Ikan</label>
                <input type="text" name="spesies_ikan" value="{{ $ikan->spesies_ikan }}" required>
            </div>

            <div class="form-group">
                <label>Berat (Kg)</label>
                <input type="number" step="0.01" name="berat_kg" value="{{ $ikan->berat_kg }}" required>
            </div>

            <div class="form-group">
                <label>Lokasi Mancing</label>
                <select name="lokasi_mancing" required>
                    <option value="">Pilih Lokasi</option>
                    <option value="Sungai" {{ $ikan->lokasi_mancing == 'Sungai' ? 'selected' : '' }}>Sungai</option>
                    <option value="Danau" {{ $ikan->lokasi_mancing == 'Danau' ? 'selected' : '' }}>Danau</option>
                    <option value="Laut" {{ $ikan->lokasi_mancing == 'Laut' ? 'selected' : '' }}>Laut</option>
                </select>
            </div>

            <div class="form-group">
                <label>Umpan</label>
                <input type="text" name="umpan" value="{{ $ikan->umpan }}" required>
            </div>

            <button type="submit" class="btn-submit">Update Data</button>
            <a href="{{ route('pancingans.index') }}" style="display: block; text-align: center; margin-top: 10px;">Batal</a>
        </form>
    </div>
</body>
</html>