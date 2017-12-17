<?php
namespace Home\Controller;
use Think\Controller;
class DocDetailController extends Controller {

    function index(){
                //整体从上一界面获取变量，共5个，1个用于查询


                $department=$_GET['department_name'];
                $school=$_GET['school_name'];
                $create=$_GET['create_time'];
                $title=$_GET['document_title'];

       
                //实例化2个表
                $User = M("document"); 
                $User1 =M("comment"); 

              
                //查询
                $data =$User->where("document_title='$title'")->getField('document_content',1);
                $data0 =$User->where("document_title='$title'")->getField('document_id',1);
                $DOC=$data0;
            
                $data1= $User1->where("Doc_id='$DOC'")->getField('comment_content',10);

                $this->assign('school',$school);
                $this->assign('department',$department);
                $this->assign('title', $title);
                $this->assign('create',$create);
                $this->assign('content',$data);
                $this->assign('DOC',$DOC);
                //输出评论
                if($data1){
                 for ($i=0; $i <sizeof($data1); $i++) { 
                  $str="<li class='comment_item'>$data1[$i]</li>";
                   $li=$li.$str; 
                   $this->assign('comment_item',$li);}
                }
                $this->display();
        }
}
