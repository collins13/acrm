<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Project;
use App\Proposal;
use App\Donate;
use App\Plan;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProposeEmail;
use App\Video;
use App\Mail\UserEmail;
use App\User;
use DB;
use App\Contact;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Hash;
use App\Prayer;
use App\Mail\UserPrayer;
use App\Partner;
use App\Mail\PartnerMail;
use App\Slider1;
use App\Slider2;
use App\Slider3;
use Artesaos\SEOTools\Facades\SEOTools;
class AdminController extends Controller
{

    public function __construct(){
        // $this->middleware('auth');
    }
    public function dashboard(Request $request)
    {
        $proposals = Proposal::all();
        $plans_count = Plan::sum('amount');
        $prayers = Prayer::all();
        // dd($plans_count);
        $plans = Plan::all();
        return view('dashboard', compact('proposals', 'plans', 'plans_count', 'prayers'));
    }

     public function project(Request $request)
    {
        $project = Project::all();
        return view('admin.projects', compact('project'));
    }

    public function new_proj(Request $request)
    {
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'PuzzlePiece2.jpg';
        }
        $project = new Project;
        $project->name = $request->name;
        $project->status = $request->status;
        $project->image = $fileNameToStore;
        $project->desc = $request->desc;
        $project->save();

        SEOTools::setTitle(url('/'));
        SEOTools::setDescription($request->desc);
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', $request->name);
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage($fileNameToStore );

        session()->flash('success', 'project added successful');
        return redirect()->back();
    }

    public function edit(Request $request){
        $edit = Project::where('id', $request->id)->first();

        return response()->json(['edit'=>$edit]);
    }

    public function update(Request $request)
    {
        $id = (int)$request->id;
        // dd($id);
        $update = Project::find($id);
        // dd($update);
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }
        $update->name = $request->editname;
        $update->status = $request->editstatus;
        if ($request->hasFile('image')) {
            $update->image = $fileNameToStore;
        }

        $update->save();

        SEOTools::setTitle(url('/'));
        SEOTools::setDescription($update->desc);
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', $request->editname);
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage($fileNameToStore );

        session()->flash("success", "project updated successful");
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $cat = Project::find($id);
        $cat->delete($id);
        return response()->json(['status'=>1]);
    }


    public function proposal(Request $request)
    {
        $proposal = new Proposal();
        $proposal->name = $request->name;
        $proposal->org = $request->name_org;
        $proposal->adress = $request->p_adress;
        $proposal->telephone = $request->t_no;
        $proposal->mobile = $request->m_no;
        $proposal->city = $request->town;
        $proposal->country = $request->country;
        $proposal->email = $request->email;
        $proposal->message = $request->message;
        $proposal->save();

        $details['name'] = $request->name;
        $details['email'] = $request->email;
        $details['mobile'] = $request->m_no;
        $details['message'] = $request->message;
        Mail::to('rashid.mkoji@aimsoft.co.ke')->send(new ProposeEmail($details));
        session()->flash("success", "dear ".$request->name." we have received your proposal, we will get back as soon as possible");
        return redirect()->back();
    }

    public function plans(Request $request)
    {
        $plans = Donate::all();
        return view('admin.plans', compact('plans'));
    }
    public function new_plan(Request $request)
    {
        $plan = new Donate();
        $plan->title = $request->name;
        $plan->amount = $request->amount;
        $plan->save();
        session()->flash("success", "plan created successfully");
        return redirect()->back();
    }

    public function edit_plan(Request $request)
    {
        $edit = Donate::where('id', $request->id)->first();

        return response()->json(['edit'=>$edit]);
    }

    public function update_plan(Request $request){

        $id = (int)$request->id;

        $update = Donate::where('id', $id)->update([
            'title'=>$request->editname,
            'amount'=>$request->editamount
        ]);

        session()->flash("success", "plans updated successfully");
        return redirect()->back();
    }
    public function delete_plan(Request $request, $id)
    {
        $cat = Donate::find($id);
        $cat->delete($id);
        return response()->json(['status'=>1]);
    }
    public function video(Request $request)
    {
        $video = Video::find(1);
      return view('admin.videos', compact('video'));
    }
    public function new_video(Request $request)
    {
        if ($request->hasFile('edit_image')) {
            $fileNameWithExt = $request->file('edit_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('edit_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('edit_image')->storeAs('public/images', $fileNameToStore);
        }

        $video = Video::find(1);
        // dd($fileNameToStore);
            $video->name = $fileNameToStore;
        $video->save();

        session()->flash("success", "video updated successfully");
        return redirect()->back();

    }

    public function user(Request $request)
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function new_user(Request $request)
    {
        DB::beginTransaction();
        try {
            $digits = 4;
            $pass = rand(pow(10, $digits-1), pow(10, $digits)-1);
            $password = Hash::make($pass);
            // dd($password);

            $info = [
                'name'=>$request->name,
                'password'=>$pass,
                'email'=>$request->email
            ];
            \Mail::to($info['email'])->send(new UserEmail($info));

            $user = User::create(['name'=>$request->name, 'email'=>$request->email, 'password'=>$password]);

            DB::commit();

            Session::flash("success", "user created successfuly");
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }
    }

    public function delete_user(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete($id);

        return response()->json(['status'=>1]);
    }


    public function contact_details(Request $request)
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }

    public function update_contact(Request $request)
    {
        $update = Contact::find(1);
        $update->name1 = $request->name;
        $update->name2 = $request->name2;
        $update->name3 = $request->name3;
        $update->email1 = $request->email;
        $update->email2 = $request->email2;
        $update->email3 = $request->email3;
        $update->phone1 = $request->mobile;
        $update->phone2 = $request->mobile2;
        $update->phone3 = $request->mobile3;
        $update->save();

        session()->flash("success", "contact details updated");
        return redirect()->back();
    }

    public function edit_contact(Request $request)
    {
        $edit = Contact::find(1);
        return response()->json(['edit'=>$edit]);
    }
public function call(Request $request)
{
    $callus['name'] =  $request->first_name.' '.$request->last_name;
    $callus['email'] = $request->email;
    $callus['phone'] = $request->phone;
    $callus['comments'] = $request->comments;
    Mail::to('rashid.mkoji@aimsoft.co.ke')->send(new ContactUs($callus));

    session()->flash("success", "thank you ".$callus['name']." for contacting us God Bless you");
    return redirect()->back();
}

public function prayer(Request $request)
{
    $prayer['name'] = $request->name;
    $prayer['email'] = $request->email;
    $prayer['message'] = $request->message;

    $prayer1 =  New Prayer();
    $prayer1->name = $request->name;
    $prayer1->email = $request->email;
    $prayer1->message = $request->message;
    $prayer1->save();

    Mail::to('rashid.mkoji@aimsoft.co.ke')->send(new UserPrayer($prayer));

    session()->flash("success", "thank you ".$prayer['name']." for your prayers God Bless you");
    return redirect()->back();
}

public function new_partnership(Request $request)
{
    $partner = new Partner();
    $partner->name = $request->name;
    $partner->org = $request->name_org;
    $partner->adress = $request->p_adress;
    $partner->telephone = $request->t_no;
    $partner->mobile = $request->m_no;
    $partner->city = $request->town;
    $partner->country = $request->country;
    $partner->email = $request->email;
    $partner->message = $request->message;
    $partner->save();

    $details['name'] = $request->name;
    $details['email'] = $request->email;
    $details['mobile'] = $request->m_no;
    $details['message'] = $request->message;
    Mail::to('rashid.mkoji@aimsoft.co.ke')->send(new PartnerMail($details));
    session()->flash("success", "dear ".$request->name. "  we have received your partnership request, we will get back as soon as possible");
    return redirect()->back();
}

public function slider(Request $request)
{
    $sliders1 = Slider1::all();
    $sliders2 = Slider2::all();
    $sliders3 = Slider3::all();
    return view('admin.slider', compact('sliders1', 'sliders2', 'sliders3'));
}

public function add_slider(Request $request)
{
    $slider = Slider1::find(1);
    if ($request->hasFile('image1')) {
        $fileNameWithExt1 = $request->file('image1')->getClientOriginalName();
        $filename1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
        $extension1 = $request->file('image1')->getClientOriginalExtension();
        $fileNameToStore1 = $filename1 . '_' . time() . '.' . $extension1;
        $path1 = $request->file('image1')->storeAs('public/slider', $fileNameToStore1);
    }
    if ($request->hasFile('image1')) {
        $slider->image1 = $fileNameToStore1;
    }
    if ($request->hasFile('image2')) {
        $fileNameWithExt2 = $request->file('image2')->getClientOriginalName();
        $filename2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
        $extension2 = $request->file('image2')->getClientOriginalExtension();
        $fileNameToStore2 = $filename2 . '_' . time() . '.' . $extension2;
        $path2 = $request->file('image2')->storeAs('public/slider', $fileNameToStore2);
    }
    if ($request->hasFile('image2')) {
        $slider->image2 = $fileNameToStore2;
    }

    if ($request->hasFile('image3')) {
        $fileNameWithExt3 = $request->file('image3')->getClientOriginalName();
        $filename3 = pathinfo($fileNameWithExt3, PATHINFO_FILENAME);
        $extension3 = $request->file('image3')->getClientOriginalExtension();
        $fileNameToStore3 = $filename3 . '_' . time() . '.' . $extension3;
        $path3 = $request->file('image3')->storeAs('public/slider', $fileNameToStore3);
    }
    if ($request->hasFile('image3')) {
        $slider->image3 = $fileNameToStore3;
    }




    if ($request->hasFile('edit_image')) {
        $fileNameWithExt = $request->file('edit_image')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('edit_image')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('edit_image')->storeAs('public/images/food/food-menu', $fileNameToStore);
    }
    if ($request->hasFile('edit_image')) {
        $slider->image3 = $fileNameToStore3;
    }



    // $slider = new Slider1();
    // $slider->image1 = $fileNameToStore1;
    // $slider->image2 = $fileNameToStore2;
    // $slider->image3 = $fileNameToStore3;
    $slider->save();
    session()->flash("success", "uploaded successfully");
    return redirect()->back();
}

public function add_slider2(Request $request)
{
    $slider = Slider2::find(1);
    if ($request->hasFile('image1')) {
        $fileNameWithExt1 = $request->file('image1')->getClientOriginalName();
        $filename1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
        $extension1 = $request->file('image1')->getClientOriginalExtension();
        $fileNameToStore1 = $filename1 . '_' . time() . '.' . $extension1;
        $path1 = $request->file('image1')->storeAs('public/slider', $fileNameToStore1);
    }
    if ($request->hasFile('image1')) {
        $slider->image1 = $fileNameToStore1;
    }
    if ($request->hasFile('image2')) {
        $fileNameWithExt2 = $request->file('image2')->getClientOriginalName();
        $filename2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
        $extension2 = $request->file('image2')->getClientOriginalExtension();
        $fileNameToStore2 = $filename2 . '_' . time() . '.' . $extension2;
        $path2 = $request->file('image2')->storeAs('public/slider', $fileNameToStore2);
    }
    if ($request->hasFile('image2')) {
        $slider->image2 = $fileNameToStore2;
    }

    if ($request->hasFile('image3')) {
        $fileNameWithExt3 = $request->file('image3')->getClientOriginalName();
        $filename3 = pathinfo($fileNameWithExt3, PATHINFO_FILENAME);
        $extension3 = $request->file('image3')->getClientOriginalExtension();
        $fileNameToStore3 = $filename3 . '_' . time() . '.' . $extension3;
        $path3 = $request->file('image3')->storeAs('public/slider', $fileNameToStore3);
    }
    if ($request->hasFile('image3')) {
        $slider->image3 = $fileNameToStore3;
    }




    if ($request->hasFile('edit_image')) {
        $fileNameWithExt = $request->file('edit_image')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('edit_image')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('edit_image')->storeAs('public/images/food/food-menu', $fileNameToStore);
    }
    if ($request->hasFile('edit_image')) {
        $slider->image3 = $fileNameToStore3;
    }



    // $slider = new Slider1();
    // $slider->image1 = $fileNameToStore1;
    // $slider->image2 = $fileNameToStore2;
    // $slider->image3 = $fileNameToStore3;
    $slider->save();
    session()->flash("success", "uploaded successfully");
    return redirect()->back();
}

public function add_slider3(Request $request)
{
    $slider = Slider3::find(1);
    if ($request->hasFile('image1')) {
        $fileNameWithExt1 = $request->file('image1')->getClientOriginalName();
        $filename1 = pathinfo($fileNameWithExt1, PATHINFO_FILENAME);
        $extension1 = $request->file('image1')->getClientOriginalExtension();
        $fileNameToStore1 = $filename1 . '_' . time() . '.' . $extension1;
        $path1 = $request->file('image1')->storeAs('public/slider', $fileNameToStore1);
    }
    if ($request->hasFile('image1')) {
        $slider->image1 = $fileNameToStore1;
    }
    if ($request->hasFile('image2')) {
        $fileNameWithExt2 = $request->file('image2')->getClientOriginalName();
        $filename2 = pathinfo($fileNameWithExt2, PATHINFO_FILENAME);
        $extension2 = $request->file('image2')->getClientOriginalExtension();
        $fileNameToStore2 = $filename2 . '_' . time() . '.' . $extension2;
        $path2 = $request->file('image2')->storeAs('public/slider', $fileNameToStore2);
    }
    if ($request->hasFile('image2')) {
        $slider->image2 = $fileNameToStore2;
    }

    if ($request->hasFile('image3')) {
        $fileNameWithExt3 = $request->file('image3')->getClientOriginalName();
        $filename3 = pathinfo($fileNameWithExt3, PATHINFO_FILENAME);
        $extension3 = $request->file('image3')->getClientOriginalExtension();
        $fileNameToStore3 = $filename3 . '_' . time() . '.' . $extension3;
        $path3 = $request->file('image3')->storeAs('public/slider', $fileNameToStore3);
    }
    if ($request->hasFile('image3')) {
        $slider->image3 = $fileNameToStore3;
    }




    if ($request->hasFile('edit_image')) {
        $fileNameWithExt = $request->file('edit_image')->getClientOriginalName();
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('edit_image')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('edit_image')->storeAs('public/images/food/food-menu', $fileNameToStore);
    }
    if ($request->hasFile('edit_image')) {
        $slider->image3 = $fileNameToStore3;
    }



    // $slider = new Slider1();
    // $slider->image1 = $fileNameToStore1;
    // $slider->image2 = $fileNameToStore2;
    // $slider->image3 = $fileNameToStore3;
    $slider->save();
    session()->flash("success", "uploaded successfully");
    return redirect()->back();
}
}
