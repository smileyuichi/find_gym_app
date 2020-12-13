<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Flynsarmy\CsvSeeder\CsvSeeder;

class GymsCsvSeeder extends CsvSeeder {

	public function __construct()
	{
		$this->table = 'gyms';
		$this->filename = base_path().'/database/seedsTest/csvs/gyms_csv.csv';
	}

	public function run()
	{
		// Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		DB::table($this->table)->truncate();

		parent::run();
	}
}


class GymTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * $table->increments('id');
     * $table->string('name');
     * $table->text('outline');
     * $table->string('postal_code');
     * $table->string('address');
     * $table->float('latitude');
     * $table->float('longtitude');
     * 
     * @return void
     **/

    public function run()
    {
        $this->call(GymsCsvSeeder::class);
    }
}
