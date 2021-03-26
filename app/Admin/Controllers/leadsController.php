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

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new leads());

        $grid->column('id', __('Id'));
        $grid->column('assignment_date', __('Assignment date'));
        $grid->column('last_name', __('Last name'));
        $grid->column('owner', __('Owner'));
        $grid->column('status_id', __('Status id'))->display(function($id){
            $user = lead_status::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });
        $grid->column('nationality_id', __('Nationality id'))->display(function($id){
            $user = nationality::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });
        $grid->column('contact_number', __('Contact number'));
        $grid->column('prefered_office_location', __('Prefered office location'));
        $grid->column('current_location', __('Current location'));
        $grid->column('user_id', __('User id'))->display(function($id){
            $user = user::find($id);
            if($user != null ) {
            return "<a href=\"/admin/users?&id=".$user->id."\">$user->username</a>";
            }
            else {
              return "k";
            }

        });;
        $grid->column('message', __('Message'));
        $grid->column('image', __('Image'));
        $grid->column('code', __('Code'));
        $grid->column('title', __('Title'));
        $grid->column('country_code', __('Country code'));
        $grid->column('gender', __('Gender'));
        $grid->column('traffic_source_id', __('Traffic source id'))->display(function($id){
            $user = traffic_source::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });
        $grid->column('company', __('Company'));
        $grid->column('industry_id', __('Industry id'))->display(function($id){
            $user = industry::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });
        $grid->column('application_type_id', __('Application type id'))->display(function($id){
            $user = application_types::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });;
        $grid->column('first_name', __('First name'));
        $grid->column('birthday', __('Birthday'));
        $grid->column('education_qualification_id', __('Education qualification id'))->display(function($id){
            $user = education_qualifications::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });;
        $grid->column('traffic_medium_id', __('Traffic medium id'))->display(function($id){
            $user = traffic_mediums::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });
        $grid->column('secondary_email', __('Secondary email'));
        $grid->column('resume_recieved', __('Resume recieved'));
        $grid->column('follow_up', __('Follow up'));
        $grid->column('enquiry', __('Enquiry'));
        $grid->column('postal_code', __('Postal code'));
        $grid->column('ielts', __('Ielts'));
        $grid->column('age', __('Age'));
        $grid->column('traffic_campaign', __('Traffic campaign'));
        $grid->column('currency_id', __('Currency id'));
        $grid->column('state', __('State'));
        $grid->column('no_of_applicants', __('No of applicants'));
        $grid->column('traffic_content', __('Traffic content'));
        $grid->column('resume', __('Resume'));
        $grid->column('resume_id', __('Resume id'));
        $grid->column('hear_about_us_id', __('Hear about us id'))->display(function($id){
            $user = hear_about_us::find($id);
            if($user != null ) {
            return $user->name;
            }
            else {
              return "";
            }
        });
        $grid->column('city', __('City'));
        $grid->column('maritial_status', __('Maritial status'));
        $grid->column('traffic_ip', __('Traffic ip'));
        $grid->column('country', __('Country'));
        $grid->column('booking_date', __('Booking date'));
        $grid->column('email', __('Email'));
        $grid->column('address', __('Address'));
        $grid->column('enquiry_age', __('Enquiry age'));
        $grid->column('traffic_url', __('Traffic url'));
        $grid->column('appointment_date', __('Appointment date'));
        $grid->column('website', __('Website'));
        $grid->column('fax', __('Fax'));
        $grid->column('billing_city', __('Billing city'));
        $grid->column('billing_street', __('Billing street'));
        $grid->column('billing_state', __('Billing state'));
        $grid->column('billing_postal_code', __('Billing postal code'));
        $grid->column('shipping_city', __('Shipping city'));
        $grid->column('shipping_street', __('Shipping street'));
        $grid->column('shipping_state', __('Shipping state'));
        $grid->column('shipping_postal_code', __('Shipping postal code'));
        $grid->column('employees', __('Employees'));
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
        $show = new Show(leads::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('assignment_date', __('Assignment date'));
        $show->field('last_name', __('Last name'));
        $show->field('owner', __('Owner'));
        $show->field('status_id', __('Status id'));
        $show->field('nationality_id', __('Nationality id'));
        $show->field('contact_number', __('Contact number'));
        $show->field('prefered_office_location', __('Prefered office location'));
        $show->field('current_location', __('Current location'));
        $show->field('user_id', __('User id'));
        $show->field('message', __('Message'));
        $show->field('image', __('Image'));
        $show->field('code', __('Code'));
        $show->field('title', __('Title'));
        $show->field('country_code', __('Country code'));
        $show->field('gender', __('Gender'));
        $show->field('traffic_source_id', __('Traffic source id'));
        $show->field('company', __('Company'));
        $show->field('industry_id', __('Industry id'));
        $show->field('application_type_id', __('Application type id'));
        $show->field('first_name', __('First name'));
        $show->field('birthday', __('Birthday'));
        $show->field('education_qualification_id', __('Education qualification id'));
        $show->field('traffic_medium_id', __('Traffic medium id'));
        $show->field('secondary_email', __('Secondary email'));
        $show->field('resume_recieved', __('Resume recieved'));
        $show->field('follow_up', __('Follow up'));
        $show->field('enquiry', __('Enquiry'));
        $show->field('postal_code', __('Postal code'));
        $show->field('ielts', __('Ielts'));
        $show->field('age', __('Age'));
        $show->field('traffic_campaign', __('Traffic campaign'));
        $show->field('currency_id', __('Currency id'));
        $show->field('state', __('State'));
        $show->field('no_of_applicants', __('No of applicants'));
        $show->field('traffic_content', __('Traffic content'));
        $show->field('resume', __('Resume'));
        $show->field('resume_id', __('Resume id'));
        $show->field('hear_about_us_id', __('Hear about us id'));
        $show->field('city', __('City'));
        $show->field('maritial_status', __('Maritial status'));
        $show->field('traffic_ip', __('Traffic ip'));
        $show->field('country', __('Country'));
        $show->field('booking_date', __('Booking date'));
        $show->field('email', __('Email'));
        $show->field('address', __('Address'));
        $show->field('enquiry_age', __('Enquiry age'));
        $show->field('traffic_url', __('Traffic url'));
        $show->field('appointment_date', __('Appointment date'));
        $show->field('website', __('Website'));
        $show->field('fax', __('Fax'));
        $show->field('billing_city', __('Billing city'));
        $show->field('billing_street', __('Billing street'));
        $show->field('billing_state', __('Billing state'));
        $show->field('billing_postal_code', __('Billing postal code'));
        $show->field('shipping_city', __('Shipping city'));
        $show->field('shipping_street', __('Shipping street'));
        $show->field('shipping_state', __('Shipping state'));
        $show->field('shipping_postal_code', __('Shipping postal code'));
        $show->field('employees', __('Employees'));
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
        $form = new Form(new leads());
        $form->tab('overview',function($form){
          $form->text('contact_number', __('Contact number'));
          $form->email('email', __('Email'));
          $form->select('hear_about_us_id', __('Hear about us id'))->options(hear_about_us::all()->pluck('name', 'id'));
          $form->text('message', __('Message'));
          $form->select('status_id', __('Status id'))->options(lead_status::all()->pluck('name', 'id'));
          $form->text('owner', __('Owner'));
          $form->date('assignment_date', __('Assignment date'))->default(date('Y-m-d'));
          $form->text('last_name', __('Last name'));
          $form->select('traffic_medium_id', __('Traffic medium id'))->options(traffic_mediums::all()->pluck('name', 'id'));
          $form->text('traffic_url', __('Traffic url'));
          $form->text('traffic_content', __('Traffic content'));
          $form->text('traffic_ip', __('Traffic ip'));
          $form->select('traffic_source_id', __('Traffic source id'))->options(traffic_source::all()->pluck('name', 'id'));
          $form->text('first_name', __('First name'));
          $form->text('no_of_applicants', __('No of applicants'));
          $form->text('secondary_email', __('Secondary email'));
          $form->select('user_id', __('User id'))->options(User::all()->pluck('email', 'id'));
          $form->image('image', __('Image'));
          $form->text('traffic_campaign', __('Traffic campaign'));
          $form->date('appointment_date', __('Appointment date'))->default(date('Y-m-d'));

        })->tab('applicant information',function($form){
          $form->select('currency_id', __('Currency id'))->options(currencies::all()->pluck('name', 'id'));
          $form->select('maritial_status', __('Maritial status'))->options([1=>"single",2=>"maried"]);
          $form->text('country_code', __('Country code'));
          $form->date('birthday', __('Birthday'))->default(date('Y-m-d'));
          $form->date('booking_date', __('Booking date'))->default(date('Y-m-d'));
          $form->select('application_type_id', __('Application type id'))->options(application_types::all()->pluck('name', 'id'));
          $form->text('website', __('Website'));
          $form->text('fax', __('Fax'));
          $form->text('billing_city', __('Billing city'));
          $form->text('billing_street', __('Billing street'));
          $form->text('billing_state', __('Billing state'));
          $form->text('billing_postal_code', __('Billing postal code'));
          $form->text('shipping_city', __('Shipping city'));
          $form->text('shipping_street', __('Shipping street'));
          $form->text('shipping_state', __('Shipping state'));
          $form->text('shipping_postal_code', __('Shipping postal code'));
          $form->text('employees', __('Employees'));
          $form->text('email_type', __('Email type'));
          $form->number('age', __('Age'));
          $form->text('city', __('City'));
          $form->text('gender', __('Gender'));
          $form->select('nationality_id', __('Nationality id'))->options(nationality::all()->pluck('name', 'id'));
          $form->text('prefered_office_location', __('Prefered office location'));
          $form->text('current_location', __('Current location'));
          $form->text('code', __('Code'));
          $form->text('title', __('Title'));
          $form->text('company', __('Company'));
          $form->select('industry_id', __('Industry id'))->options(industry::all()->pluck('name', 'id'));
          $form->date('follow_up', __('Follow up'))->default(date('Y-m-d'));
          $form->text('enquiry', __('Enquiry'));
          $form->text('postal_code', __('Postal code'));
          $form->text('state', __('State'));
          $form->text('country', __('Country'));
          $form->text('address', __('Address'));
          $form->text('enquiry_age', __('Enquiry age'));

        })->tab('qualifications',function($form){
          // $form->number('resume', __('Resume'));
          $form->text('resume_id', __('Resume id'));
          $form->select('education_qualification_id', __('Education qualification id'))->options(education_qualifications::all()->pluck('name', 'id'));
          $form->number('ielts', __('Ielts'));
          $form->select('resume_recieved', __('Resume recieved'))->options([0=>"yes",1=>"no"]);

        })->tab('calls',function($form){
          $form->morphMany('calls', function (Form\NestedForm $form) {
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
          });
        })->tab('meetings',function($form){
          $form->morphMany('Meetings', function (Form\NestedForm $form) {
            $form->text('name', __('Name'));
            $form->text('location', __('Location'));
            $form->number('all_day', __('All day'))->default(1);
            $form->datetime('from', __('From'))->default(date('Y-m-d H:i:s'));
            $form->datetime('to', __('To'))->default(date('Y-m-d H:i:s'));
            $form->number('status', __('Status'))->default(1);
            $form->text('source', __('Source'));
            $form->number('confirmed', __('Confirmed'))->default(1)->options([0=>"yes",1=>"no"]);
          });
        })->tab('tasks',function($form){
          $form->morphMany('Tasks', function (Form\NestedForm $form) {
            $form->text('owner', __('Owner'));
            $form->text('subject', __('Subject'));
            $form->date('due_date', __('Due date'))->default(date('Y-m-d'));
            $form->text('client', __('Client'));
            $form->text('monster_leads', __('Monster leads'));
            $form->number('status', __('Status'));
            $form->number('priority', __('Priority'))->default(1);
            $form->select('reminder', __('Reminder'))->default(1)->options([0=>"yes",1=>"no"]);
            $form->select('repeat', __('Repeat'))->default(1)->options([0=>"yes",1=>"no"]);
            $form->text('task_source', __('Task source'));
            $form->text('task_google_id', __('Task google id'));
            $form->text('description', __('Description'));
            $form->text('exchange_rate', __('Exchange rate'));
            $form->select('currency_id', __('Currency id'))->options(currencies::all()->pluck('name', 'id'));
          });
        });


        return $form;
    }
}
