<?php

namespace Eduard\Analitycs\Database\Seeders;

use Illuminate\Database\Seeder;
use Eduard\Analitycs\Models\EventSection;
use Illuminate\Support\Facades\DB;

class EventSections extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (EventSection::count() == 0) {
            DB::table("event_section")->insert([
                "id" => 1,
                "name" => "SEARCH",
                "code" => "search",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => null
            ]);
            DB::table("event_section")->insert([
                "id" => 2,
                "name" => "RECOMMEND",
                "code" => "recommend",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => null
            ]);
            DB::table("event_section")->insert([
                "id" => 3,
                "name" => "CUSTOM",
                "code" => "custom",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => null
            ]);
        }
    }
}