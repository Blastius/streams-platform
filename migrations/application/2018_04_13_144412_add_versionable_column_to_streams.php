<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddVersionableColumnToStreams extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema()->table(
            'streams_streams',
            function (Blueprint $table) {
                $table->boolean('versionable')->default(0)->after('translatable');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema()->table(
            'streams_streams',
            function (Blueprint $table) {
                $table->dropColumn('versionable');
            }
        );
    }

}
