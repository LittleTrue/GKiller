<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap4  -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src= "https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    
    <script src= "http://localhost/GKiller/public/get_list.js"></script>
</head>
<body>

<div class="" >
    <img src="http://localhost/GKiller/public/images/logo.png" width="30" height="30" style="margin: 2.5% auto 2.5% 2.5%" />
</div>
<div  class="container">
    <div class="form-group" >
        <form id="form_search"  method="post" onsubmit= "" role="form">
            <select id="select_school"  class="form-control">
                <option value="-1" selected="selected"></option>
                <?php if(is_array($arr1)): foreach($arr1 as $key=>$vo): ?><option value="<?php echo ($vo["school_id"]); ?>"><?php echo ($vo["school_name"]); ?></option><?php endforeach; endif; ?>
            </select>
            <select id="select_department" class="form-control" >
                <option value="-1" selected="selected"></option>
                <?php if(is_array($arr2)): foreach($arr2 as $key=>$vo): ?><option value="<?php echo ($vo["department_id"]); ?>"> <?php echo ($vo["department_name"]); ?> </option><?php endforeach; endif; ?>
            </select>
            
            <button id="bt_search"  type="submit" class="btn btn-default">查询</button>
        </form>
    </div>
</div>
<div id="document_list" class="container">
    <div class="list-group">
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">
                攻略标题
            </h4>
            <p class="list-group-item-text">
                <span>学校 </span><span> 科目</span><span> 时间</span>
            </p>
        </a>
    </div>

</div>
</body>
</html>