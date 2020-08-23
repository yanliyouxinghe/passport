<?php
    namespace App\Http\Controllers\Login;
    use App\Http\Controllers\Controller;
    use App\Model\Index\UserModel;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Cookie;
    use Illuminate\Support\Str;
    class LoginController extends Controller
    {
        public function login(Request $request){
            $url = $request->input('redirect');
            if(empty($url)){
                echo  "滚,shabi ";die;
            }
            return view('login_index',['url'=>$url]);
        }


        public function loginDo(Request $request){

                $user_autner = $request->post('user_autner');
                $user_pwd = $request->post('user_pwd');
                $redirect = $request->post('redirect');
                if (empty($user_autner) || empty($user_pwd)){
                        return redirect("/login?redirect=".$redirect)->with('msg', '账号或密码不能为空!');die;
                }
                    $res = UserModel::where('user_autner',$user_autner)->first();
                    if ($res){
//                        $data = [
//                            'user_id' =>$res->user_id,
//                            'user_autner' =>$res->user_autner,
//                            'user_name' =>$res->user_name,
//                        ];
                        if (password_verify($user_pwd,$res->user_pwd)){
                            $token = UserModel::webLogin($res->user_id,$res->user_autner);
//                            session(['user' =>$session]);
//                            存cookie
//                            $token = Str::random(16);
                            cookie::queue('token',$token,60*24*7,'/','1910.com',false,true);
                            return redirect(url($redirect));
                        }else{
    //                        echo  $this->location_href('账号或密码错误...');
                            return redirect("/login?redirect=".$redirect)->with('msg', '账号或密码错误!');die;
                        }
                    }else{
    //                    echo $this->location_href('账号或密码错误...');
                        return redirect("/login?redirect=".$redirect)->with('msg', '账号或密码错误!');die;
                    }
                }
    }
