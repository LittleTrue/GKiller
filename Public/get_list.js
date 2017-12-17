$(document).ready(function(){
    
        //定义自动添加攻略条目方法
        function additem(data,status)
        {
            if(status == "success") {
                //data返回成功后执行操作
                //循环插入攻略条目
                //alert(data[0].document_title);
    
                $("#document_list").empty();
            
                for(var i in data){
                   
                    var div="<div class=\"list-group\">\n" +
                        "               <a href=\"http://localhost/GKiller/index.php/home/DocDetail?document_id="+data[i].document_id+"&school_name="+data[i].school_name+"&department_name="+data[i].department_name+"&create_time="+data[i].create_time+"&document_title="+data[i].document_title+"\" class=\"list-group-item list-group-item-action\">\n" +
                        "                <h4 class=\"list-group-item-heading\">\n" + data[i].document_title +
                        "                </h4>\n" +
                        "                <p class=\"list-group-item-text\">\n" +
                        "                    <span>" + data[i].school_name + "</span><span> "
                        + data[i].department_name +"</span><span>"
                        + data[i].create_time+ "</span>\n" +
                        "                </p>\n" +
                        "            </a>\n" +
                        "    </div>\n";
                    $("#document_list").append(div);
                }
            }else
            {
                alert("查询失败");
            }
        }
    
        /*进入首页，按日期自动添加数据库所有攻略条目
        * */
        $.post("/GKiller/index.php/home/doclist/search",
            {
                schoolId:-1,
                departmentId:-1
            },function(data,status){additem(data,status);})
    
    
        /*监听“查询”按钮，按照条件进行查询
        * */
        $("#form_search").submit(function(e){
            e.preventDefault();
            //获取下拉框的值
            var select_school = $("#select_school").find("option:selected").val();
            var select_department = $("#select_department").find("option:selected").val();
    
            $.post("/GKiller/index.php/home/doclist/search",
                {
                    schoolId:select_school,
                    departmentId:select_department
                },function(data,status){additem(data,status);})
        });
    });