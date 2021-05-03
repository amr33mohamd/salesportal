<?php

namespace App\Admin\Controllers;

use App\Models\leads;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\lead_status;
use App\Models\nationality;
use App\Models\user;
use App\Models\industry;
use App\Models\application_types;
use App\Models\education_qualifications;
use App\Models\traffic_mediums;
use App\Models\hear_about_us;
use App\Models\traffic_source;
use App\Models\currencies;
use App\Models\sales_stage;

class leadsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'leads';
    protected $fieldsData = [];

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new leads());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'))->display(function($id){
            $user = user::find($id);
            if($user != null ) {
                return "<a href=\"/admin/users?&id=".$user->id."\">$user->username</a>";
            }
            else {
                return "k";
            }

        });;
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(leads::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new leads());
        $fields= leads::fields()->get();
        $tabs= $fields->groupby('extra.group');
        $fields_to_ignore= $fields->pluck('name');

        $lead= "";
        if($form->isEditing()) {
            $id = request()->route()->parameter('lead');
            $lead = leads::findOrFail($id);
        }

        $form->select('user_id', __('User id'))->options(User::all()->pluck('email', 'id'));
        foreach ($tabs as $tab => $fields){
            $form->tab($tab, function($form) use ($fields, $lead){
                foreach ($fields as $field){
                    $current_field= $form->{$field->type}($field->name, $field->label)->rules($field->validation_string);
                    if($field->type === "select" && $field->extra && $field->extra["options"]){
                        $current_field->options( $field->extra["options"]);
                    }
                    if($form->isEditing()){
                        $fieldObj= $lead->getFieldById($field->id);
                        if($fieldObj){
//                            dump($fieldObj->value);
                            $current_field->default($fieldObj->value);
                        }
                    }
                }
            });
        }

        $instance= $this;
        $form->submitted(function (Form $form) use($fields_to_ignore, $instance) {
            foreach ($fields_to_ignore as $field){
                $instance->fieldsData[$field]= request()->input($field);
                $form->ignore($field);
            }
        });

        $form->saved(function (Form $form) use ($instance) {
            $id= $form->model()->id;
            $lead= leads::findOrFail($id);
            $fieldRecords= collect($instance->fieldsData)->filter(function ($value){ return $value; })->toArray();
            $lead->fields= $fieldRecords;
            $lead->save();
        });
        return $form;
    }
}
