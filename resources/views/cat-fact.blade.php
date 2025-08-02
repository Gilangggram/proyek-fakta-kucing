<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Fakta Kucing Acak</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: #f0f4f8; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 600px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
        }
        .fact {
            font-size: 1.2rem;
            color: #34495e;
            line-height: 1.6;
            min-height: 80px;
        }
        .btn-refresh {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-refresh:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
    <h1>Fakta Kucing Hari Ini 🐈</h1>

    {{-- Beri ID agar JavaScript bisa menemukannya --}}
    <p id="catFactText" class="fact">"{{ $catFact }}"</p>

    <a href="/fakta-kucing" class="btn-refresh">Lihat Fakta Lain</a>

    {{-- TAMBAHKAN TOMBOL BARU INI --}}
    <button onclick="copyFact()" class="btn-copy">Copy Fact</button>

    <footer style="margin-top: 20px; font-size: 0.8em; color: #7f8c8d;">
        <p>Data dari Catfact Ninja API</p>
    </footer>
</div>

{{-- TAMBAHKAN SCRIPT INI DI BAWAH --}}
<script>
function copyFact() {
    // Ambil teks dari elemen paragraf
    const factText = document.getElementById('catFactText').innerText;
    
    // Gunakan Clipboard API untuk menyalin teks
    navigator.clipboard.writeText(factText).then(function() {
        // Beri notifikasi bahwa teks berhasil disalin
        alert('Fakta berhasil disalin!');
    }, function(err) {
        // Tangani error jika gagal
        alert('Gagal menyalin fakta: ', err);
    });
}
</script>

{{-- Tambahkan sedikit style untuk tombol baru --}}
<style>
.btn-copy {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 15px;
    background-color: #27ae60;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}
.btn-copy:hover {
    background-color: #229954;
}
</style>

</body>
</html>