<?php

namespace App\Admin\Controllers;

use App\Models\meetings;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class meetingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'meetings';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new meetings());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('location', __('Location'));
        $grid->column('all_day', __('All day'));
        $grid->column('from', __('From'));
        $grid->column('to', __('To'));
        $grid->column('status', __('Status'));
        $grid->column('source', __('Source'));
        $grid->column('confirmed', __('Confirmed'));
        $grid->column('meetingable_type', __('Meetingable type'));
        $grid->column('meetingable_id', __('Meetingable id'));
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
        $show = new Show(meetings::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('location', __('Location'));
        $show->field('all_day', __('All day'));
        $show->field('from', __('From'));
        $show->field('to', __('To'));
        $show->field('status', __('Status'));
        $show->field('source', __('Source'));
        $show->field('confirmed', __('Confirmed'));
        $show->field('meetingable_type', __('Meetingable type'));
        $show->field('meetingable_id', __('Meetingable id'));
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
        $form = new Form(new meetings());

        $form->text('name', __('Name'));
        $form->text('location', __('Location'));
        $form->number('all_day', __('All day'))->default(1);
        $form->datetime('from', __('From'))->default(date('Y-m-d H:i:s'));
        $form->datetime('to', __('To'))->default(date('Y-m-d H:i:s'));
        $form->number('status', __('Status'))->default(1);
        $form->text('source', __('Source'));
        $form->number('confirmed', __('Confirmed'))->default(1);
        $form->text('meetingable_type', __('Meetingable type'));
        $form->number('meetingable_id', __('Meetingable id'));

        return $form;
    }
}
