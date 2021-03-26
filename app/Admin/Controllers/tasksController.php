<?php

namespace App\Admin\Controllers;

use App\Models\tasks;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class tasksController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'tasks';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new tasks());

        $grid->column('id', __('Id'));
        $grid->column('owner', __('Owner'));
        $grid->column('subject', __('Subject'));
        $grid->column('due_date', __('Due date'));
        $grid->column('client', __('Client'));
        $grid->column('monster_leads', __('Monster leads'));
        $grid->column('status', __('Status'));
        $grid->column('priority', __('Priority'));
        $grid->column('reminder', __('Reminder'));
        $grid->column('repeat', __('Repeat'));
        $grid->column('task_source', __('Task source'));
        $grid->column('task_google_id', __('Task google id'));
        $grid->column('description', __('Description'));
        $grid->column('exchange_rate', __('Exchange rate'));
        $grid->column('currency_id', __('Currency id'));
        $grid->column('taskable_type', __('Taskable type'));
        $grid->column('taskable_id', __('Taskable id'));
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
        $show = new Show(tasks::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('owner', __('Owner'));
        $show->field('subject', __('Subject'));
        $show->field('due_date', __('Due date'));
        $show->field('client', __('Client'));
        $show->field('monster_leads', __('Monster leads'));
        $show->field('status', __('Status'));
        $show->field('priority', __('Priority'));
        $show->field('reminder', __('Reminder'));
        $show->field('repeat', __('Repeat'));
        $show->field('task_source', __('Task source'));
        $show->field('task_google_id', __('Task google id'));
        $show->field('description', __('Description'));
        $show->field('exchange_rate', __('Exchange rate'));
        $show->field('currency_id', __('Currency id'));
        $show->field('taskable_type', __('Taskable type'));
        $show->field('taskable_id', __('Taskable id'));
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
        $form = new Form(new tasks());

        $form->text('owner', __('Owner'));
        $form->text('subject', __('Subject'));
        $form->date('due_date', __('Due date'))->default(date('Y-m-d'));
        $form->text('client', __('Client'));
        $form->text('monster_leads', __('Monster leads'));
        $form->number('status', __('Status'));
        $form->number('priority', __('Priority'))->default(1);
        $form->number('reminder', __('Reminder'))->default(1);
        $form->number('repeat', __('Repeat'))->default(1);
        $form->text('task_source', __('Task source'));
        $form->text('task_google_id', __('Task google id'));
        $form->text('description', __('Description'));
        $form->text('exchange_rate', __('Exchange rate'));
        $form->number('currency_id', __('Currency id'));
        $form->text('taskable_type', __('Taskable type'));
        $form->number('taskable_id', __('Taskable id'));

        return $form;
    }
}
