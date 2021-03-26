<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('username', __('Username'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('status', __('Status'));
        $grid->column('image', __('Image'));
        $grid->column('two_factor_auth', __('Two factor auth'))->display(function($id){
          if($id == 1){
            return "yes";
          }
          else{
            return "no";
          }
        });
        $grid->column('mobile', __('Mobile'));
        $grid->column('fax', __('Fax'));
        $grid->column('address_street', __('Address street'));
        $grid->column('address_country', __('Address country'));
        $grid->column('other_phone', __('Other phone'));
        $grid->column('home_phone', __('Home phone'));
        $grid->column('address_city', __('Address city'));
        $grid->column('description', __('Description'));
        $grid->column('department', __('Department'));
        $grid->column('im_type', __('Im type'));
        $grid->column('address_state', __('Address state'));
        $grid->column('im_name', __('Im name'));
        $grid->column('job_title', __('Job title'));
        $grid->column('address_code', __('Address code'));
        // $grid->column('invited_by', __('Invited by'));
        $grid->column('email', __('Email'));
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('username', __('Username'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('status', __('Status'));
        $show->field('image', __('Image'));
        $show->field('two_factor_auth', __('Two factor auth'));
        $show->field('mobile', __('Mobile'));
        $show->field('fax', __('Fax'));
        $show->field('address_street', __('Address street'));
        $show->field('address_country', __('Address country'));
        $show->field('other_phone', __('Other phone'));
        $show->field('home_phone', __('Home phone'));
        $show->field('address_city', __('Address city'));
        $show->field('description', __('Description'));
        $show->field('department', __('Department'));
        $show->field('im_type', __('Im type'));
        $show->field('address_state', __('Address state'));
        $show->field('im_name', __('Im name'));
        $show->field('job_title', __('Job title'));
        $show->field('address_code', __('Address code'));
        // $show->field('invited_by', __('Invited by'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new User());
          $form->text('username', __('Username'));
          $form->text('first_name', __('First name'));
          $form->text('last_name', __('Last name'));
          $form->number('status', __('Status'))->default(1);
          $form->image('image', __('Image'));
          $form->number('two_factor_auth', __('Two factor auth'));
          $form->number('mobile', __('Mobile'));
          $form->number('fax', __('Fax'));
          $form->text('address_street', __('Address street'));
          $form->text('address_country', __('Address country'));
          $form->text('other_phone', __('Other phone'));
          $form->text('home_phone', __('Home phone'));
          $form->text('address_city', __('Address city'));
          $form->text('description', __('Description'));
          $form->text('department', __('Department'));
          $form->text('im_type', __('Im type'));
          $form->text('address_state', __('Address state'));
          $form->text('im_name', __('Im name'));
          $form->text('job_title', __('Job title'));
          $form->text('address_code', __('Address code'));
          // $form->select('invited_by', __('Invited by'))->options(User::all()->pluck('email', 'id'));

          $form->email('email', __('Email'));
          // $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
          $form->password('password', __('Password'));
          // $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
