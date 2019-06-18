<?php

use Illuminate\Database\Seeder;
use App\Models\Appinstall;

class AppinstallsTableSeeder extends Seeder
{
    public function run()
    {
        $appinstalls = factory(Appinstall::class)->times(50)->make()->each(function ($appinstall, $index) {
            if ($index == 0) {
                // $appinstall->field = 'value';
            }
        });

        Appinstall::insert($appinstalls->toArray());
    }

}

