<?php
/**
 * Created by PhpStorm.
 * User: luchen
 * Date: 15/12/2017
 * Time: 17:02
 */

namespace Home\Controller;
use Think\Controller;

class DocListController extends Controller
{
    public function index()
    {
        //创建下拉菜单
        $User = M("school");
        $data = $User->where('')->select();
        //var_dump($data);die();
        $this->assign('arr1', $data);
        $User = M("department");
        $data = $User->where('')->select();
        //var_dump($data);die();
        $this->assign('arr2', $data);
        $this->display();


        $User = M("document");
        $data = $User->where('')->select();
    }
    /**
     *  select 数据库所有满足条件的攻略
     *
     */

    public function search()
    {
        //获取指定学校id，学院id
        $schoolId = $_POST['schoolId'];
        $departmentId = $_POST['departmentId'];
        //var_dump($schoolId); var_dump($departmentId);die();

        //查询Document表中满足指定学校，学院名的数据
        $User = M("document");
        $department = M("department");
        $school = M("school");
        //无筛选条件
        if($departmentId == -1 && $schoolId == -1 )
        {
            $data = $User->where('')->order('Create_time')->select();//按日期顺序返回
            foreach($data as $key=>$value)
            {

                $did = $value['department_id'];
                $departments = $department->where("department_id=$did")->find();
                $out[$key]["department_name"] = $departments["department_name"];

                $sid = $value['school_id'];
                $schools = $school->where("school_id=$sid")->find();
                $out[$key]["school_name"] = $schools["school_name"];

                $out[$key]["create_time"] = $value["create_time"];
                $out[$key]["document_title"] = $value["document_title"];

            }
        }
        //筛选条件
        else{
            if( $schoolId != -1 && $departmentId != -1)
            {
                //选定指定学校和指定学院

                $data = $User->where("school_id=$schoolId AND department_id=$departmentId")->select();
               // var_dump($data); die();
                if($data)
                {
                    foreach($data as $key=>$value)
                    {
                        $schools = $school->where("school_id=$schoolId")->find();
                        $out[$key]["school_name"] = $schools["school_name"];

                        $departments = $department->where("department_id=$departmentId")->find();
                        $out[$key]["department_name"] = $departments["department_name"];

                        $out[$key]["create_time"] = $value["create_time"];
                        $out[$key]["document_title"] = $value["document_title"];
                    }
                }
            }
            elseif($schoolId != -1 && $departmentId == -1)
            {//只选择指定学校
                $data = $User->where("school_id=$schoolId")->select();

                foreach($data as $key=>$value)
                {
                    $schools = $school->where("school_id=$schoolId")->find();
                    $out[$key]["school_name"] = $schools["school_name"];

                    $did=$value["department_id"];
                    $departments = $department->where("department_id=$did")->find();
                    $out[$key]["department_name"] = $departments["department_name"];

                    $out[$key]["create_time"] = $value["create_time"];
                    $out[$key]["document_title"] = $value["document_title"];

                }
            }
            elseif($schoolId == -1 && $departmentId != -1)
            {
                //只选择指定课程
                $data = $User->where("department_id=$departmentId")->select();
                foreach ($data as $key=>$value)
                {
                    $departments = $department->where("department_id=$departmentId")->find();
                    $out[$key]["department_name"] = $departments["department_name"];

                    $sid=$value["school_id"];
                    $schools = $school->where("school_id=$sid")->find();
                    $out[$key]["school_name"] = $schools["school_name"];


                    $out[$key]["create_time"] = $value["create_time"];
                    $out[$key]["document_title"] = $value["document_title"];

                }
            }
        }
        //以json返回数据
        $this->ajaxReturn($out);
    }

}
