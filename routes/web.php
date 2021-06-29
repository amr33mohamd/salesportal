<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return;
// });

////////////
Route::get('/builder/{module}', 'App\\Http\\Controllers\\FieldBuilderController@index');
Route::post('/builder/{module}', 'App\\Http\\Controllers\\FieldBuilderController@save');

Route::get('/tes','App\Http\Controllers\HomeController@test');

Route::middleware(['guest'])->group(function (){

Route::get('/','App\Http\Controllers\Auth\UserController@login');
Route::get('/affiliate','App\Http\Controllers\Agent\AffiliateController@index');

Route::get('/login','App\Http\Controllers\Auth\UserController@login')->name('login');
Route::post('/login_response','App\Http\Controllers\Auth\UserController@login_response')->name('login_response');
Route::post('/logout','App\Http\Controllers\Auth\UserController@logout')->name('logout');


Route::get('/register','App\Http\Controllers\Auth\UserController@register')->name('register');
Route::post('/register_response','App\Http\Controllers\Auth\UserController@register_user')->name('register_response');



});


Route::middleware(['auth'])->group(function (){
  Route::get('/logout', 'App\Http\Controllers\Auth\UserController@logout')->name('logout');

Route::get('/billing-portal', function (Request $request) {
    return Auth::user()->redirectToBillingPortal();
});
// Auth::routes();

Route::get('/portal', 'App\Http\Controllers\PaymentController@portal')->name('portal');
Route::get('/oauth', 'App\Http\Controllers\OauthController@index')->name('oauth');
Route::resource('/payment_methods', 'App\Http\Controllers\PaymentMethodController');
Route::get('/subscribe/{price_id}', 'App\Http\Controllers\SubscribeController@subscribe')->name('subscribe');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

////////////////////////////////
Route::get('/leads', [App\Http\Controllers\Agent\LeadsController::class, 'index'])->name('leads');

Route::get('/leads/edit/{id}', [App\Http\Controllers\Agent\LeadsController::class, 'editScreen'])->name('EditLead');
Route::post('/leads/edit/action/{id}', [App\Http\Controllers\Agent\LeadsController::class, 'edit'])->name('EditLeadAction');


Route::get('/lead/new', [App\Http\Controllers\Agent\LeadsController::class, 'addScreen'])->name('NewLead');
Route::post('/lead/new/action', [App\Http\Controllers\Agent\LeadsController::class, 'add'])->name('NewLeadAction');

Route::get('/leads/delete/{id}', [App\Http\Controllers\Agent\LeadsController::class, 'delete'])->name('DeleteLead');
Route::get('/leads/convert/{id}', [App\Http\Controllers\Agent\LeadsController::class, 'convert'])->name('ConvertLead');


////////////////////
Route::get('/accounts', [App\Http\Controllers\Agent\AccountsController::class, 'index'])->name('accounts');

Route::get('/accounts/profile/{id}', [App\Http\Controllers\Agent\AccountsController::class, 'profile'])->name('profile');

Route::get('/accounts/edit/{id}', [App\Http\Controllers\Agent\AccountsController::class, 'editScreen'])->name('EditAccount');
    Route::post('/accounts/edit/points/action/{id}', [App\Http\Controllers\Agent\AccountsController::class, 'editPoints'])->name('EditAccount');

Route::post('/accounts/edit/action/{id}', [App\Http\Controllers\Agent\AccountsController::class, 'edit'])->name('EditAccountAction');

Route::get('/account/new', [App\Http\Controllers\Agent\AccountsController::class, 'addScreen'])->name('NewAccount');
Route::post('/account/new/action', [App\Http\Controllers\Agent\AccountsController::class, 'add'])->name('NewAccountAction');

Route::get('/accounts/delete/{id}', [App\Http\Controllers\Agent\AccountsController::class, 'delete'])->name('DeleteAccount');
Route::get('/account/edit/attachment/{id}/{status}', [App\Http\Controllers\Agent\AccountsController::class, 'change_attachment_status']);
Route::post('/account/add/attachment/{account_id}', [App\Http\Controllers\Agent\AccountsController::class, 'assin_attachment']);
Route::get('/account/edit/assign-attachment/{id}', [App\Http\Controllers\Agent\AccountsController::class, 'delete_assin_attachment']);





///////////////////
Route::get('/members', [App\Http\Controllers\Agent\ContactsController::class, 'index'])->name('members');

Route::get('/members/edit/{id}', [App\Http\Controllers\Agent\ContactsController::class, 'editScreen'])->name('EditMember');
Route::post('/members/edit/action/{id}', [App\Http\Controllers\Agent\ContactsController::class, 'edit'])->name('EditMemberAction');

Route::get('/member/new/{account_id}', [App\Http\Controllers\Agent\ContactsController::class, 'addScreen'])->name('NewMember');
Route::post('/member/new/action/{account_id}', [App\Http\Controllers\Agent\ContactsController::class, 'add'])->name('NewMemberAction');

Route::get('/members/delete/{id}', [App\Http\Controllers\Agent\ContactsController::class, 'delete'])->name('DeleteMember');



///////////////////
Route::get('/opportunities', [App\Http\Controllers\Agent\OpportunitiesController::class, 'index'])->name('opportunities');

Route::get('/opportunities/edit/{id}', [App\Http\Controllers\Agent\OpportunitiesController::class, 'editScreen'])->name('EditOpportunity');
Route::post('/opportunities/edit/action/{id}', [App\Http\Controllers\Agent\OpportunitiesController::class, 'edit'])->name('EditOpportunityAction');

Route::get('/opportunities/new', [App\Http\Controllers\Agent\OpportunitiesController::class, 'addScreen'])->name('NewOpportunity');
Route::post('/opportunities/new/action', [App\Http\Controllers\Agent\OpportunitiesController::class, 'add'])->name('NewOpportunityAction');

Route::get('/opportunities/delete/{id}', [App\Http\Controllers\Agent\OpportunitiesController::class, 'delete'])->name('DeleteOpportunity');

Route::get('/opportunities/profile/{id}', [App\Http\Controllers\Agent\OpportunitiesController::class, 'profile'])->name('profileOpportunity');
    Route::post('/opportunity/add/attachment/{opportunity_id}', [App\Http\Controllers\Agent\OpportunitiesController::class, 'assin_attachment']);
    Route::get('/opportunity/edit/assign-attachment/{id}', [App\Http\Controllers\Agent\OpportunitiesController::class, 'delete_assin_attachment']);


///////////////////
Route::get('/calls', [App\Http\Controllers\Agent\CallsController::class, 'index'])->name('calls');

Route::get('/calls/edit/{id}', [App\Http\Controllers\Agent\CallsController::class, 'editScreen'])->name('EditCall');
Route::post('/calls/edit/action/{id}', [App\Http\Controllers\Agent\CallsController::class, 'edit'])->name('EditCallAction');

Route::get('/calls/new', [App\Http\Controllers\Agent\CallsController::class, 'addScreen'])->name('NewCall');
Route::post('/calls/new/action', [App\Http\Controllers\Agent\CallsController::class, 'add'])->name('NewCallAction');

Route::get('/calls/delete/{id}', [App\Http\Controllers\Agent\CallsController::class, 'delete'])->name('DeleteCall');


///////////////////
Route::get('/meetings', [App\Http\Controllers\Agent\MeetingsController::class, 'index'])->name('meetings');

Route::get('/meetings/edit/{id}', [App\Http\Controllers\Agent\MeetingsController::class, 'editScreen'])->name('EditMeeting');
Route::post('/meetings/edit/action/{id}', [App\Http\Controllers\Agent\MeetingsController::class, 'edit'])->name('EditMeetingAction');

Route::get('/meetings/new', [App\Http\Controllers\Agent\MeetingsController::class, 'addScreen'])->name('NewMeeting');
Route::post('/meetings/new/action', [App\Http\Controllers\Agent\MeetingsController::class, 'add'])->name('NewMeetingAction');

Route::get('/meetings/delete/{id}', [App\Http\Controllers\Agent\MeetingsController::class, 'delete'])->name('DeleteMeeting');



///////////////////
Route::get('/tasks', [App\Http\Controllers\Agent\TasksController::class, 'index'])->name('tasks');

Route::get('/tasks/edit/{id}', [App\Http\Controllers\Agent\TasksController::class, 'editScreen'])->name('EditTask');
Route::post('/tasks/edit/action/{id}', [App\Http\Controllers\Agent\TasksController::class, 'edit'])->name('EditTaskAction');

Route::get('/tasks/new', [App\Http\Controllers\Agent\TasksController::class, 'addScreen'])->name('NewTask');
Route::post('/tasks/new/action', [App\Http\Controllers\Agent\TasksController::class, 'add'])->name('NewTaskAction');

Route::get('/tasks/delete/{id}', [App\Http\Controllers\Agent\TasksController::class, 'delete'])->name('DeleteTask');



////////////////////
Route::get('/marketing', [App\Http\Controllers\Agent\SocialController::class, 'index'])->name('marketing');
Route::post('/marketing/new/action', [App\Http\Controllers\Agent\SocialController::class, 'add'])->name('AddMarketing');




////////////////////
Route::get('/payments', [App\Http\Controllers\Agent\PaymentsController::class, 'index'])->name('payments');
Route::post('/payments/add', [App\Http\Controllers\Agent\PaymentsController::class, 'add_payment'])->name('add_payment');

Route::get('/invoice/{id}', [App\Http\Controllers\Agent\PaymentsController::class, 'invoice'])->name('invoice');


////////////////////
Route::get('/affiliate', [App\Http\Controllers\Agent\AffiliateController::class, 'index'])->name('affiliate');


////////////////////
Route::get('/employees', App\Http\Controllers\Agent\EmployeesController::class)->name('employees');
Route::get('/employees/add/action', [App\Http\Controllers\Agent\EmployeesController::class,'add'])->name('NewEmployeeAction');
Route::get('/employee/delete/{id}', [App\Http\Controllers\Agent\EmployeesController::class,'delete']);


////////////////////
Route::get('/settings', [App\Http\Controllers\Agent\SettingsController::class, 'index'])->name('settings');
Route::post('/settingsAction', [App\Http\Controllers\Agent\SettingsController::class, 'edit'])->name('settingsAction');



});
