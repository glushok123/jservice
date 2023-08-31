<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RepairCategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RepairCategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RepairCategoryCrudController extends CrudController
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
        CRUD::setModel(\App\Models\RepairCategory::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/repair-category');
        CRUD::setEntityNameStrings('категорию', 'Категории');
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
            'name' => 'min_price', 
            'label' => 'Цена'
        ]);


        CRUD::addColumn([
            'name' => 'min_time', 
            'label' => 'Время'
        ]);

        CRUD::addColumn([
            'name' => 'sort', 
            'label' => 'Сортировка'
        ]);

        CRUD::addColumn([
            'name' => 'image', 
            'label' => 'картинка',
            'type' => 'image',
            'prefix' => '/images/upload/',
            'height' => '70px',
            'width'  => '70px',
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
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
        CRUD::setValidation(RepairCategoryRequest::class);

        CRUD::addField([
            'name' => 'sort', 
            'label' => 'Сортировка'
        ]);

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
            'name' => 'min_price', 
            'label' => 'Цена'
        ]);

        CRUD::addField([
            'name' => 'min_time', 
            'label' => 'Время'
        ]);

        CRUD::addField([
            'name' => 'description', 
            'label' => 'Статья',
            'type'  => 'editor_custom'
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
            'name' => 'active', 
            'label' => 'Активна'
        ]);


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
