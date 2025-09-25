<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background-color: #1E90FF; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            /* background-color: white;
            border-radius: 10px; */
            padding: 30px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .profile-card img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .profile-info {
            background-color: #dcdcdc;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Profile Picture">
        <div class="profile-info">{{ $nama }}</div>
        <div class="profile-info">{{ $npm }}</div>
        <div class="profile-info">Kelas: {{ $kelas }}</div>
    </div>
</body>
</html>
