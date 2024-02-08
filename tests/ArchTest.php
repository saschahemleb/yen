<?php

test('modules', function () {
    modules()->each(function ($module) {
        expect("Yen\\Modules\\{$module}\\Http\\Controllers")
            ->toExtend(\Yen\Http\Controllers\Controller::class)
            ->and("Yen\\Modules\\{$module}\\Console\Commands")
            ->toExtend(\Yen\Console\Commands\Command::class)
            ->and("Yen\\Modules\\{$module}\\Models")
            ->toExtend(\Yen\Models\Model::class)
            ->and("Yen\\Modules\\{$module}\\Actions")
            ->not->toUse(['request', 'Illuminate\Http'])
            ->and("Yen\\Modules\\{$module}\\Events")
            ->toExtend(\Yen\Events\Event::class);
    });
});

test('globals')
    ->expect(['dd', 'dump'])
    ->not->toBeUsed();
