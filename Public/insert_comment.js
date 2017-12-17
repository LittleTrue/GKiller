

$(document).ready(function(){
      $("#edit-form").submit(function(e){
           e.preventDefault();
           var inputs = $("#edit-area").val();
       
          if(!inputs||inputs=="")
          {alert("不能为空");}
          else if(inputs.length>150)
          {alert("字数不能超过150");}
          $.post("/Gkiller/index.php/home/Comment/insert",
              {       
                      inputs:inputs
              },
              function(data,status){
                  if(status=="success"){
                      var content = data.content;
                      if(data.status!=0){
                       alert(data.content);
                      }else{  
                       alert(data.content);
                       window.history.go(-1);
                       self.opener.location.reload();
                      }
                  }
              });
      });
  });

