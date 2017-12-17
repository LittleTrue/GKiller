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
    <link href="http://localhost/GKiller/public/insert_comment.css" rel="stylesheet"  charset="utf-8">
    <script src="http://localhost/GKiller/public/insert_comment.js"></script> 
</head>

<body>
        <div class="container-top">
                <div class="header"> 
                        <a href="javascript:window.history.go(-1);self.opener.location.reload();" onclick="self.location=document.referrer;"><img src="http://localhost/GKiller/public/images/back.png" border="0" title="返回"></a>
                        
                        <img src="http://localhost/GKiller/public/images/logo.png" >
                </div>   
                <div class="nav">
                        <p> 
                            写回答
                        </p>
                </div>

                <form id="edit-form" class="edit-form" action="" method="post" onsubmit=""> 
                        <textarea id="edit-area" class="edit-area" > </textarea>

                        <div class="footer">
                            <input class="btn btn-default" type="Submit" name="btn1" value="提交评论">
                        </div>
                </form>
        </div>
</body>
</html>