<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Flynsarmy\CsvSeeder\CsvSeeder;

class AreasCsvSeeder extends CsvSeeder {

	public function __construct()
	{
		$this->table = 'areas';
		$this->filename = base_path().'/database/seedsTest/csvs/areas_csv.csv';
	}

	public function run()
	{
		// Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		// DB::table($this->table)->truncate();

		parent::run();
	}
}


class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     **/

    public function run()
    {
        $this->call(AreasCsvSeeder::class);
    }
}
