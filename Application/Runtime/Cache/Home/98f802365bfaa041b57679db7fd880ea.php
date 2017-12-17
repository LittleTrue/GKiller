<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <title>insert_comment</title>
   
    <link href="http://localhost/GKiller/public/get_detail.css" rel="stylesheet"  charset="utf-8">
   </script>
<script>
    function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
    } 

    $(document).ready(function(){
    alert(getQueryString("school_name"));
    
}
</script>
</head>

<body>

    <div class="container">  
     <div class="load_question_detaill">
             
    <div class="header">
         <a href="javascript:window.history.go(-1)"><img src="http://localhost/GKiller/public/images/back.png" border="0" title="返回"></a>                                     
         <img src="http://localhost/GKiller/public/images/logo.png" >
    </div>

      <div class="nav">
             <div id="tag">
                 <ul id="box1" class="box1">
                 <li id="school"><?php echo ($school); ?></li>
                 <li id="department"><?php echo ($department); ?></li>
                <li id="create"><?php echo ($create); ?></li>
                </ul>
           </div>
     </div> 

     <div id="content"> 
             <div id="title">
                 <p ><?php echo ($title); ?></p>
             </div>
              
            <div >
             <ul id="detail"><?php echo ($content); ?></ul>
            </div>
              
            <div id="cbutton">
                   <a href="http://localhost/GKiller/index.php/home/Comment"> <input id="button2"  type="submit" value="评论" class="btn btn-default" /></a>
                
                 <!--服务器上： <a href="/Gkiller/index.php/home/Comment">sssss</a> -->
            </div>
    </div>
    </div>

     <div class="load_comment">
            <div class="comment_header">
                <p id="test" >&nbsp&nbsp评论列表</p>
            </div>
            <!-- 将数据库中搜寻到的数据for循环输出，js追加列表ul，插入列表控件 -->
            <ul class="comment_list">   
                <?php echo ($comment_item); ?>
            </ul>
            <div class="comment_foot">
                    <p style="color:#aab3aa">你来写一句？</p>
            </div>
    </div>
    </div>
</body>
</html>