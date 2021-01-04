<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\Session;
use Think\Verify;
class Index extends Controller
{
   
       public function two(){
       	return $this->fetch();
    }
      public function grzx(){
       $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
      $user=Db::name("stu")->find($Id);
      $this->assign('user',$user);
      return $this->fetch();
    }
    public function grzx_info(){
      $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
       $title=input("title");
        $text=input("text");
        $input_info=['title'=>$title,'text'=>$text];
        $ID=Db::table("stu")->where('Id',$Id)->update($input_info);
        if($ID==1)   {
          
            echo '<script language="JavaScript">;alert("修改成功,请查看");location.href="grzx.html";</script>;';
        }
        else{
            echo '<script language="JavaScript">;alert("修改失败");location.href="grzx.html";</script>;';
        }
    }
    public function test(){
        return $this->fetch();
    }
    public function two1(){
      $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
      
       $user=Db::table("stu")->find($Id);
       $this->assign('user',$user);
      return $this->fetch();

    }
    public function three1(){
       $result=Db::table("stu")->paginate(8);
       $page = $result->render();
       $this->assign('list',$result);
       $this->assign('page', $page);
    	return $this->fetch();
    }
    public function four(){

    	return $this->fetch();
    }
    public function spsc(){
      $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
      $user=Db::name("stu")->find($Id);
      $this->assign('user',$user);
      return $this->fetch();
    }
    public function four_info(){ 
      $data=$_POST;
      $table=Db::table("stu")->where("tel",$data["tel"])->find();
      // dump($table);
      // die();
      $mima=$table["mima"];
      if($mima==$data["mima"])      {
            Session::set('Id',$table["Id"]);
            echo '<script language="JavaScript">;alert("登录成功");location.href="three2.html";</script>;';
        
        }
        else{
            echo '<script language="JavaScript">;alert("登录失败！请重试");location.href="four.html";</script>;';
        }                                                                     
   
       }
    public function five(){

    	return $this->fetch();
    }
    public function five_info(){
       $result=$this->request;
        $input_info=$result->param();
        $ID=Db::name("stu")->insert($input_info);
        if($ID==1){
        echo '<script language="JavaScript">;alert("注册成功！前往登录");location.href="four.html";</script>;';
        }
        else{
            
           echo '<script language="JavaScript">;alert("注册失败！请重试");location.href="five.html";</script>;';
        }
       
       }
    public function six(){

     
    	 $Id=input("id");
      $user=Db::name("stu")->find($Id);
      $this->assign('user',$user);
      return $this->fetch();
    }
    
    public function three2(){
       $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
      
       $user=Db::table("stu")->find($Id);
       $this->assign('user',$user);
       $result=Db::table("stu")->paginate(8);
       $page = $result->render();
       $this->assign('list',$result);
       $this->assign('page', $page);
      return $this->fetch();
        
    }

    public function zx(){
       $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
        Session::clear();
        echo '<script language="JavaScript">;alert("您已退出登录");location.href="four.html";</script>;';
    }

    public function xl()
    {
     $result=Db::table("stu")->select();
     $this->assign('list',$result);
    return $this->fetch();
    }
   
    public function sb(){
      $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
      $user=Db::name("stu")->find($Id);
      $this->assign('user',$user);
      return $this->fetch();
    }

    public function xg(){
      $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
      $user=Db::name("stu")->find($Id);
      $this->assign('user',$user);
      return $this->fetch();
    }

    public function xg_info(){
      $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
      $file= request()->file("uploaderInput");
     
      if($file){
        $info=$file->move(ROOT_PATH.'public/static'.DS.'uploads');
        if($info){
          Db::name('stu')->where('Id',$Id)->setField('img',$info->getSaveName());
          echo '<script language="JavaScript">;alert("上传成功");location.href="four.html";</script>;';
        }else{
          echo '<script language="JavaScript">;alert("上传失败，请重试！");location.href="four.html";</script>;';
        }
      }
    }
    public function mmxg(){
      $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
      $user=Db::name("stu")->find($Id);
      $this->assign('user',$user);
      return $this->fetch();
    }
    public function mmxg_Info(){
      $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
        $mima=input("mima");
        $input_info=['mima'=>$mima];
        $ID=Db::table("stu")->where('Id',$Id)->update($input_info);
        if($ID==1)   {
            echo '<script language="JavaScript">;alert("修改成功,请重新登录");location.href="four.html";</script>;';
        }
        else{
            echo '<script language="JavaScript">;alert("修改失败");location.href="mmxg.html";</script>;';
        }
    }
    public function sb_info(){
       $Id=Session::get('Id');
       if(is_null($Id))
       {
         $this->redirect("four");
       }
        $title=input("title");
        $text=input("text");
        $file= request()->file("video");
        $info=$file->move(ROOT_PATH.'public/static'.DS.'uploads');
        if($info){
          $input_info=['title'=>$title,'text'=>$text,'video'=>$info->getSaveName()];
          $ID=Db::table("stu")->where('Id',$Id)->update($input_info);
          echo '<script language="JavaScript">;alert("上传成功");location.href="three2.html";</script>;';
        }else{
          echo '<script language="JavaScript">;alert("上传失败，请重试！");location.href="sb.html";</script>;';
        }
      }
    

}
