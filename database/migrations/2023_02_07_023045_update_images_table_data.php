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
        DB::table('images')->insertUsing(['report_id', 'image_url', 'location'], function ($query) {
            $query->select('reports.id', 'reports.image1', 'constructions.geom')
                ->from('reports')
                ->join('constructions', 'reports.construction_id', '=', 'constructions.id')
                ->whereNotNull('reports.image1');
        });

        DB::table('images')->insertUsing(['report_id', 'image_url', 'location'], function ($query) {
            $query->select('reports.id', 'reports.image1', 'constructions.geom')
                ->from('reports')
                ->join('constructions', 'reports.construction_id', '=', 'constructions.id')
                ->whereNotNull('reports.image2');
        });
        DB::table('images')->insertUsing(['report_id', 'image_url', 'location'], function ($query) {
            $query->select('reports.id', 'reports.image1', 'constructions.geom')
                ->from('reports')
                ->join('constructions', 'reports.construction_id', '=', 'constructions.id')
                ->whereNotNull('reports.image3');
        });
        DB::table('images')->insertUsing(['report_id', 'image_url', 'location'], function ($query) {
            $query->select('reports.id', 'reports.image1', 'constructions.geom')
                ->from('reports')
                ->join('constructions', 'reports.construction_id', '=', 'constructions.id')
                ->whereNotNull('reports.image4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
