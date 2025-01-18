<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TimeSlotRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TimeSlotCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TimeSlotCrudController extends CrudController
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
        CRUD::setModel(\App\Models\TimeSlot::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/time-slot');
        CRUD::setEntityNameStrings('time slot', 'time slots');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        // 12-hour time array (from 12:00 AM to 11:00 PM)
        $times12Hour = [
            '12:00 AM' => '12:00 AM',
            '01:00 AM' => '01:00 AM',
            '02:00 AM' => '02:00 AM',
            '03:00 AM' => '03:00 AM',
            '04:00 AM' => '04:00 AM',
            '05:00 AM' => '05:00 AM',
            '06:00 AM' => '06:00 AM',
            '07:00 AM' => '07:00 AM',
            '08:00 AM' => '08:00 AM',
            '09:00 AM' => '09:00 AM',
            '10:00 AM' => '10:00 AM',
            '11:00 AM' => '11:00 AM',
            '12:00 PM' => '12:00 PM',
            '01:00 PM' => '01:00 PM',
            '02:00 PM' => '02:00 PM',
            '03:00 PM' => '03:00 PM',
            '04:00 PM' => '04:00 PM',
            '05:00 PM' => '05:00 PM',
            '06:00 PM' => '06:00 PM',
            '07:00 PM' => '07:00 PM',
            '08:00 PM' => '08:00 PM',
            '09:00 PM' => '09:00 PM',
            '10:00 PM' => '10:00 PM',
            '11:00 PM' => '11:00 PM'
        ];

        // Add field to CRUD panel
        $this->crud->addField([
            'name' => 'time',
            'label' => 'Time',
            'type' => 'select_from_array',
            'options' => array_merge(
                ['' => 'Select a time'], // Initially empty selected value
                $times12Hour // Use the 12-hour formatted times with AM/PM as both keys and options
            ),
            'allows_null' => true, // Allows the empty selection
            'default' => '', // Default empty selection
        ]);

        // Validation for the time field
        $this->crud->setValidation([
            'time' => 'required|in:' . implode(',', array_keys($times12Hour)), // Ensure the time is in valid 12-hour format with AM/PM
        ]);








        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
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
