<?php

use App\Models\VrMenu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VrMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ["name" => "Apie mus", "id" => "about", "sequence" => "1", "url" => "/about"], //section describing concept of activity
            ["name" => "Virtualūs kambariai", "id" => "virtual-rooms", "sequence" => "2", "url" => "/virtual-rooms"], //separate rooms themes
            ["name" => "Vieta ir laikas", "id" => "place-and-time", "sequence" => "3", "url" => "/place-and-time"], //location of place
            ["name" => "Bilietai", "id" => "tickets", "sequence" => "4", "url" => "/tickets"],
            ["name" => "Remėjai", "id" => "sponsors", "sequence" => "5", "url" => "/sponsors"],
            ["name" => "Akcija", "id" => "stock", "sequence" => "0", "url" => "/stock"],
            ["name" => "Plaukimas", "id" => "swiming", "sequence" => "2", "url" => "/virtual-rooms/swiming", "vr_parent_id" => "virtual-rooms"],
            ["name" => "Zaidimas", "id" => "play", "sequence" => "2", "url" => "/virtual-rooms/play", "vr_parent_id" => "virtual-rooms" ],
            ["name" => "Darbas", "id" => "work", "sequence" => "2", "url" => "/virtual-rooms/work", "vr_parent_id" => "virtual-rooms"],
            ["name" => "Elektromarkt", "id" => "elektromark", "sequence" => "5", "url" => "/sponsors/elektromark", "vr_parent_id" => "sponsors" ],
            ["name" => "Telesoft", "id" => "telesoft", "sequence" => "5", "url" => "/sponsors/telesoft", "vr_parent_id" => "sponsors" ],




        ];
        DB::beginTransaction();
        try {
            foreach ($categories as $category) {
                $record = VrMenu::find($category['id']);
                if (!$record) {
                    VrMenu::create($category);
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

