<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('menu_items')->truncate();

        MenuItem::create([/*1*/ "libelle" => "Dashboard", "libelle_ar" => "", "icon" => "la-user", "link" => "dashboards",]);
        MenuItem::create([/*2*/ "libelle" => "Gestion de stock", "libelle_ar" => "", "icon" => "la-dashboard", "link" => "test/info",]);
        MenuItem::create([/*3*/ "libelle" => "Gestion cours", "libelle_ar" => "", "icon" => "la-edit", "link" => "test/info",]);
        MenuItem::create([/*4*/ "libelle" => "Gestion etudiant", "libelle_ar" => "", "icon" => "la-edit", "link" => "test/info",]);
        MenuItem::create([/*5*/ "libelle" => "Gestion Professeur", "libelle_ar" => "", "icon" => "la-edit", "link" => "test/info",]);
        MenuItem::create([/*6*/ "libelle" => "Gestion multimedia", "libelle_ar" => "", "icon" => "la-edit", "link" => "test/info",]);
        MenuItem::create([/*7*/ "parent_id" => 1, "libelle" => "Quariter", "libelle_ar" => "", "icon" => "la-building", "link" => "test",]);
        MenuItem::create([/*8*/ "parent_id" => 2, "libelle" => "Routing home", "libelle_ar" => "", "link" => "test/info",]);
        MenuItem::create([/*9*/ "parent_id" => 8, "libelle" => "All the ", "libelle_ar" => "", "icon" => "la-settings", "link" => "test/info",]);
        MenuItem::create([/*10*/ "parent_id" => 9, "libelle" => "Mastering web", "libelle_ar" => "", "icon" => "la-home", "link" => "test/info",]);
        MenuItem::create([/*11*/ "parent_id" => 10, "libelle" => "Mastering web", "libelle_ar" => "", "icon" => "la-home", "link" => "test/info",]);
        MenuItem::create([/*12*/ "parent_id" => 4, "libelle" => "Mastering web", "libelle_ar" => "", "icon" => "la-home", "link" => "test/info",]);
        MenuItem::create([/*13*/ "parent_id" => 12, "libelle" => "Mastering web", "libelle_ar" => "", "icon" => "la-home", "link" => "test/info",]);
    }
}
