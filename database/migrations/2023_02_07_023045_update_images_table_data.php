<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateImagesTableData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('images')->insertUsing(['report_id', 'image1', 'image2', 'image3', 'image4', 'location', 'created_at'], function ($query) {
            $query->select('reports.id', 'reports.image1', 'reports.image2', 'reports.image3', 'reports.image4', 'constructions.geom', 'reports.updated_at')
                ->from('reports')
                ->join('constructions', 'reports.construction_id', '=', 'constructions.id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('images')->truncate();
    }
}
