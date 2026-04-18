<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurnal Mancing</title>
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Mancing Mania</h2>
        
        <form action="{{ route('pancingans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Spesies Ikan</label>
                <input type="text" name="spesies_ikan" required>
            </div>
            
            <div class="form-group">
                <label>Berat (Kg)</label>
                <input type="number" step="0.01" name="berat_kg" required>
            </div>

            <div class="form-group">
                <label>Lokasi Mancing</label>
                <select name="lokasi_mancing" required>
                    <option value="">Pilih Lokasi</option>
                    <option value="Sungai">Sungai</option>
                    <option value="Danau">Danau</option>
                    <option value="Laut">Laut</option>
                </select>
            </div>

            <div class="form-group">
                <label>Umpan</label>
                <input type="text" name="umpan" required>
            </div>
            <button type="submit" class="btn-submit">Simpan Jurnal</button>
        </form>
    </div>
</body>
</html>