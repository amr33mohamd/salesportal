<?php

namespace App\Admin\Controllers;

use App\Models\contacts;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class contactsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'contacts';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new contacts());

        $grid->column('id', __('Id'));
        $grid->column('fax', __('Fax'));
        $grid->column('billing_city', __('Billing city'));
        $grid->column('billing_street', __('Billing street'));
        $grid->column('billing_state', __('Billing state'));
        $grid->column('billing_postal_code', __('Billing postal code'));
        $grid->column('shipping_city', __('Shipping city'));
        $grid->column('shipping_street', __('Shipping street'));
        $grid->column('shipping_state', __('Shipping state'));
        $grid->column('shipping_postal_code', __('Shipping postal code'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('account_id', __('Account id'));
        $grid->column('office_phone', __('Office phone'));
        $grid->column('email', __('Email'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('job_title', __('Job title'));
        $grid->column('email_type', __('Email type'));
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
        $show = new Show(contacts::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('fax', __('Fax'));
        $show->field('billing_city', __('Billing city'));
        $show->field('billing_street', __('Billing street'));
        $show->field('billing_state', __('Billing state'));
        $show->field('billing_postal_code', __('Billing postal code'));
        $show->field('shipping_city', __('Shipping city'));
        $show->field('shipping_street', __('Shipping street'));
        $show->field('shipping_state', __('Shipping state'));
        $show->field('shipping_postal_code', __('Shipping postal code'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('account_id', __('Account id'));
        $show->field('office_phone', __('Office phone'));
        $show->field('email', __('Email'));
        $show->field('mobile', __('Mobile'));
        $show->field('job_title', __('Job title'));
        $show->field('email_type', __('Email type'));
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
        $form = new Form(new contacts());

        $form->text('fax', __('Fax'));
        $form->text('billing_city', __('Billing city'));
        $form->text('billing_street', __('Billing street'));
        $form->text('billing_state', __('Billing state'));
        $form->text('billing_postal_code', __('Billing postal code'));
        $form->text('shipping_city', __('Shipping city'));
        $form->text('shipping_street', __('Shipping street'));
        $form->text('shipping_state', __('Shipping state'));
        $form->text('shipping_postal_code', __('Shipping postal code'));
        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->number('account_id', __('Account id'));
        $form->text('office_phone', __('Office phone'));
        $form->email('email', __('Email'));
        $form->mobile('mobile', __('Mobile'));
        $form->text('job_title', __('Job title'));
        $form->text('email_type', __('Email type'));

        return $form;
    }
}
