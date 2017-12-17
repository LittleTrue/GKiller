<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller {

        function index(){
        //显示登陆网页
        $this->display();
        // $title=$_GET['title'];
        // $User0=M("document"); 
        // $data0=$User0->where("document_title='$title'")->getField('document_id',1);
        // return $Document_id=$data0;
      
    }
        public function insert(){
        //使用POST接受html中form表单中的数据
        // $Document_id=$this->index();
       $inputs=$_POST['inputs'];
    //    $Document_id=$this->index();
        //$Document_id=$_POST['Document_id'];
        $showtime=date("Y-m-d");
           
        //构建插入数据
        $COM['Doc_id']=30004;
        $COM['Comment_content']=$inputs;
        $COM['Comment_date']=$showtime;

       
        //返回的字符数组
        $User= M("comment"); // 实例化User对象
        $date=$User->add($COM);
        
        if($date){
            //定义返回数据
            $ret_date['status']=0;
            $ret_date['content']="评论成功";
        }
        else{
            $ret_date['status']=1;
            $ret_date['content']="网络开小差了,请稍后再试";
        }
        //以json返回数据
        $this->ajaxReturn($ret_date);
     }
}