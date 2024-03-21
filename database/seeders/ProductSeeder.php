<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\ContentCategory;
use App\Models\Media;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new Content();
        $product1->title = "Network Solutions";
        $product1->slug = "network-solutions";
        $product1->content = `
            <p class="mb-2">Dalam perkembangan bisnis yang terus berlangsung, jaringan yang handal sangat penting
            untuk mencapai kesuksesan. Solusi teknologi inovatif yang sesuai dengan kebutuhan bisnis semakin
            mendapatkan perhatian. Dengan pendekatan teknologi yang canggih, solusi jaringan dibuat untuk
            mengatasi tantangan konektivitas di berbagai bidang bisnis.</p>
            <p class="mb-2">Netkrom Solusindo menyediakan solusi jaringan yang handal dan efisien untuk berbagai
            industri. Komitmen kami tercermin dalam rangkaian layanan komprehensif mulai dari perancangan
            jaringan, Desain, Konfigurasi, pemeliharaan hingga infrastruktur.</p>
        `;
        $product1->content_category_id = ContentCategory::where('category', 'products')->first()->id ?? 1;
        $product1->save();

        // Create Instagram media
        $instagramMedia = new Media();
        $instagramMedia->content_id = $product1->id ?? null;
        $instagramMedia->url = "ps-hardware.webp";
        $instagramMedia->type = "image";
        $instagramMedia->save();

        $product2 = new Content();
        $product2->title = "Software Solutions";
        $product2->slug = "software-solutions";
        $product2->content = `
            <p class="mb-2">Netkrom Solusindo adalah reseller resmi dan terpercaya untuk software, aplikasi,
            Lisensi Microsoft, Kaspersky Antivirus, Zimbra Mail Server, dan lain-lain.</p>
            <p class="mb-2">Netkrom Solusindo juga membantu dalam membangun aplikasi yang didesain spesifik dan
                khusus mulai dari Sistem Informasi berbasis desktop, web hingga <i>mobile</i> Android dan iOS.</p>
            <ul class="list-mark">
                <li>Computer Software</li>
                <li>Custom Software</li>
            </ul>
        `;
        $product2->content_category_id = ContentCategory::where('category', 'products')->first()->id ?? 1;
        $product2->save();

        // Create Instagram media
        $instagramMedia = new Media();
        $instagramMedia->content_id = $product2->id ?? null;
        $instagramMedia->url = "ps-software-01.webp";
        $instagramMedia->type = "image";
        $instagramMedia->save();
    }
}
