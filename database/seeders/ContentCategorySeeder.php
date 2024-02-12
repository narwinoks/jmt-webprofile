<?php

namespace Database\Seeders;

use App\Models\ContentCategory;
use Illuminate\Database\Seeder;

class ContentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $model =  new ContentCategory();
        // $model->category = 'insight';
        // $model->type = 'insight';
        // $model->save();

        // $model =  new ContentCategory();
        // $model->category = 'contact-us';
        // $model->type = 'contact-us';
        // $model->save();

        $model =  new ContentCategory();
        $model->category = 'products';
        $model->type = 'products';
        $model->save();
    }
}
