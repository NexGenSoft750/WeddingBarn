<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Storage;
use App\Models\DefaultImage;

/**
 * Class DefaultImageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DefaultImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\DefaultImage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/default-image');
        CRUD::setEntityNameStrings('default image', 'default images');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'image_path',
            'label' => 'Image',
            'type' => 'image',
            'prefix' => Storage::url(''),
            'height' => '150px',
            'width' => '150px',
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::field([   // Upload
            'name'      => 'image_path',
            'label'     => 'Image',
            'type'      => 'upload',
            'withFiles' => true,
            'disk'      => 'public',  // Ensure the image is stored in storage/app/public
            'upload'    => true,
        ]);
    }
}
