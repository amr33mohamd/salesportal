<?php

namespace App\Http\Controllers\Agent;

use ICIGAILLC\LaravelModelFieldBuilder\Models\FieldRule;
use Illuminate\Http\Request;
use App\Models\accounts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\lead_status;
use App\Models\hear_about_us;
use App\Models\nationality;
use App\Models\education_qualifications;
use App\Models\industry;
use App\Models\currencies;
use App\Models\traffic_source;
use App\Models\traffic_mediums;
use App\Models\account_attachments;
use App\Models\account_assiened_attachments;
use App\Models\calls;
use App\Models\tasks;
use App\Models\meetings;
use App\Models\opportunities;
use App\Models\AttachmentsGroup;
use App\Models\uploadedAttachment;
use App\Models\assignedGroup;
class AccountsController extends Controller
{
  public function index(Request $request){
    $user = Auth::user();
    $leads = $user->accounts;
      $fields = accounts::fields()->get();

    return view('Agent.Sales.Accounts.Accounts',['leads'=>$leads,'fields'=>$fields]);


  }

  public function profile(Request $request){
    $user = Auth::user();
    $account = accounts::find($request->id);
    if($user->follow_id ==null){
      $documents = $user->documents;
    }
    else{
      $documents = user::find($user->follow_id)->first()->documents;
    }
    $callsf = calls::fields()->get();
    $tasksf = tasks::fields()->get();
    $meetingsf = meetings::fields()->get();
    $accountsf = accounts::fields()->get();
    $casesf = opportunities::fields()->get();

    // return $account;
    if($request->group_id){
      $group = AttachmentsGroup::find($request->group_id);
      return view('Agent.Sales.Accounts.Profile',['group_id'=>$request->group_id,'group'=>$group,'account'=>$account,'casesf'=>$casesf,'type'=>'edit','accountsf'=>$accountsf,'callsf'=>$callsf,'tasksf'=>$tasksf,'meetingsf'=>$meetingsf,'documents'=>$documents]);
    }
    else {
      return view('Agent.Sales.Accounts.Profile',['group_id'=>null,'account'=>$account,'casesf'=>$casesf,'type'=>'edit','accountsf'=>$accountsf,'callsf'=>$callsf,'tasksf'=>$tasksf,'meetingsf'=>$meetingsf,'documents'=>$documents]);

    }


  }
  public function editUploaded(Request $request){
    $attachment = uploadedAttachment::find($request->id)->update([
      'status'=>$request->status
    ]);
    return back();

  }

  public function change_attachment_status(Request $request){
    $user = Auth::user();
    $documents =account_attachments::query()->where('id',$request->id)->update(['status'=>$request->status]);
    return back();
  }
  public function assin_attachment(Request $request){
    $user = Auth::user();
    $documents = assignedGroup::create(['account_id'=>$request->account_id,'group_id'=>$request->document_id]);
    return redirect($request->back_url);
  }
  public function delete_assin_attachment(Request $request){
    $user = Auth::user();
    $documents = account_assiened_attachments::query()->where('id',$request->id)->delete();
    return back();
  }


  public function editScreen(Request $request){
    $lead = accounts::query()->where('id',request('id'))->with('fieldsData.field')->first();
    $user = Auth::user();
     $statuses = lead_status::all();
$hear_about_uses = hear_about_us::all();
$nationalities = nationality::all();
$educations = education_qualifications::all();
$industries = industry::all();
$currancies = currencies::all();
$sources = traffic_source::all();
$mediums = traffic_mediums::all();
$fields = accounts::fields()->get();

return view('Agent.Sales.Accounts.NewAccount',['lead'=>$lead,'fields'=>$fields,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'edit','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

  }
  public function addScreen(Request $request){
    $lead = new accounts;
    $user = Auth::user();
     $statuses = lead_status::all();
     $hear_about_uses = hear_about_us::all();
     $nationalities = nationality::all();
     $educations = education_qualifications::all();
     $industries = industry::all();
     $currancies = currencies::all();
     $sources = traffic_source::all();
     $mediums = traffic_mediums::all();
     $fields = accounts::fields()->get();
//      $field= $fields->first();
//      $rule= new FieldRule();
//      $rule->rule= "required";
//      $field->rules()->save($rule);
    return view('Agent.Sales.Accounts.NewAccount',['lead'=>$lead,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'add','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities,'fields'=>$fields]);
//return $fields;
  }
  public function edit(Request $request){
     $leads = accounts::all();
     $data = $request->all();
     unset($data['_token']);
     unset($data['file']);

     if($request->file){
       $edit =  accounts::query()->where('id',request('id'))->first()->addMedia($request->file)->toMediaCollection();
        // echo $edit;
     }
//      $edit = accounts::query()->where('id',request('id'))->update(array_merge(array_filter($data)));
     $account= accounts::findOrFail(request('id'));
     $account->fields = array_merge(array_filter($data));
     $account->save();
     if($request->back_url){
       return redirect($request->back_url);
     }
    return redirect('/accounts');

  }

  public function editPoints(Request $request){
      $data = $request->all();
      unset($data['_token']);

      $edit = accounts::query()->where('id',request('id'))->update(array_merge(array_filter($data)));
      return back();
  }
  public function add(Request $request){
    $leads = accounts::all();
    $data = $request->all();
    $data['user_id'] = Auth::user()->id;
    unset($data['file']);

    $add = accounts::query()->create(array_merge(array_filter($data)));
      unset($data['user_id']);

     $add->fields = array_merge(array_filter($data));
     $add->save();
    if(isset($request->file)){
       $add->addMedia($request->file)->toMediaCollection();
    }
    // echo $add;
    return redirect('/accounts');
  }
  public function assignScreen(Request $request){
    $user = Auth::user();
    $groups = $user->groups;
    return view('Agent.Sales.Accounts.AssignAttachment',['groups'=>$groups,'id'=>$request->id]);
  }

  public function delete(Request $request){
     $auth = Auth::user();

     foreach( accounts::find($request->id)->calls as $call){
       $call->delete();
     }
     foreach( accounts::find($request->id)->meetings as $meetings){
       $meetings->delete();
     }
     foreach( accounts::find($request->id)->tasks as $tasks){
       $tasks->delete();
     }
     accounts::find($request->id)->delete();

     return redirect('/accounts');
 }
}
