<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PriceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PriceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PriceCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Price::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/price');
        CRUD::setEntityNameStrings('price', 'prices');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'monday_thursday_price',
            'label' => 'Monday to Thursday Price',
            'type' => 'number',
        ]);
        $this->crud->addColumn([
            'name' => 'friday_non_peak',
            'label' => 'Friday Non-Peak Price',
            'type' => 'number',
        ]);
        $this->crud->addColumn([
            'name' => 'friday_peak',
            'label' => 'Friday Peak Price',
            'type' => 'number',
        ]);
        $this->crud->addColumn([
            'name' => 'saturday_non_peak',
            'label' => 'Saturday Non-Peak Price',
            'type' => 'number',
        ]);
        $this->crud->addColumn([
            'name' => 'saturday_peak',
            'label' => 'Saturday Peak Price',
            'type' => 'number',
        ]);
        $this->crud->addColumn([
            'name' => 'sunday_non_peak',
            'label' => 'Sunday Non-Peak Price',
            'type' => 'number',
        ]);
        $this->crud->addColumn([
            'name' => 'sunday_peak',
            'label' => 'Sunday Peak Price',
            'type' => 'number',
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'monday_thursday_price' => 'required|numeric',
            'friday_non_peak' => 'required|numeric',
            'friday_peak' => 'required|numeric',
            'saturday_non_peak' => 'required|numeric',
            'saturday_peak' => 'required|numeric',
            'sunday_non_peak' => 'required|numeric',
            'sunday_peak' => 'required|numeric',
        ]);

        CRUD::field('monday_thursday_price');
        CRUD::field('friday_non_peak');
        CRUD::field('friday_peak');
        CRUD::field('saturday_non_peak');
        CRUD::field('saturday_peak');
        CRUD::field('sunday_non_peak');
        CRUD::field('sunday_peak');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
