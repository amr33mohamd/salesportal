<?php

namespace App\Admin\Controllers;

use App\Models\opportunities;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class opportunitiesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'opportunities';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new opportunities());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('currency_id', __('Currency id'));
        $grid->column('account_id', __('Account id'));
        $grid->column('close_date', __('Close date'));
        $grid->column('amount', __('Amount'));
        $grid->column('probability', __('Probability'));
        $grid->column('sales_stage_id', __('Sales stage id'));
        $grid->column('campaign', __('Campaign'));
        $grid->column('next_step', __('Next step'));
        $grid->column('description', __('Description'));
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
        $show = new Show(opportunities::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('currency_id', __('Currency id'));
        $show->field('account_id', __('Account id'));
        $show->field('close_date', __('Close date'));
        $show->field('amount', __('Amount'));
        $show->field('probability', __('Probability'));
        $show->field('sales_stage_id', __('Sales stage id'));
        $show->field('campaign', __('Campaign'));
        $show->field('next_step', __('Next step'));
        $show->field('description', __('Description'));
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
        $form = new Form(new opportunities());

        $form->text('name', __('Name'));
        $form->number('currency_id', __('Currency id'));
        $form->number('account_id', __('Account id'));
        $form->date('close_date', __('Close date'))->default(date('Y-m-d'));
        $form->decimal('amount', __('Amount'));
        $form->decimal('probability', __('Probability'));
        $form->number('sales_stage_id', __('Sales stage id'));
        $form->text('campaign', __('Campaign'));
        $form->text('next_step', __('Next step'));
        $form->text('description', __('Description'));

        return $form;
    }
}
