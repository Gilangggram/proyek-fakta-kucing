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
        <p class="fact">"{{ $catFact }}"</p>
        <a href="/fakta-kucing" class="btn-refresh">Lihat Fakta Lain</a>
    </div>

</body>
</html>