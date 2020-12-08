<?php

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