<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RepairBrandRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RepairBrandCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RepairBrandCrudController extends CrudController
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
        CRUD::setModel(\App\Models\RepairBrand::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/repair-brand');
        CRUD::setEntityNameStrings('бренд', 'Бренды');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'id', 
        ]);

        CRUD::addColumn([
            'name' => 'name', 
            'label' => 'Название'
        ]);

        CRUD::addColumn([
            'name' => 'image', 
            'label' => 'картинка',
            'type' => 'image',
            'prefix' => '/images/upload/',
            'height' => '70px',
            'width'  => '70px',
        ]);

        CRUD::addColumn([
            'name' => 'name_sub_category', 
            'label' => 'ПодКатегория'
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
        CRUD::setValidation(RepairBrandRequest::class);

        CRUD::addField([
            'name' => 'name', 
            'label' => 'Название'
        ]);

        CRUD::addField([
            'name' => 'title', 
            'label' => 'Заголовок'
        ]);

        CRUD::addField([
            'name' => 'slug', 
            'label' => 'Ссылка (генерируется автоматически)'
        ]);

        CRUD::addField([
            'name' => 'image', 
            'label' => 'Картинка',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads',
            'prefix' => '/images/upload/'
        ]);

        CRUD::addField([
            'name' => 'seo_title', 
            'label' => 'SEO title',
            'type'  => 'text'
        ]);

        CRUD::addField([
            'name' => 'seo_description', 
            'label' => 'SEO description',
            'type'  => 'text'
        ]);

        CRUD::addField([
            'name' => 'seo_keywords', 
            'label' => 'SEO keywords',
            'type'  => 'text'
        ]);

        CRUD::addField([
            'name' => 'sub_category_id', 
            'label' => 'Подкатегория'
        ]);
        
        CRUD::field('active');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
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
