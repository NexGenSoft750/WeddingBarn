<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PriceImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Storage;

/**
 * Class PriceImageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PriceImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\PriceImage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/price-image');
        CRUD::setEntityNameStrings('price image', 'price images');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name'  => 'image_path',
            'label' => 'Image',
            'type'  => 'image',
            'prefix' => Storage::url(''),
            'height' => '150px',
            'width' => '150px',
        ]);

        $this->crud->addColumn([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'text',
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(PriceImageRequest::class);

        $this->crud->addField([
            'name'      => 'image_path',
            'label'     => 'Image',
            'type'      => 'upload',
            'upload'    => true,
            'disk'      => 'public',
        ]);

        $this->crud->addField([
            'name'  => 'description',
            'label' => 'Image Description',
            'type'  => 'textarea',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation(); // Reuse the fields and validation rules
    }
}
