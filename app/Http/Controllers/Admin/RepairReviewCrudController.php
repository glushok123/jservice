<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RepairReviewRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RepairReviewCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RepairReviewCrudController extends CrudController
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
        CRUD::setModel(\App\Models\RepairReview::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/repair-review');
        CRUD::setEntityNameStrings('отзыв', 'Отзывы');
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
            'name' => 'user_name', 
            'label' => 'Имя'
        ]);

        CRUD::addColumn([
            'name' => 'comment', 
            'label' => 'Комментарий'
        ]);

        CRUD::addColumn([
            'name' => 'date', 
            'label' => 'Дата'
        ]);

        CRUD::addColumn([
            'name' => 'name_image', 
            'label' => 'картинка (на странице)',
            'type' => 'image',
            'prefix' => '/images/upload/',
            'height' => '40px',
            'width'  => '40px',
        ]);

        CRUD::addColumn([
            'name' => 'name_category', 
            'label' => 'Категория'
        ]);

        CRUD::addColumn([
            'name' => 'name_sub_category', 
            'label' => 'ПодКатегория'
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
        CRUD::setValidation(RepairReviewRequest::class);

        CRUD::addField([
            'name' => 'user_name', 
            'label' => 'Активна'
        ]);

        CRUD::addField([
            'name' => 'name_image', 
            'label' => 'Картинка'
        ]);
        CRUD::addField([
            'name' => 'comment', 
            'label' => 'Коммент'
        ]);
        CRUD::addField([
            'name' => 'date', 
            'label' => 'Дата'
        ]);
        CRUD::addField([
            'name' => 'sub_category_id', 
            'label' => 'Подкатегория'
        ]);
        CRUD::addField([
            'name' => 'category_id', 
            'label' => 'Категория'
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
