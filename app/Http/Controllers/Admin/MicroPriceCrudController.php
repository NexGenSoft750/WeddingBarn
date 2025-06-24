<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\MicroPrice;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class MicroPriceCrudController extends CrudController
{
    public function setup()
    {
        CRUD::setModel(MicroPrice::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/micro-price');
        CRUD::setEntityNameStrings('Micro Price', 'Micro Prices');
    }

    protected function setupListOperation()
    {
        CRUD::column('day_range')->label('Day Range');
        CRUD::column('guest_range')->label('Guest Range');
        CRUD::column('price')
            ->label('Price')
            ->type('number')
            ->prefix('$')
            ->decimals(2);
    }

    protected function setupCreateOperation()
    {
        // Optionally, you can create a FormRequest for validation.
        // For now, we leave validation aside.
        CRUD::field('day_range')->label('Day Range');
        CRUD::field('guest_range')->label('Guest Range');
        CRUD::field('price')
            ->label('Price')
            ->type('number')
            ->prefix('$')
            ->decimals(2);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
