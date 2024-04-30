<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Admincontroller extends Controller
{
    function index(){
        $list = DB::table('comments')->join('users', 'comments.ref_id', '=', 'users.id')
        ->select('comments.name', 'comments.email', 'comments.com_list','users.img_user')
        ->get();
        return view('finexo-html.index',compact('list'));
    }

    function about(){
        return view('finexo-html.about');
    }

    function service(){
        return view('finexo-html.service');
    }

    function team(){
        return view('finexo-html.team');
    }

    function why(){
        return view('finexo-html.why');
    }

      //problem
      function problem(){
        return view('finexo-html.ReadMode.problem');
    }
    //
    function EstimatePrice(){
        return view('finexo-html.ReadMode.EstimatePrice');
    }

    function repair(){
        return view('finexo-html.ReadMode.repair');
    }

    //------------------------------------------------------------------//DashBoard User

    public  function dashboarduser(){
        // ดึงข้อมูลผู้ใช้ที่เข้าสู่ระบบ
                $user = Auth::user()->id_card;   
                // Perform a join between data_customers and users table
                $dashboarduser = DB::table('data_customers')->join('users', 'data_customers.user_id', '=', 'users.id_card')
                ->select('data_customers.*')
                ->where('users.id_card', '=', $user)
                ->get();
    
            return view('userPF.dashboard', compact('dashboarduser'));
    
    }


        function slip($id){
            $slip=DB::table('data_customers')->where('id',$id)->first();
            // dd($edit_user);
            return view('userPF.slip',compact('slip'));
    }

    function updateslip(Request $request,$id){
        $slip = [
            // 'name'=>$request->name,
            // 'user_id'=>$request->user_id,
            // 'address'=>$request->address,
            // 'contact'=>$request->contact,
            // 'model_phone'=>$request->model_phone,
            // 'repair_change_parts'=>$request->repair_change_parts,
            // 'estimate_price'=>$request->estimate_price,
            'status'=>$request->status,
            // 'created_at'=>$request->created_at,
            // 'updated_at'=>$request->updated_at,
            'slip'=>$request->slip,
            
        ];   
             // อัพโหลดไฟล์รูปภาพ
    if($request->hasFile('slip')) {
        
        $slipName = uniqid() . '' . $request->file('slip')->getClientOriginalName();//ชื่อไม่ซ้ำ
        $path = $request->file('slip')->storeAs('public/images',$slipName);
        $slip['slip'] = $path;
    }
        // if ($request->status === 'รับซ่อม โปรดส่งพัสดุ') {
        //     $slip = ['status'=>$request->status = 0];
        // } else if ($request->status === 'รอการชำระเงิน') {
        // $slip = ['status'=>$request->status = 1];
        // } else if ($request->status === 'รอตรวจสอบ') {
        // $slip = ['status'=>$request->status = 2];
        // } else if ($request->status === 'กำลังซ่อม') {
        // $slip = ['status'=>$request->status = 3];
        // } else if ($request->status === 'ซ่อมเสร็จ') {
        // $slip = ['status'=>$request->status = 4];
        // }else if ($request->status === 'กำลังจัดส่งพัสดุ') {
        // $slip = ['status'=>$request->status = 5];
        // }else if ($request->status === 'ส่งสำเร็จ') {
        // $slip = ['status'=>$request->status = 6];
        // };
        
        DB::table('data_customers')->where('id',$id)->update($slip);
        return redirect('/dashboard');
    }
    
    function profile_data() {
        $profile = DB::table('users')->first(); // ตัวอย่างเท่านั้น โปรดแก้ไขตามความเหมาะสม
        return view('profile-1.profile_data', compact('profile'));
    }

    function profile_edit() {
        $user_id = Auth::id();
        $profile = DB::table('users')->where('id',$user_id)->first(); // ตัวอย่างเท่านั้น โปรดแก้ไขตามความเหมาะสม
        return view('profile-1.profile_edit', compact('profile'));
    }
    



    function updateprofile_edit(Request $request, $id){
        $user_id = $id; // ใช้ $id ที่รับเข้ามาแทน
        $updateprofile_edit = [
            'name' => $request->name,
            'img_user' => $request->img_user,
            // 'id_card' => $request->id_card,
            'email' => $request->email,     
            'phone' => $request->phone,
        ];   
        
        // อัพโหลดไฟล์รูปภาพ
// อัพโหลดไฟล์รูปภาพ
if ($request->hasFile('img_user')) {
    // สร้างชื่อไฟล์ใหม่ด้วยคำสั่ง uniqid() เพื่อให้มั่นใจว่าไม่ซ้ำกัน
    $imgName = uniqid() . '.' . $request->file('img_user')->getClientOriginalExtension();

    // เส้นทางที่ระบุในการเก็บไฟล์
    $path = $request->file('img_user')->storeAs('public/images', $imgName);

    // อัพเดทชื่อไฟล์ภาพให้เป็นเส้นทางและชื่อของไฟล์ภาพใหม่
    $updateprofile_edit['img_user'] = 'public/images/' . $imgName;
}else {
    // ถ้าไม่มีการอัปโหลดรูปภาพใหม่ ให้ใช้รูปภาพเดิมจากฐานข้อมูล
    $user = User::findOrFail($user_id);
    $updateprofile_edit['img_user'] = $user->img_user;
}


        
        DB::table('users')->where('id', $user_id)->update($updateprofile_edit);
        return redirect('/profile_data');
    }
    
    

    // ------------------------------------------------------------------//
    //admin
    public function indexadmin(){
        $count = DB::table('users')->count();
        
        return view('admin-1.indexadmin',compact('count'));
    }

    function tables(){
        $data = DB::table('data_customers')->get();
        return view('admin-1.tables',compact('data'));
    }

    function tables_copy(){
        return view('admin-1.tables-copy');
    }

    // function profile_edit(){
    //     return view('profile-1.profile_edit');
    // }

    // function profile_data(){
    //     return view('profile-1.profile_data');
    // }

    function login(){
        return view('finexo-html.login-form-20.login');
    }

    function sign_In(){
        return view('problem');
    }

    function adds_user(){
    
        return view('admin_adds_user');
    }

    

    function insert(Request $request){
        $adds_user = [
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'model_phone'=>$request->model_phone,
            'repair_change_parts'=>$request->repair_change_parts,
            'estimate_price'=>$request->estimate_price,
            'status'=>$request->status,
            'created_at'=>$request->created_at,
            'img'=>$request->img,
        ];
        // อัพโหลดไฟล์รูปภาพ
    if($request->hasFile('img')) {
        
        $imgName = uniqid() . '' . $request->file('img')->getClientOriginalName();//ชื่อไม่ซ้ำ
        $path = $request->file('img')->storeAs('public/images',$imgName);
        $adds_user['img'] = $path;
    }    

        if ($request->status === 'รับซ่อม โปรดส่งพัสดุ') {
                $adds_user = ['status'=>$request->status = 0];
            } else if ($request->status === 'รอการชำระเงิน') {
            $adds_user = ['status'=>$request->status = 1];
            } else if ($request->status === 'รอตรวจสอบ') {
            $adds_user = ['status'=>$request->status = 2];
            } else if ($request->status === 'กำลังซ่อม') {
            $adds_user = ['status'=>$request->status = 3];
            } else if ($request->status === 'ซ่อมเสร็จ') {
            $adds_user = ['status'=>$request->status = 4];
            }else if ($request->status === 'กำลังจัดส่งพัสดุ') {
            $adds_user = ['status'=>$request->status = 5];
            }else if ($request->status === 'ส่งสำเร็จ') {
            $adds_user = ['status'=>$request->status = 6];
            };
        
        // DB::table('data_customers')->insert($adds_user);
        // return redirect('/tables');
        DB::table('data_customers')->insert($adds_user);
        return redirect('/tables');
    }

    //ลบข้อมูลลูกค้า
    function delete($id){
        DB::table('data_customers')->where('id',$id)->delete();
        return redirect('/tables');
    }

    //edit data user
    function edit_user($id){
        $edit_user=DB::table('data_customers')->where('id',$id)->first();
        // dd($edit_user);
        return view('admin_edit_user',compact('edit_user'));
    }
    function update(Request $request,$id){
        $adds_user = [
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'model_phone'=>$request->model_phone,
            'repair_change_parts'=>$request->repair_change_parts,
            'estimate_price'=>$request->estimate_price,
            'true_price'=>$request->true_price,
            'status'=>$request->status,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at,
            'th_'=>$request->th_,
            
        ];    
        if ($request->status === 'รับซ่อม โปรดส่งพัสดุ') {
            $adds_user = ['status'=>$request->status = 0];
        } else if ($request->status === 'รอการชำระเงิน') {
        $adds_user = ['status'=>$request->status = 1];
        } else if ($request->status === 'รอตรวจสอบ') {
        $adds_user = ['status'=>$request->status = 2];
        } else if ($request->status === 'กำลังซ่อม') {
        $adds_user = ['status'=>$request->status = 3];
        } else if ($request->status === 'ซ่อมเสร็จ') {
        $adds_user = ['status'=>$request->status = 4];
        }else if ($request->status === 'กำลังจัดส่งพัสดุ') {
        $adds_user = ['status'=>$request->status = 5];
        }else if ($request->status === 'ส่งสำเร็จ') {
        $adds_user = ['status'=>$request->status = 6];
        };
        
        DB::table('data_customers')->where('id',$id)->update($adds_user);
        return redirect('/tables');
    }

    

    function comment(){
        $list = DB::table('comments')->join('users', 'comments.ref_id', '=', 'users.id')
        ->select('comments.name', 'comments.email', 'comments.com_list','users.img_user')
        ->get();
        return view('comment',compact('list'));
    }
    function insertcomment(Request $request){
        $user_id = Auth::user()->id;
    // ดึงข้อมูลรูปโปรไฟล์ของผู้ใช้
    // $profileImageName = DB::table('users')->where('id', $user_id)->value('img_user');
        $inputcomment = [
            'name' => $request->name,
            'email' => $request->email,
            'com_list' => $request->com_list,
            // 'img_com' => $profileImageName, // ใช้รูปโปรไฟล์ที่มีอยู่แล้ว
            'ref_id' => $user_id, // ใช้รูปโปรไฟล์ที่มีอยู่แล้ว
            // 'user_id' => $user_id, // เพิ่ม user_id เข้าไปในข้อมูลที่จะเพิ่ม
        ];
    
        DB::table('comments')->insert($inputcomment);
        return redirect('/comment');
    }
    
    
}
