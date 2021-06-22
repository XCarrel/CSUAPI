<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BasesTableSeeder::class);
        $this->call(DrugsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(NovasTableSeeder::class);
        $this->call(BatchesTableSeeder::class);
        $this->call(DrugsheetsTableSeeder::class);
        $this->call(DrugsheetUseBatchTableSeeder::class);
        $this->call(DrugsheetUseNovaTableSeeder::class);
        $this->call(DrugsignaturesTableSeeder::class);
        $this->call(NovachecksTableSeeder::class);
        $this->call(PharmachecksTableSeeder::class);
        $this->call(RestocksTableSeeder::class);
        $this->call(ShiftsectionsTableSeeder::class);
        $this->call(ShiftactionsTableSeeder::class);
        $this->call(ShiftmodelsTableSeeder::class);
        $this->call(ShiftmodelHasShiftactionTableSeeder::class);
        $this->call(ShiftsheetsTableSeeder::class);
        $this->call(ShiftchecksTableSeeder::class);
        $this->call(ShiftcommentsTableSeeder::class);
        $this->call(ShiftteamsTableSeeder::class);
        $this->call(TodothingsTableSeeder::class);
        $this->call(TodosheetsTableSeeder::class);
        $this->call(TodosTableSeeder::class);
        $this->call(TokensTableSeeder::class);
        $this->call(WorktimesTableSeeder::class);
        $this->call(WorkplanningsTableSeeder::class);
    }
}
