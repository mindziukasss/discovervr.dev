<?php

use App\Models\VrLanguageCodes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VrLanguageCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['id'=>'asdff', "page_id" => "the_lab", "language_code" => "lt1"],
            ['id'=>'sagfd', "page_id" => "samsung_irklavimas", "language_code" => "lt2"],
            ['id'=>'sadff', "page_id" => "ktu_parasparnis", "language_code" => "lt3"],
            ['id'=>'fdsgf', "page_id" => "hurl", "language_code" => "lt4"],
            ['id'=>'fdsg', "page_id" => "tilt_brush", "language_code" => "lt5"],
            ['id'=>'alkj', "page_id" => "fruit_ninja", "language_code" => "lt6"],
        ];

        DB::beginTransaction();
        try {
            foreach ($languages as $language) {
                $record = VrLanguageCodes::find($language['id']);
                if (!$record) {
                    VrLanguageCodes::create($language);
                }
            }
        } catch (Exception $e) {
            DB::rollback();
            echo 'Point of failure '. $e->getCode() . ' ' . $e->getMessage();
            throw new Exception($e);
        }
        DB::commit();
    }
}
