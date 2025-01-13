<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TourBookingRequest;
use App\Models\TourBooking;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Mail;
use App\Mail\TourBookingConfirmation;

class TourBookingCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
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
        CRUD::setModel(\App\Models\TourBooking::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tour-booking');
        CRUD::setEntityNameStrings('tour booking', 'tour bookings');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::setValidation(TourBookingRequest::class);
        CRUD::setFromDb(); // set fields from db columns.
        CRUD::column('tour_date')->type('date')->label('Tour Date');
        CRUD::column('tour_time')->type('time')->label('Tour Time');
    }

    /**
     * Define what happens when the Delete operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-delete
     * @return void
     */
    protected function setupDeleteOperation()
    {
        // Custom functionality for delete can be added here.
    }

    /**
     * Override the store method to handle validation, saving the booking,
     * and sending the email confirmation.
     *
     * @return \Illuminate\Http\RedirectResponse
     */


    /**
     * Get the list of booked dates and pass them to the view.
     *
     * @return \Illuminate\View\View
     */
}
