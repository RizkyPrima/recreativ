<section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <div class="space-y-6">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight text-slate-900">
            Welcome to <span class="text-[#ffd200]">RECREATIV</span>
        </h1>
        <p class="text-lg text-slate-600 max-w-xl">
            Solusi kreatif: social media, advertising, video editing, website design, dan proyek mikrokontroler IoT.
            Kami bantu brand kamu tumbuh lewat desain, strategi, dan eksekusi cepat.
        </p>

        <div class="flex flex-col sm:flex-row gap-4">
            <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 rounded-2xl bg-gradient-to-r from-[#1f63ff] to-[#2db0ff] text-white font-semibold shadow-lg">Hubungi Kami</a>
            <a href="#services" class="inline-flex items-center justify-center px-6 py-3 rounded-2xl border border-slate-200 text-slate-700">Lihat Layanan</a>
        </div>

        <div class="mt-2 flex gap-4 items-center text-sm text-slate-600">
            <div class="flex items-center gap-2">
                <img src="<?= esc(base_url('assets/img/logo.png')) ?>" alt="Logo" class="w-7 h-7 object-contain">
                <span>@recreative</span>
            </div>

            <div class="flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>contact@recreativ.id</span>
            </div>
        </div>
    </div>
    
    <div class="relative">
        <div class="rounded-3xl bg-gradient-to-br from-[#1f2c66] to-[#0b1533] text-white p-8 shadow-2xl">
            <div class="text-sm uppercase tracking-wide text-slate-300">Featured Services</div>
            <div class="text-3xl font-extrabold mt-2">Solusi Kreatif</div>

            <div class="mt-6 grid grid-cols-1 gap-3">
                <div class="flex items-center justify-between bg-white/8 rounded-xl p-3">
                    <div>
                        <div class="text-xs text-slate-300">1. Social Media</div>
                        <div class="font-semibold">Manajemen & Konten Kreatif</div>
                    </div>
                    <div class="text-sm text-slate-200">Strategi & Growth</div>
                </div>

                <div class="flex items-center justify-between bg-white/8 rounded-xl p-3">
                    <div>
                        <div class="text-xs text-slate-300">2. Advertising</div>
                        <div class="font-semibold">Performance Campaign</div>
                    </div>
                    <div class="text-sm text-slate-200">TikTok • FB • Google</div>
                </div>

                <div class="flex items-center justify-between bg-white/8 rounded-xl p-3">
                    <div>
                        <div class="text-xs text-slate-300">3. Video Editing</div>
                        <div class="font-semibold">Short-form & Motion</div>
                    </div>
                    <div class="text-sm text-slate-200">Reels & Ads</div>
                </div>
                <div class="flex items-center justify-between bg-white/8 rounded-xl p-3">
                    <div>
                        <div class="text-xs text-slate-300">4. Microcontroller</div>
                        <div class="font-semibold">Microcontroller with Iot System</div>
                    </div>
                    <div class="text-sm text-slate-200">Arduino, ESP32 dll</div>
                </div>
                <div class="flex items-center justify-between bg-white/8 rounded-xl p-3">
                    <div>
                        <div class="text-xs text-slate-300">5. Industrial Automation</div>
                        <div class="font-semibold">Logic, Control and Motion</div>
                    </div>
                    <div class="text-sm text-slate-200">PLC, HMI , VSD</div>
                </div>
            </div>

            <div class="mt-6 bg-white/6 rounded-xl p-4 text-slate-200">
                <div class="text-sm">Butuh paket khusus?</div>
                <div class="text-base font-semibold mt-1">Konsultasi gratis & proposal</div>
            </div>
        </div>

        <img src="<?= base_url('assets/img/TOA.png') ?>"
            alt="toa"
            class="absolute -left-32 -bottom-14 w-36 md:w-44 transform rotate-6 rounded-lg animate-float" />
    </div>
</section>

<!-- Services grid -->
<section id="services" class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
    <?php
    $services = [
        ['title' => 'Social Media Management', 'desc' => 'Strategi & konten harian, penjadwalan, community management.'],
        ['title' => 'Advertising', 'desc' => 'Campaign performance-driven di TikTok, FB, Google.'],
        ['title' => 'Video Editing', 'desc' => 'Short-form, product videos, & motion graphics.'],
        ['title' => 'Website Design', 'desc' => 'Landing page & website responsif cepat.'],
        ['title' => 'Mikrokontroler IoT', 'desc' => 'Prototype IoT & integrasi sensor untuk produk smart.'],
        ['title' => 'Otomasi Industri', 'desc' => 'Control Indsutri seperti PLC, HMI dan Inverter'],
    ];
    foreach ($services as $i => $s): ?>
        <article class="flex flex-col gap-4 p-6 rounded-2xl bg-white shadow-md hover:shadow-xl transition">
            <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-[#1f63ff] to-[#2db0ff] flex items-center justify-center text-white font-bold"><?= $i + 1 ?></div>
            <h3 class="font-semibold text-lg"><?= esc($s['title']) ?></h3>
            <p class="text-sm text-slate-600 flex-1"><?= esc($s['desc']) ?></p>
            <div class="mt-2">
                <a href="#contact" class="text-sm font-medium inline-flex items-center gap-2">Pesan Sekarang →</a>
            </div>
        </article>
    <?php endforeach; ?>
</section>

<!-- Portfolio -->
<section id="portfolio" class="mt-12">
    <h2 class="text-2xl font-bold mb-4">Portfolio Terpilih</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
   <div class="p-6 rounded-xl bg-white shadow flex flex-col justify-between">
            <div>
                <h4 class="font-semibold">Kampanye TikTok</h4>
                <p class="text-sm text-slate-600">Meningkatkan awareness & leads untuk UMKM.</p>
            </div>
            <div class="text-sm text-slate-500 mt-4">View case study →</div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="mt-12 bg-white rounded-2xl p-8 shadow-md flex flex-col md:flex-row items-center gap-6">
    <div class="flex-1">
        <h3 class="text-xl font-bold">Butuh bantuan untuk projectmu?</h3>
        <p class="text-slate-600">Kirim brief singkat atau langsung chat WhatsApp untuk konsultasi gratis.</p>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="mt-4 p-3 rounded bg-green-50 text-green-800"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="mt-4 p-3 rounded bg-red-50 text-red-800"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
    </div>

    <form action="<?= site_url('contact') ?>" method="post" class="w-full md:w-auto flex flex-col gap-3">
        <input name="name" placeholder="Nama" value="<?= old('name') ?>" class="px-4 py-3 rounded-lg border" />
        <input name="email" placeholder="Email" value="<?= old('email') ?>" class="px-4 py-3 rounded-lg border" />
        <textarea name="message" placeholder="Tulis pesan singkat..." class="px-4 py-3 rounded-lg border" rows="3"><?= old('message') ?></textarea>
        <div class="flex gap-3">
            <button type="submit" class="px-5 py-3 rounded-2xl bg-[#ffd200] font-semibold">Kirim</button>
            <a href="https://wa.me/088228851951" class="px-5 py-3 rounded-2xl border">WhatsApp</a>
        </div>
    </form>
</section>
