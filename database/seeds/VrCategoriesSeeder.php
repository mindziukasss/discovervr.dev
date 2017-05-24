<?php
use App\Models\VrCategories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: agnė
 * Date: 5/24/17
 * Time: 9:30 AM
 */
class VrCategoriesSeeder extends Seeder
{
    /** Categories seeds
     * @throws Exception
     *
     */
    public function run()
    {
        $categories = [
            ["name" => "Apie mus", "id" => "about", "language_id" => "LT"], //section describing concept of activity
            ["name" => "Virtualūs kambariai", "id" => "virtual-rooms", "language_id" => "LT"], //separate rooms themes
            ["name" => "Vieta ir laikas", "id" => "place-and-time", "language_id" => "LT"], //location of place
            ["name" => "Bilietai", "id" => "tickets", "language_id" => "LT"],
            ["name" => "Remėjai", "id" => "sponsors", "language_id" => "LT"],
            ["name" => "Poraštės", "id" => "footer", "language_id" => "LT"],

        ];
        DB::beginTransaction();
        try {
            foreach ($categories as $category) {
                $record = VrCategories::find($category['id']);
                if (!$record) {
                    VrCategories::create($category);
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