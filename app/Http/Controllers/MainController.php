<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Items;
use App\Process;
class MainController extends Controller
{
	public function underCons() {
		echo "All Other pages are under construction";
	}
	public function getTypeOfApp()
	{	
		Session::put('tier5_cost_step0',0);
		Session::put('other_cost_step0', 0);
		Session::put('step', 0);
		Session::save();
		return view('typeofapp');
	}
	public function postTypeOfApp(Request $request)
	{
		
		$page0_tier5_cost = Session::get('tier5_cost_step0');
		$page0_other_cost = Session::get('other_cost_step0');
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = time();
		Session::put('identifier', $identifier);
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$page1_tier5_cost = $page0_tier5_cost+$details->cost;
			$page1_other_cost = $page0_other_cost+$details->other_cost;
			Session::put('tier5_cost_step1',$page1_tier5_cost);
			Session::put('other_cost_step1', $page1_other_cost);
			Session::put('step',$step);
			Session::save();
			return redirect()->route('peopleLogin');
		}
		else
		{
			echo "Some Error occured. Please try again later";
		}
		
	}
	public function getPeopleLogin() {
		return view('peopleLogin');
	}
	public function postPeopleLogin(Request $request) {
		$page1_tier5_cost = Session::get('tier5_cost_step1');
		$page1_other_cost = Session::get('other_cost_step1');
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$page2_tier5_cost = $page1_tier5_cost+$details->cost;
			$page2_other_cost = $page1_other_cost+$details->other_cost;
			Session::put('tier5_cost_step2',$page2_tier5_cost);
			Session::put('other_cost_step2', $page2_other_cost);
			Session::put('step',$step);
			Session::save();
			return redirect()->route('personalProfiles');
		}
		else
		{
			echo "Some Error occured. Please try again later";
		}
		
	}
	public function getPersonalProfiles()
	{
		return view('personalProfiles');
	}
	public function postPersonalProfiles(Request $request) {
		$page2_tier5_cost = Session::get('tier5_cost_step2');
		$page2_other_cost = Session::get('other_cost_step2');
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$page3_tier5_cost = $page2_tier5_cost+$details->cost;
			$page3_other_cost = $page2_other_cost+$details->other_cost;
			Session::put('tier5_cost_step3',$page3_tier5_cost);
			Session::put('other_cost_step3', $page3_other_cost);
			Session::put('step',$step);
			Session::save();
			return redirect()->route('makeMoney');
		}
		else
		{
			echo "Some Error occured. Please try again later";
		}
		
	}
	public function getMakeMoney() {
		return view('makeMoney');
	}
	public function postMakeMoney(Request $request) {
		$page3_tier5_cost = Session::get('tier5_cost_step3');
		$page3_other_cost = Session::get('other_cost_step3');
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$page4_tier5_cost = $page3_tier5_cost+$details->cost;
			$page4_other_cost = $page3_other_cost+$details->other_cost;
			Session::put('tier5_cost_step4',$page4_tier5_cost);
			Session::put('other_cost_step4', $page4_other_cost);
			Session::put('step',$step);
			Session::save();
			return redirect()->route('rateReviews');
		}
		else
		{
			echo "Some Error occured. Please try again later";
		}
		
	}
	public function getRateReview() {
		return view('rateReview');
	}
	public function postRateReviews(Request $request) {
		$page4_tier5_cost = Session::get('tier5_cost_step4');
		$page4_other_cost = Session::get('other_cost_step4');
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$page5_tier5_cost = $page4_tier5_cost+$details->cost;
			$page5_other_cost = $page4_other_cost+$details->other_cost;
			Session::put('tier5_cost_step5',$page5_tier5_cost);
			Session::put('other_cost_step5', $page5_other_cost);
			Session::put('step',$step);
			Session::save();
			return redirect()->route('connectToWebsite');
		}
		else
		{
			echo "Some Error occured. Please try again later";
		}
		
	}
	public function getConnectToWebsite() {
		return view('connectToWebsite');
	}
	public function postConnectToWebsite(Request $request) {
		$page5_tier5_cost = Session::get('tier5_cost_step5');
		$page5_other_cost = Session::get('other_cost_step5');
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$page6_tier5_cost = $page5_tier5_cost+$details->cost;
			$page6_other_cost = $page5_other_cost+$details->other_cost;
			Session::put('tier5_cost_step6',$page6_tier5_cost);
			Session::put('other_cost_step6', $page6_other_cost);
			Session::put('step',$step);
			Session::save();
			return redirect()->route('appLook');
		}
		else
		{
			echo "Some Error occured. Please try again later";
		}
		
	}
	public function getAppLook() {
		return view('appLook');
	}
	public function postAppLook(Request $request) {
		$page6_tier5_cost = Session::get('tier5_cost_step6');
		$page6_other_cost = Session::get('other_cost_step6');
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$page7_tier5_cost = $page6_tier5_cost+$details->cost;
			$page7_other_cost = $page6_other_cost+$details->other_cost;
			Session::put('tier5_cost_step7',$page7_tier5_cost);
			Session::put('other_cost_step7', $page7_other_cost);
			Session::put('step',$step);
			Session::save();
			return redirect()->route('appIcon');
		}
		else
		{
			echo "Some Error occured. Please try again later";
		}
		
	}
	public function getAppIcon() {
		return view('appIcon');
	}
	public function postAppIcon(Request $request) {
		$page7_tier5_cost = Session::get('tier5_cost_step7');
		$page7_other_cost = Session::get('other_cost_step7');
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$page8_tier5_cost = $page7_tier5_cost+$details->cost;
			$page8_other_cost = $page7_other_cost+$details->other_cost;
			Session::put('tier5_cost_step8',$page8_tier5_cost);
			Session::put('other_cost_step8', $page8_other_cost);
			Session::put('step',$step);
			Session::save();
			return redirect()->route('summary');
		}
		else
		{
			echo "Some Error occured. Please try again later";
		}
	}
	public function getSummery() {
		$identifier = Session::get('identifier');
		$selection_details = Process::where('identifier', $identifier)->get();
		if ($selection_details) {
			return view('summary',['details' => $selection_details]);
		}
		else
		{
			echo "Error refresh and start a new session from begining";
		}
		
	}
	public function saveProcess($name, $step, $identifier) {
		$search = Process::where('step', $step)->where('identifier',$identifier)->first();
		if ($search) {
			$search->name = $name;
			$search->identifier = $identifier;
			if ($search->save()) {
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			$process = new Process();
			$process->name = $name;
			$process->step = $step;
			$process->identifier = $identifier;
			if ($process->save()) {
				return true;
			}
			else
			{
				return false;
			}
		}
		
	}
	//change question functions from summary page

	public function changeType(){
		$step8_tier5 = Session::get('tier5_cost_step8');
		$step1_tier5 =Session::get('tier5_cost_step1');
		$tier5_cost_step8 = $step8_tier5 - $step1_tier5;
		$step8_other = Session::get('other_cost_step8');
		$step1_other =Session::get('other_cost_step1');
		$other_cost_step8 =$step8_other-$step1_other;
		Session::put('tier5_cost_step8',$tier5_cost_step8);
		Session::put('other_cost_step8', $other_cost_step8);
		return view('typeofapp', ['parent' => 8]);
	}
	public function postLastPageType(Request $request)
	{
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			$other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			Session::put('tier5_cost_step8',$tier5_cost_step8);
			Session::put('other_cost_step8', $other_cost_step8);
			Session::put('tier5_cost_step1', $details->cost);
			Session::put('other_cost_step1', $details->other_cost);
			return redirect()->route('summary');
		} 
		else 
		{
			echo "Some Error occured. Please try again later";
		}
	}
	public function changePeopleLogin() {
		$step8_tier5 = Session::get('tier5_cost_step8');
		$step8_other = Session::get('other_cost_step8');
		$identifier = Session::get('identifier');
		$details = Process::where('step', 2)->where('identifier',$identifier)->first();
		if ($details) {
			$search_item = $details->name;
			$search = Items::where('item_name', $search_item)->where('step',2)->first();
			$cost_tier5 = $step8_tier5-$search->cost;
			$cost_other = $step8_other-$search->other_cost;
			Session::put('tier5_cost_step8', $cost_tier5);
			Session::put('other_cost_step8', $cost_other);
			$step2_tier5 = Session::get('tier5_cost_step2');
			$step2_other = Session::get('tier5_cost_step2');
			$update_tier5 = $step2_tier5 - $search->cost;
			$update_other = $step2_other -$search->cost_other;
			Session::put('tier5_cost_step2', $update_tier5);
			Session::put('other_cost_step2', $update_other);
			//dd(Session::all());
			return view('peopleLogin', ['parent' => 8]);
		}
		
		else
		{
			echo "Error occured";
		}
	}
	public function postLastPagePeopleLogin(Request $request) {
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			$other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			Session::put('tier5_cost_step8',$tier5_cost_step8);
			Session::put('other_cost_step8', $other_cost_step8);
			$tier5_cost_step2 = Session::get('tier5_cost_step2')+$details->cost;
			$other_cost_step2 = Session::get('other_cost_step2')+$details->other_cost;
			Session::put('tier5_cost_step2', $tier5_cost_step2);
			Session::put('other_cost_step2', $other_cost_step2);
			return redirect()->route('summary');
		} 
		else 
		{
			echo "Some Error occured. Please try again later";
		}
	}
	public function changeCreatePro(){
		$step8_tier5 = Session::get('tier5_cost_step8');
		$step8_other = Session::get('other_cost_step8');
		$identifier = Session::get('identifier');
		$details = Process::where('step', 3)->where('identifier',$identifier)->first();
		if ($details) {
			$search_item = $details->name;
			$search = Items::where('item_name', $search_item)->where('step',3)->first();
			$cost_tier5 = $step8_tier5-$search->cost;
			$cost_other = $step8_other-$search->other_cost;
			Session::put('tier5_cost_step8', $cost_tier5);
			Session::put('other_cost_step8', $cost_other);
			$step3_tier5 = Session::get('tier5_cost_step3');
			$step3_other = Session::get('tier5_cost_step3');
			$update_tier5 = $step3_tier5 - $search->cost;
			$update_other = $step3_other -$search->cost_other;
			Session::put('tier5_cost_step3', $update_tier5);
			Session::put('other_cost_step3', $update_other);
			//dd(Session::all());
			return view('personalProfiles', ['parent' => 8]);
		}
		
		else
		{
			echo "Error occured";
		}
	}
	public function postLastPagePersonalProfiles(Request $request)
	{
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			$other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			Session::put('tier5_cost_step8',$tier5_cost_step8);
			Session::put('other_cost_step8', $other_cost_step8);
			$tier5_cost_step3 = Session::get('tier5_cost_step3')+$details->cost;
			$other_cost_step3 = Session::get('other_cost_step3')+$details->other_cost;
			Session::put('tier5_cost_step3', $tier5_cost_step3);
			Session::put('other_cost_step3', $other_cost_step3);
			return redirect()->route('summary');
		} 
		else 
		{
			echo "Some Error occured. Please try again later";
		}
	}

	public function changeMakeMoney(){
		$step8_tier5 = Session::get('tier5_cost_step8');
		$step8_other = Session::get('other_cost_step8');
		$identifier = Session::get('identifier');
		$details = Process::where('step', 4)->where('identifier',$identifier)->first();
		if ($details) {
			$search_item = $details->name;
			$search = Items::where('item_name', $search_item)->where('step',4)->first();
			$cost_tier5 = $step8_tier5-$search->cost;
			$cost_other = $step8_other-$search->other_cost;
			Session::put('tier5_cost_step8', $cost_tier5);
			Session::put('other_cost_step8', $cost_other);
			$step4_tier5 = Session::get('tier5_cost_step4');
			$step4_other = Session::get('tier5_cost_step4');
			$update_tier5 = $step4_tier5 - $search->cost;
			$update_other = $step4_other -$search->cost_other;
			Session::put('tier5_cost_step4', $update_tier5);
			Session::put('other_cost_step4', $update_other);
			//dd(Session::all());
			return view('makeMoney', ['parent' => 8]);
		}
		
		else
		{
			echo "Error occured";
		}
	}
	public function postLastPageMakeMoney(Request $request)
	{
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			$other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			Session::put('tier5_cost_step8',$tier5_cost_step8);
			Session::put('other_cost_step8', $other_cost_step8);
			$tier5_cost_step4 = Session::get('tier5_cost_step4')+$details->cost;
			$other_cost_step4 = Session::get('other_cost_step4')+$details->other_cost;
			Session::put('tier5_cost_step4', $tier5_cost_step4);
			Session::put('other_cost_step4', $other_cost_step4);
			return redirect()->route('summary');
		} 
		else 
		{
			echo "Some Error occured. Please try again later";
		}
	}

		public function changeRateReview(){
		$step8_tier5 = Session::get('tier5_cost_step8');
		$step8_other = Session::get('other_cost_step8');
		$identifier = Session::get('identifier');
		$details = Process::where('step', 5)->where('identifier',$identifier)->first();
		if ($details) {
			$search_item = $details->name;
			$search = Items::where('item_name', $search_item)->where('step',5)->first();
			$cost_tier5 = $step8_tier5-$search->cost;
			$cost_other = $step8_other-$search->other_cost;
			Session::put('tier5_cost_step8', $cost_tier5);
			Session::put('other_cost_step8', $cost_other);
			$step5_tier5 = Session::get('tier5_cost_step5');
			$step5_other = Session::get('tier5_cost_step5');
			$update_tier5 = $step5_tier5 - $search->cost;
			$update_other = $step5_other -$search->cost_other;
			Session::put('tier5_cost_step5', $update_tier5);
			Session::put('other_cost_step5', $update_other);
			//dd(Session::all());
			return view('rateReview', ['parent' => 8]);
		}
		
		else
		{
			echo "Error occured";
		}
	}
	public function postLastPageRateReview(Request $request)
	{
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			$other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			Session::put('tier5_cost_step8',$tier5_cost_step8);
			Session::put('other_cost_step8', $other_cost_step8);
			$tier5_cost_step5 = Session::get('tier5_cost_step5')+$details->cost;
			$other_cost_step5 = Session::get('other_cost_step5')+$details->other_cost;
			Session::put('tier5_cost_step5', $tier5_cost_step5);
			Session::put('other_cost_step5', $other_cost_step5);
			return redirect()->route('summary');
		} 
		else 
		{
			echo "Some Error occured. Please try again later";
		}
	}

	public function chnageConnectToWebsite(){
		$step8_tier5 = Session::get('tier5_cost_step8');
		$step8_other = Session::get('other_cost_step8');
		$identifier = Session::get('identifier');
		$details = Process::where('step', 6)->where('identifier',$identifier)->first();
		if ($details) {
			$search_item = $details->name;
			$search = Items::where('item_name', $search_item)->where('step',6)->first();
			$cost_tier5 = $step8_tier5-$search->cost;
			$cost_other = $step8_other-$search->other_cost;
			Session::put('tier5_cost_step8', $cost_tier5);
			Session::put('other_cost_step8', $cost_other);
			$step6_tier5 = Session::get('tier5_cost_step6');
			$step6_other = Session::get('tier5_cost_step6');
			$update_tier5 = $step6_tier5 - $search->cost;
			$update_other = $step6_other -$search->cost_other;
			Session::put('tier5_cost_step6', $update_tier5);
			Session::put('other_cost_step6', $update_other);
			//dd(Session::all());
			return view('connectToWebsite', ['parent' => 8]);
		}
		
		else
		{
			echo "Error occured";
		}
	}
	public function postLastPageConnectToWebiste(Request $request)
	{
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			$other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			Session::put('tier5_cost_step8',$tier5_cost_step8);
			Session::put('other_cost_step8', $other_cost_step8);
			$tier5_cost_step6 = Session::get('tier5_cost_step6')+$details->cost;
			$other_cost_step6 = Session::get('other_cost_step6')+$details->other_cost;
			Session::put('tier5_cost_step6', $tier5_cost_step6);
			Session::put('other_cost_step6', $other_cost_step6);
			return redirect()->route('summary');
		} 
		else 
		{
			echo "Some Error occured. Please try again later";
		}
	}

	public function changeAppLook(){
		$step8_tier5 = Session::get('tier5_cost_step8');
		$step8_other = Session::get('other_cost_step8');
		$identifier = Session::get('identifier');
		$details = Process::where('step', 7)->where('identifier',$identifier)->first();
		if ($details) {
			$search_item = $details->name;
			$search = Items::where('item_name', $search_item)->where('step',7)->first();
			$cost_tier5 = $step8_tier5-$search->cost;
			$cost_other = $step8_other-$search->other_cost;
			Session::put('tier5_cost_step8', $cost_tier5);
			Session::put('other_cost_step8', $cost_other);
			$step7_tier5 = Session::get('tier5_cost_step7');
			$step7_other = Session::get('tier5_cost_step7');
			$update_tier5 = $step7_tier5 - $search->cost;
			$update_other = $step7_other -$search->cost_other;
			Session::put('tier5_cost_step7', $update_tier5);
			Session::put('other_cost_step7', $update_other);
			//dd(Session::all());
			return view('appLook', ['parent' => 8]);
		}
		
		else
		{
			echo "Error occured";
		}
	}
	public function postLastPageAppLook(Request $request)
	{
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			$other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			Session::put('tier5_cost_step8',$tier5_cost_step8);
			Session::put('other_cost_step8', $other_cost_step8);
			$tier5_cost_step7 = Session::get('tier5_cost_step7')+$details->cost;
			$other_cost_step7 = Session::get('other_cost_step7')+$details->other_cost;
			Session::put('tier5_cost_step7', $tier5_cost_step7);
			Session::put('other_cost_step7', $other_cost_step7);
			return redirect()->route('summary');
		} 
		else 
		{
			echo "Some Error occured. Please try again later";
		}
	}
	public function changeAppIcon(){
		$step8_tier5 = Session::get('tier5_cost_step8');
		$step8_other = Session::get('other_cost_step8');
		$identifier = Session::get('identifier');
		$details = Process::where('step', 8)->where('identifier',$identifier)->first();
		if ($details) {
			$search_item = $details->name;
			$search = Items::where('item_name', $search_item)->where('step',8)->first();
			$cost_tier5 = $step8_tier5-$search->cost;
			$cost_other = $step8_other-$search->other_cost;
			Session::put('tier5_cost_step8', $cost_tier5);
			Session::put('other_cost_step8', $cost_other);
			
			// $step8_tier5 = Session::get('tier5_cost_step8');
			// $step8_other = Session::get('tier5_cost_step8');
			// $update_tier5 = $step8_tier5 - $search->cost;
			// $update_other = $step8_other -$search->cost_other;
			// Session::put('tier5_cost_step8', $update_tier5);
			// Session::put('other_cost_step8', $update_other);
			//dd(Session::all());
			return view('appIcon', ['parent' => 8]);
		}
		
		else
		{
			echo "Error occured";
		}
	}
	public function postLastPageAppIcon(Request $request)
	{
		$btn_name = $request->btn;
		$step = $request->step;
		$identifier = Session::get('identifier');
		$save_status = $this->saveProcess($btn_name, $step, $identifier);
		if ($save_status) {
			$details = Items::where('item_name', $btn_name)->where('step',$step)->first();
			$tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			$other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			Session::put('tier5_cost_step8',$tier5_cost_step8);
			Session::put('other_cost_step8', $other_cost_step8);
			// $tier5_cost_step8 = Session::get('tier5_cost_step8')+$details->cost;
			// $other_cost_step8 = Session::get('other_cost_step8')+$details->other_cost;
			// Session::put('tier5_cost_step8', $tier5_cost_step8);
			// Session::put('other_cost_step8', $other_cost_step8);
			return redirect()->route('summary');
		} 
		else 
		{
			echo "Some Error occured. Please try again later";
		}
	}
}