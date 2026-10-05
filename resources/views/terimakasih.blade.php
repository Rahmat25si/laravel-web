<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            background: #ffffff;
            width: 100%;
            max-width: 480px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            border: 1px solid #e5e7eb;
        }

        /* Header Bar Warna Hijau */
        .banner {
            background-color: #10b981;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .icon-check {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            font-size: 28px;
            font-weight: bold;
        }

        .banner h1 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .banner p {
            font-size: 14px;
            opacity: 0.9;
        }

        /* Konten Isi Data */
        .content {
            padding: 24px;
        }

        .section-title {
            font-size: 12px;
            font-weight: 700;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
        }

        .data-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
            font-size: 14px;
        }

        .data-label {
            color: #6b7280;
            font-weight: 500;
        }

        .data-value {
            color: #1f2937;
            font-weight: 600;
        }

        .question-box {
            margin-top: 16px;
        }

        .question-content {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 12px;
            margin-top: 6px;
            font-size: 14px;
            color: #374151;
            font-style: italic;
        }

        /* Tombol Kembali */
        .btn-kembali {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #4f46e5;
            color: white;
            text-decoration: none;
            padding: 12px 0;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            margin-top: 24px;
            transition: background 0.2s;
        }

        .btn-kembali:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>

    <div class="card">
        <!-- Bar Hijau Ucapan Terima Kasih -->
        <div class="banner">
            <div class="icon-check">✓</div>
            <h1>Terima Kasih Atas Mengisi Pertanyaan!</h1>
            <p>Pertanyaan Anda telah berhasil kami terima.</p>
        </div>

        <!-- Detail Data Pengirim -->
        <div class="content">
            <div class="section-title">Rincian Data Pengirim</div>

            <div class="data-row">
                <span class="data-label">Nama</span>
                <span class="data-value">{{ $nama }}</span>
            </div>

            <div class="data-row">
                <span class="data-label">Email</span>
                <span class="data-value">{{ $email }}</span>
            </div>

            <div class="question-box">
                <span class="data-label">Pertanyaan Anda:</span>
                <div class="question-content">
                    "{{ $pertanyaan }}"
                </div>
            </div>

            <!-- Tombol Kembali -->
            <a href="{{ url('/') }}" class="btn-kembali">← Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>
