<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

    <h2>Pesan Baru dari Pengunjung Website Anda</h2>
    
    <p><strong>Nama:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Perusahaan:</strong> {{ $company ?? '' }}</p>
    <p><strong>Subjek:</strong> {{ $subject }}</p>
    
    <hr>
    
    <p><strong>Isi Pesan:</strong></p>
    <p>{{ $message_content }}</p>

    <hr>
    <small>Dikirim pada: {{ now()->format('d F Y H:i') }}</small>
</body>
</html>