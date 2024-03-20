<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\ContentCategory;
use App\Models\Media;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Create Instagram content
        $instagramContent = new Content();
        $instagramContent->title = "Instagram";
        $instagramContent->slug = "https://www.instagram.com/jmtgroup.id";
        $instagramContent->content = json_encode("https://www.instagram.com/jmtgroup.id", true);
        $instagramContent->content_category_id = ContentCategory::where('category', 'contact-us')->first()->id ?? 1;
        $instagramContent->save();

        // Create Instagram media
        $instagramMedia = new Media();
        $instagramMedia->content_id = $instagramContent->id ?? null;
        $instagramMedia->url = "fa fa-instagram";
        $instagramMedia->type = "icon";
        $instagramMedia->save();

        // Create YouTube content
        $youtubeContent = new Content();
        $youtubeContent->title = "YouTube";
        $youtubeContent->slug = "https://www.youtube.com/channel/UCi1bwrFtfHKrDLTRyAkH5TA";
        $youtubeContent->content = json_encode("https://www.youtube.com/channel/UCi1bwrFtfHKrDLTRyAkH5TA", true);
        $youtubeContent->content_category_id = ContentCategory::where('category', 'contact-us')->first()->id ?? 1;
        $youtubeContent->save();

        // Create YouTube media
        $youtubeMedia = new Media();
        $youtubeMedia->content_id = $youtubeContent->id ?? null;
        $youtubeMedia->url = "fa fa-youtube";
        $youtubeMedia->type = "icon";
        $youtubeMedia->save();

        // Create Email content
        $emailContent = new Content();
        $emailContent->title = "Email";
        $emailContent->slug = "mailto:info@jasamedikatransmedic.com";
        $emailContent->content = json_encode("mailto:info@jasamedikatransmedic.com", true);
        $emailContent->content_category_id = ContentCategory::where('category', 'contact-us')->first()->id ?? 1;
        $emailContent->save();

        // Create Email media
        $emailMedia = new Media();
        $emailMedia->content_id = $emailContent->id ?? null;
        $emailMedia->url = "fa fa-envelope-o";
        $emailMedia->type = "icon";
        $emailMedia->save();

        // Create WhatsApp content
        $whatsappContent = new Content();
        $whatsappContent->title = "WhatsApp";
        $whatsappContent->slug = "https://wa.me/+6287870007781";
        $whatsappContent->content = json_encode("https://wa.me/+6287870007781", true);
        $whatsappContent->content_category_id = ContentCategory::where('category', 'contact-us')->first()->id ?? 1;
        $whatsappContent->save();

        // Create WhatsApp media
        $whatsappMedia = new Media();
        $whatsappMedia->content_id = $whatsappContent->id ?? null;
        $whatsappMedia->url = "fa fa-whatsapp";
        $whatsappMedia->type = "icon";
        $whatsappMedia->save();

        $addressContent = new Content();
        $addressContent->title = "Address";
        $addressContent->slug = "Address";
        $addressContent->content = json_encode([
            'Gedung Paramarta Tridharma<br>
            <span>Jl. Cikutra Baru Raya No. 28</span><br>
            <span>Bandung 40124 Indonesia</span>'
        ]);
        $addressContent->content_category_id = ContentCategory::where('category', 'contact-us')->first()->id ?? 1;
        $addressContent->save();

        // Create WhatsApp media
        $addressMedia = new Media();
        $addressMedia->content_id = $whatsappMedia->id ?? null;
        $addressMedia->url = "fa fa-building";
        $addressMedia->type = "icon";
        $addressMedia->save();

        $this->command->info('Content seeder completed!');
    }
}
