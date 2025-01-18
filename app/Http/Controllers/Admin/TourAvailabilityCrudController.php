<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TourAvailabilityRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TourAvailabilityCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TourAvailabilityCrudController extends CrudController
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
        CRUD::setModel(\App\Models\TourAvailability::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tour-availability');
        CRUD::setEntityNameStrings('tour availability', 'tour availabilities');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumns([
            [
                'name'  => 'available_date',  // Column name in the database
                'label' => 'Available Date',  // Column label to be displayed
                'type'  => 'date',  // Format as a date field
                'format' => 'Y-m-d',  // Format for the date (optional)
            ],
            [
                'name'  => 'monday',  // Monday field from the database
                'label' => 'Monday',  // Display label
                'type'  => 'boolean',  // Display as boolean (checked/unchecked)
            ],
            [
                'name'  => 'tuesday',  // Tuesday field from the database
                'label' => 'Tuesday',
                'type'  => 'boolean',
            ],
            [
                'name'  => 'wednesday',
                'label' => 'Wednesday',
                'type'  => 'boolean',
            ],
            [
                'name'  => 'thursday',
                'label' => 'Thursday',
                'type'  => 'boolean',
            ],
            [
                'name'  => 'friday',
                'label' => 'Friday',
                'type'  => 'boolean',
            ],
            [
                'name'  => 'saturday',
                'label' => 'Saturday',
                'type'  => 'boolean',
            ],
            [
                'name'  => 'sunday',
                'label' => 'Sunday',
                'type'  => 'boolean',
            ],
            [
                'name'  => 'is_virtual',  // Is virtual tour available
                'label' => 'Virtual Tour Available',
                'type'  => 'boolean',  // Display as a checkbox
            ],
            [
                'name'  => 'is_in_person',  // Is in-person tour available
                'label' => 'In-Person Tour Available',
                'type'  => 'boolean',  // Display as a checkbox
            ],
            [
                'name'  => 'status',  // Status field for the availability
                'label' => 'Status',
                'type'  => 'enum',  // Display the status enum
            ],
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

        $this->crud->setValidation([
            'is_virtual' => 'required|in:1',  // Checkbox must be checked (1)
            'is_in_person' => 'required|in:1', // Checkbox must be checked (1)
        ]);





        $this->crud->addFields([
            [
                'name'  => 'monday',
                'label' => 'Monday',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'tuesday',
                'label' => 'Tuesday',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'wednesday',
                'label' => 'Wednesday',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'thursday',
                'label' => 'Thursday',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'friday',
                'label' => 'Friday',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'saturday',
                'label' => 'Saturday',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'sunday',
                'label' => 'Sunday',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'is_virtual',
                'label' => 'Virtual Tour Available?',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'is_in_person',
                'label' => 'In-Person Tour Available?',
                'type'  => 'checkbox',
            ],
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->crud->setValidation([
            'is_virtual' => 'required|in:1',  // Checkbox must be checked (1)
            'is_in_person' => 'required|in:1', // Checkbox must be checked (1)
        ]);
        $this->setupCreateOperation();
    }
}
