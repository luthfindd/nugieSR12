<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>500 - Error Server</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .editorial-gradient {
            background: linear-gradient(135deg, #154212 0%, #2d5a27 100%);
        }
    </style>
</head>
<body class="bg-background">
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="text-center max-w-md">
        <div class="text-6xl font-bold text-error mb-4">500</div>
        <h1 class="text-3xl font-bold text-on-surface mb-2">Error Server</h1>
        <p class="text-on-surface-variant mb-8">Terjadi kesalahan pada server. Tim kami sedang memperbaiki masalah ini.</p>
        <a href="{{ route('home') }}" class="editorial-gradient text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 inline-block">
            Kembali ke Beranda
        </a>
    </div>
</div>
</body>
</html>
