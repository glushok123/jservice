<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RepairSubCategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RepairSubCategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RepairSubCategoryCrudController extends CrudController
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
        CRUD::setModel(\App\Models\RepairSubCategory::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/repair-sub-category');
        CRUD::setEntityNameStrings('Покатегирию', 'Подкатегории');
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
            'name' => 'image', 
            'label' => 'картинка (на странице)',
            'type' => 'image',
            'prefix' => '/images/upload/',
            'height' => '70px',
            'width'  => '70px',
        ]);

        CRUD::addColumn([
            'name' => 'small_image', 
            'label' => 'картинка (ссылка )',
            'type' => 'image',
            'prefix' => '/images/upload/',
            'height' => '70px',
            'width'  => '70px',
        ]);

        CRUD::addColumn([
            'name' => 'name_category', 
            'label' => 'Категория'
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
        CRUD::setValidation(RepairSubCategoryRequest::class);

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
            'label' => 'Картинка (основная)',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads',
            'prefix' => '/images/upload/'
        ]);

        CRUD::addField([
            'name' => 'small_image', 
            'label' => 'Картинка (ссылка)',
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
            'name' => 'template_description_brand', 
            'label' => 'Шаблон для брендов (BRAND_NAME - слово которое заменится на название бренда)',
            'type'  => 'editor_custom'
        ]);

        CRUD::addField([  // Select
            'label'     => "Категория",
            'type'      => 'select',
            'name'      => 'parent_id', // the db column for the foreign key
         
            // optional
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'category',
         
            // optional - manually specify the related model and attribute
            'model'     => "App\Models\RepairCategory", // related model
            'attribute' => 'name', // foreign key attribute that is shown to user
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
