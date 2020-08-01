<?php

use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cooperation::create(['name' => 'Direkt']);
        App\Cooperation::create(['name' => 'HVB']);
        App\Cooperation::create(['name' => 'Makler']);

        App\ActionDescription::create(['name' => 'Bestandsimpulse']);
        App\ActionDescription::create(['name' => 'Bestandsbearbeitung']);
        App\ActionDescription::create(['name' => 'Direkt']);
        App\ActionDescription::create(['name' => 'Impulsweitergabe']);

        App\Action::create(['name' => 'Das Beste aus 2 Welten']);
        App\Action::create(['name' => 'vL']);
    }
}
