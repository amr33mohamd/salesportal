<?php

namespace App\Admin\Controllers;

use App\Models\calls;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\sales_stage;
class callsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'calls';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new calls());

        $grid->column('id', __('Id'));
        $grid->select('sales_stage_id', __('Sales stage id'))->options(sales_stage::all()->pluck('name', 'id'));;
        $grid->column('related_to', __('Related to'));
        $grid->column('call_type', __('Call type'));
        $grid->column('status', __('Status'));
        $grid->column('start', __('Start'));
        $grid->column('owner', __('Owner'));
        $grid->column('subject', __('Subject'));
        $grid->select('reminder', __('Reminder'));
        $grid->column('purpose', __('Purpose'));
        $grid->column('agenda', __('Agenda'));
        // $grid->column('callable_type', __('Callable type'));
        $grid->column('callable_id', __('Callable id'));
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
        $show = new Show(calls::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('sales_stage_id', __('Sales stage id'));
        $show->field('related_to', __('Related to'));
        $show->field('call_type', __('Call type'));
        $show->field('status', __('Status'));
        $show->field('start', __('Start'));
        $show->field('owner', __('Owner'));
        $show->field('subject', __('Subject'));
        $show->field('reminder', __('Reminder'));
        $show->field('purpose', __('Purpose'));
        $show->field('agenda', __('Agenda'));
        // $show->field('callable_type', __('Callable type'));
        // $show->field('callable_id', __('Callable id'));
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
        $form = new Form(new calls());

        $form->select('sales_stage_id', __('Sales stage id'))->options(sales_stage::all()->pluck('name', 'id'));
        $form->text('related_to', __('Related to'));
        $form->text('call_type', __('Call type'));
        $form->text('status', __('Status'))->default('1');
        $form->datetime('start', __('Start'))->default(date('Y-m-d H:i:s'));
        $form->text('owner', __('Owner'));
        $form->text('subject', __('Subject'));
        $form->select('reminder', __('Reminder'))->default(1)->options([0=>"yes",1=>"no"]);
        $form->text('purpose', __('Purpose'));
        $form->text('agenda', __('Agenda'));
        // $form->text('callable_type', __('Callable type'));
        // $form->number('callable_id', __('Callable id'));

        return $form;
    }
}
