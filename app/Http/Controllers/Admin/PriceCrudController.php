<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PriceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Price;

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
        CRUD::setModel(Price::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/price');
        CRUD::setEntityNameStrings('price', 'prices');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @return void
     */
    protected function setupListOperation()
    {
        // Existing pricing fields:
        $this->crud->addColumn(['name' => 'monday_thursday_price', 'label' => 'Monday to Thursday Price', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'friday_non_peak', 'label' => 'Friday Non-Peak Price', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'friday_peak', 'label' => 'Friday Peak Price', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'saturday_non_peak', 'label' => 'Saturday Non-Peak Price', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'saturday_peak', 'label' => 'Saturday Peak Price', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'sunday_non_peak', 'label' => 'Sunday Non-Peak Price', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'sunday_peak', 'label' => 'Sunday Peak Price', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'multi_day_friday_saturday_peak', 'label' => 'Multi-Day (Fri & Sat) Peak', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'multi_day_friday_saturday_non_peak', 'label' => 'Multi-Day (Fri & Sat) Non-Peak', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'multi_day_saturday_sunday_peak', 'label' => 'Multi-Day (Sat & Sun) Peak', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'multi_day_saturday_sunday_non_peak', 'label' => 'Multi-Day (Sat & Sun) Non-Peak', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'full_weekend_peak', 'label' => 'Full Weekend Peak', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'full_weekend_non_peak', 'label' => 'Full Weekend Non-Peak', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'full_weekend_only', 'label' => 'Full Weekend Only', 'type' => 'number']);

        // Additional Micro Pricing Fields:
        $this->crud->addColumn(['name' => 'micro_day_range', 'label' => 'Micro Day Range', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'micro_guest_range_1', 'label' => 'Package 1 - Guest Range', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'micro_price_1', 'label' => 'Package 1 - Price', 'type' => 'number', 'prefix' => '$', 'decimals' => 2]);
        $this->crud->addColumn(['name' => 'micro_guest_range_2', 'label' => 'Package 2 - Guest Range', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'micro_price_2', 'label' => 'Package 2 - Price', 'type' => 'number', 'prefix' => '$', 'decimals' => 2]);
        $this->crud->addColumn(['name' => 'micro_guest_range_3', 'label' => 'Package 3 - Guest Range', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'micro_price_3', 'label' => 'Package 3 - Price', 'type' => 'number', 'prefix' => '$', 'decimals' => 2]);
        $this->crud->addColumn(['name' => 'micro_guest_range_4', 'label' => 'Package 4 - Guest Range', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'micro_price_4', 'label' => 'Package 4 - Price', 'type' => 'number', 'prefix' => '$', 'decimals' => 2]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PriceRequest::class);

        // Existing pricing fields:
        CRUD::field('monday_thursday_price');
        CRUD::field('friday_non_peak');
        CRUD::field('friday_peak');
        CRUD::field('saturday_non_peak');
        CRUD::field('saturday_peak');
        CRUD::field('sunday_non_peak');
        CRUD::field('sunday_peak');
        CRUD::field('multi_day_friday_saturday_peak');
        CRUD::field('multi_day_friday_saturday_non_peak');
        CRUD::field('multi_day_saturday_sunday_peak');
        CRUD::field('multi_day_saturday_sunday_non_peak');
        CRUD::field('full_weekend_peak');
        CRUD::field('full_weekend_non_peak');
        CRUD::field('full_weekend_only');

        // Additional Micro Pricing Fields:
        CRUD::field([
            'name'    => 'micro_day_range',
            'label'   => 'Micro Day Range',
            'type'    => 'text',
            'default' => 'Mon - Thursday',
        ]);
        CRUD::field([
            'name'    => 'micro_guest_range_1',
            'label'   => 'Package 1 - Guest Range',
            'type'    => 'text',
            'default' => '30 - 40 Guests',
        ]);
        CRUD::field([
            'name'     => 'micro_price_1',
            'label'    => 'Package 1 - Price',
            'type'     => 'number',
            'prefix'   => '$',
            'decimals' => 2,
            'default'  => 4199.00,
        ]);
        CRUD::field([
            'name'    => 'micro_guest_range_2',
            'label'   => 'Package 2 - Guest Range',
            'type'    => 'text',
            'default' => '40 - 50 Guests',
        ]);
        CRUD::field([
            'name'     => 'micro_price_2',
            'label'    => 'Package 2 - Price',
            'type'     => 'number',
            'prefix'   => '$',
            'decimals' => 2,
            'default'  => 4599.00,
        ]);
        CRUD::field([
            'name'    => 'micro_guest_range_3',
            'label'   => 'Package 3 - Guest Range',
            'type'    => 'text',
            'default' => '50 - 60 Guests',
        ]);
        CRUD::field([
            'name'     => 'micro_price_3',
            'label'    => 'Package 3 - Price',
            'type'     => 'number',
            'prefix'   => '$',
            'decimals' => 2,
            'default'  => 4899.00,
        ]);
        CRUD::field([
            'name'    => 'micro_guest_range_4',
            'label'   => 'Package 4 - Guest Range',
            'type'    => 'text',
            'default' => '60 - 70 Guests',
        ]);
        CRUD::field([
            'name'     => 'micro_price_4',
            'label'    => 'Package 4 - Price',
            'type'     => 'number',
            'prefix'   => '$',
            'decimals' => 2,
            'default'  => 5299.00,
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
