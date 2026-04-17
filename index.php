<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota di Indonesia - Modern Design</title>
    <!-- Menggunakan font Inter dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f7f6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        header {
            background-color: #2c3e50;
            color: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }

        /* Main Container */
        .container {
            display: flex;
            flex: 1;
            max-width: 1200px;
            margin: 20px auto;
            width: 95%;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        /* Sidebar Styles */
        nav {
            width: 250px;
            background-color: #f8f9fa;
            padding: 30px 20px;
            border-right: 1px solid #eee;
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            margin-bottom: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #555;
            font-weight: 500;
            padding: 10px 15px;
            display: block;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        nav ul li a:hover, nav ul li a.active {
            background-color: #3498db;
            color: white;
        }

        /* Content Styles */
        article {
            flex: 1;
            padding: 40px;
        }

        article h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            display: inline-block;
            padding-bottom: 5px;
        }

        /* Form Styling */
        .form-section {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
            border: 1px solid #ddd;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: inherit;
        }

        input[type="submit"] {
            background-color: #27ae60;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #219150;
        }

        /* Result Box */
        .result-box {
            margin-top: 20px;
            padding: 20px;
            background-color: #e8f4fd;
            border-left: 5px solid #3498db;
            border-radius: 5px;
        }

        /* Footer Styles */
        footer {
            background-color: #2c3e50;
            color: #bdc3c7;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }

        @media (max-width: 768px) {
            .container { flex-direction: column; }
            nav { width: 100%; border-right: none; border-bottom: 1px solid #eee; }
            nav ul { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }
        }
    </style>
</head>
<body>

    <header>
        <h1>Kota di Indonesia</h1>
    </header>

    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="active">Jakarta</a></li>
                <li><a href="#">Depok</a></li>
                <li><a href="#">Surabaya</a></li>
            </ul>
        </nav>

        <article>
            <h2>Jakarta</h2>
            <p>
                Ibu kota Jakarta merupakan suatu wilayah yang padat penduduk dan menjadi pusat pemerintahan Republik Indonesia. 
            </p>

            <!-- Bagian Form -->
            <div class="form-section">
                <h3>Form Input Nilai</h3>
                <br>
                <form method="post" action="">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP:</label>
                        <input type="number" name="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="ttl" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai Tugas 1:</label>
                        <input type="number" name="nilai_tugas_1" required>
                    </div>
                    <div class="form-group">
                        <label>Nilai Tugas 2:</label>
                        <input type="number" name="nilai_tugas_2" required>
                    </div>
                    <input type="submit" name="kirim" value="Kirim Data">        
                </form>
            </div>

            <!-- Bagian Hasil PHP -->
            <?php if (isset($_POST['kirim'])): ?>
                <div class="result-box">
                    <h3>Hasil Input:</h3>
                    <p><strong>Nama:</strong> <?php echo htmlspecialchars($_POST['nama']); ?></p>
                    <p><strong>Nomor HP:</strong> <?php echo htmlspecialchars($_POST['no_hp']); ?></p>
                    <p><strong>TTL:</strong> <?php echo htmlspecialchars($_POST['ttl']); ?></p>
                    <p><strong>Nilai Tugas 1:</strong> <?php echo (float)$_POST['nilai_tugas_1']; ?></p>
                    <p><strong>Nilai Tugas 2:</strong> <?php echo (float)$_POST['nilai_tugas_2']; ?></p>
                    <hr>
                    <p><strong>Total Nilai:</strong> 
                        <?php 
                            $total = (float)$_POST['nilai_tugas_1'] + (float)$_POST['nilai_tugas_2'];
                            echo $total;
                        ?>
                    </p>
                </div>
            <?php endif; ?>

        </article>
    </div>

    <footer>
        &copy; 2023 - Website Informasi Kota Indonesia
    </footer>

</body>
</html>