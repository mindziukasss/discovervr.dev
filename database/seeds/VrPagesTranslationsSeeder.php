<?php

use App\Models\VrPagesTranslations;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VrPagesTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $translations = [
            ['id'=>'LT', "page_id" => "the_lab", "language_code" => "lt1", 'title'=>'lab', 'description_short'=>'trumpas aprasas', 'description_long'=>'ilgas aprasas bla bla'],
            ['id'=>'LT1',"page_id" => "samsung_irklavimas", "language_code" => "lt2", 'title'=>'irklavimas', 'description_short'=>'trumpas aprasas', 'description_long'=>'ilgas aprasas bla bla'],
            ['id'=>'LT2',"page_id" => "ktu_parasparnis", "language_code" => "lt3", 'title'=>'parasparnis', 'description_short'=>'trumpas aprasas', 'description_long'=>'ilgas aprasas bla bla'],
            ['id'=>'LT3',"page_id" => "hurl", "language_code" => "lt4", 'title'=>'hurl', 'description_short'=>'trumpas aprasas', 'description_long'=>'ilgas aprasas bla bla'],
            ['id'=>'LT4',"page_id" => "tilt_brush", "language_code" => "lt5", 'title'=>'brush', 'description_short'=>'trumpas aprasas', 'description_long'=>'ilgas aprasas bla bla'],
            ['id'=>'LT5',"page_id" => "fruit_ninja", "language_code" => "lt6", 'title'=>'ninja', 'description_short'=>'trumpas aprasas', 'description_long'=>'ilgas aprasas bla bla'],
        ];

        DB::beginTransaction();
        try {
            foreach ($translations as $translation) {
                $record = VrPagesTranslations::find($translation['id']);
                if (!$record) {
                    VrPagesTranslations::create($translation);
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
