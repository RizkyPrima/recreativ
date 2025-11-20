<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= esc($title ?? 'Recreativ') ?></title>

    <!-- Tailwind CDN (quick dev) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional: small custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
</head>

<body class="min-h-screen bg-gradient-to-b from-[#e9f0ff] via-[#eef4ff] to-white text-slate-900 antialiased">
    <header class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <!-- Logo Circle -->
            <div class="w-10 h-10  flex items-center justify-center">
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" class="w-7 h-7 object-contain">
            </div>

            <!-- Brand Text -->
            <div>
                <div class="text-lg font-semibold">Recreativ</div>
                <div class="text-xs text-slate-500">Creative & Digital Services</div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center gap-6 text-sm text-slate-600">
            <a href="#services" class="hover:text-slate-900">Layanan</a>
            <a href="#portfolio" class="hover:text-slate-900">Portfolio</a>
            <a href="#contact" class="hover:text-slate-900">Kontak</a>
        </nav>
    </header>


    <main class="max-w-6xl mx-auto px-6 pb-16">