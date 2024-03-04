<?php

namespace App\Imports;

use App\Models\Content;
use App\Models\ContentCategory;
use App\Models\Media;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\Shared\Date;


class ContentImport implements ToCollection, WithHeadingRow

{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $collection)
    {
        $result = [];
        foreach ($collection as  $value) {
            if (isset($value['title'])) {
                $content                       = new Content();
                $content->content_category_id  = ContentCategory::where('type', 'insight')->first()->id ?? null;
                $content->title                = $value['title'];
                $content->content                 = $value['body'];
                $content->slug                 = Str::slug($value['title'], '-');
                $content->created_at           = Date::excelToDateTimeObject($value['tanggal'])->format('Y-m-d H:i:s');
                $content->updated_at           = Date::excelToDateTimeObject($value['tanggal'])->format('Y-m-d H:i:s');
                $content->save();
                $images = explode(',', $value['image']);
                foreach ($images as  $image) {
                    $media = new Media();
                    $media->content_id = $content->id ?? null;
                    $media->url = $image;
                    $media->type = strpos($image, "www.youtube.com") ? 1 : (strpos($image, ".mp4") ? 3 : 2);
                    $media->save();
                }
                $thumbnail = Media::where('url',  'like', '%' . $value['thumbnail'] ?? "" . '%')->first() ?? null;
                $result[] = $thumbnail;
                if ($thumbnail) {
                    $thumbnail->update(['is_thumbnail' => true]);
                }
            }
        }
    }
}
