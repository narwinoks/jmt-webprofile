<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\ContentCategory;
use App\Models\Media;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Partner 1
        $content1 = new Content();
        $content1->title = "Partner 1";
        $content1->slug = "partner-1";
        $content1->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content1->save();

        $media1 = new Media();
        $media1->content_id = $content1->id ?? null;
        $media1->url = "partner-antamedika.webp";
        $media1->type = 2;
        $media1->save();

        // Partner 2
        $content2 = new Content();
        $content2->title = "Partner 2";
        $content2->slug = "partner-2";
        $content2->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content2->save();

        $media2 = new Media();
        $media2->content_id = $content2->id ?? null;
        $media2->url = "partner-arogya.webp";
        $media2->type = 2;
        $media2->save();

        // Partner 3
        $content3 = new Content();
        $content3->title = "Partner 3";
        $content3->slug = "partner-3";
        $content3->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content3->save();

        $media3 = new Media();
        $media3->content_id = $content3->id ?? null;
        $media3->url = "partner-bni.webp";
        $media3->type = 2;
        $media3->save();

        // Partner 4
        $content4 = new Content();
        $content4->title = "Partner 4";
        $content4->slug = "partner-4";
        $content4->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content4->save();

        $media4 = new Media();
        $media4->content_id = $content4->id ?? null;
        $media4->url = "partner-bpjs.webp";
        $media4->type = 2;
        $media4->save();

        // Partner 5
        $content5 = new Content();
        $content5->title = "Partner 5";
        $content5->slug = "partner-5";
        $content5->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content5->save();

        $media5 = new Media();
        $media5->content_id = $content5->id ?? null;
        $media5->url = "partner-dell.webp";
        $media5->type = 2;
        $media5->save();

        // Partner 6
        $content6 = new Content();
        $content6->title = "Partner 6";
        $content6->slug = "partner-6";
        $content6->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content6->save();

        $media6 = new Media();
        $media6->content_id = $content6->id ?? null;
        $media6->url = "partner-nec.webp";
        $media6->type = 2;
        $media6->save();

        // Partner 7
        $content7 = new Content();
        $content7->title = "Partner 7";
        $content7->slug = "partner-7";
        $content7->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content7->save();

        $media7 = new Media();
        $media7->content_id = $content7->id ?? null;
        $media7->url = "partner-ocbc.webp";
        $media7->type = 2;
        $media7->save();

        // Partner 8
        $content8 = new Content();
        $content8->title = "Partner 8";
        $content8->slug = "partner-8";
        $content8->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content8->save();

        $media8 = new Media();
        $media8->content_id = $content8->id ?? null;
        $media8->url = "partner-pesona.webp";
        $media8->type = 2;
        $media8->save();

        // Partner 9
        $content9 = new Content();
        $content9->title = "Partner 9";
        $content9->slug = "partner-9";
        $content9->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content9->save();

        $media9 = new Media();
        $media9->content_id = $content9->id ?? null;
        $media9->url = "partner-rsjp.webp";
        $media9->type = 2;
        $media9->save();

        // Partner 10
        $content10 = new Content();
        $content10->title = "Partner 10";
        $content10->slug = "partner-10";
        $content10->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content10->save();

        $media10 = new Media();
        $media10->content_id = $content10->id ?? null;
        $media10->url = "partner-temp.webp";
        $media10->type = 2;
        $media10->save();

        // Partner 11
        $content11 = new Content();
        $content11->title = "Partner 11";
        $content11->slug = "partner-11";
        $content11->content_category_id = ContentCategory::where('category', 'partner')->first()->id ?? 1;
        $content11->save();

        $media11 = new Media();
        $media11->content_id = $content11->id ?? null;
        $media11->url = "partner-we+.webp";
        $media11->type = 2;
        $media11->save();

        $this->command->info('Content seeder completed!');
    }
}
