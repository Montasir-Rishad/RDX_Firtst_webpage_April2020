var flag = -1;


$(document).on("click",".sendcomment",function()
{
   var text = $(this).prev().val(); //comment

   var  elem = this;

  var postid = $(this).parent().parent().parent().attr('postid');
 
   
   $.ajax({    //create an ajax request to display.php
    type: "POST",
    url: "loadcomment.php", 
    data:{'comment':text,'author':"random_author",'post':postid},            
             
    success: function(data)
    {        
     $(elem).parent().parent().children('.showcomments').append(`
      <div class="comment_section"> 
          <div class="comment_author">Rishad:</div>
          <div class="comment_text">`+text+`</div>
          <div class="time">5h ago</div>
      </div>`);

      //alert("comment sent");
    

    },
    error: function(request, status, error) {
      alert("error");
    }

});

var stop = 0;


});







function sum (a,b)
{
  return a+b;


}

function div (a,b)
{
  var  b = 0;
  for(var i = 0 ;i<10;i++)
  {
  
   b= b+1;
  }


}


$( document ).ready(function() {

  //look

  div(1,2);

  var a =  3;
  var b = 5;

  var c = sum(a,b);
  c = c+2;

  
 
 var n = 4; // number of post 
    $.ajax({    //create an ajax request to display.php
        type: "POST",
        url: "getstatus.php", 
        data:{'numpost':n},            
                 
        success: function(data){                    
         
          data = JSON.parse(data);   
          var x = 0;
          var i = data.length-1;

          for(;i>=0;i--)
          {
            $('#posts').prepend(`
            <div postid="`+data[i][0]+`" class="postcontainer">
  
            <div class="rowx" >
      
             
             
             <button  type="button" class="btn btn-primary timebtn">
               Author <span class="badge badge-light clsr">`+data[i][1]+`</span>
              </button>
   
             <button  type="button" class="btn btn-primary timebtn">
               Time <span class="badge badge-light clsr">07-July-2020</span>
              </button>
   
        
   
   
            </div>
    
         
           <div class="post">`+data[i][2]+`</div>
           <div class="comments">
             <button class="watchcomments" >watch comments</button>
             <div class="showcomments">
            <!--comments here-->
             </div>
         <!--input type =text-->
     
        </div>
           </div>
     
             `);

          }
   



        },
        error: function(request, status, error) {
           // alert("error");
        }

    });



});




$(document).on("click","#upload",function()
{

  var author = $('#txtauthor').val();
   
  var text = $('#txtpost').val();



  if(author=="")
  author="anonymous";



    //
  



   $.ajax({    //create an ajax request to display.php
       type: "POST",
       url: "loadstatus.php", 
       data:{'rdxtext':text,'author':author},            
                
       success: function(data)
       {                   
          
          var date = new Date();
          date =date.toDateString();
          date = date.substring(4,date.length);
   


         $('#posts').prepend(`
        <div postid=`+data+` class="postcontainer">
      
        <div class="rowx" >
      
         
         
         <button  type="button" class="btn btn-primary timebtn">
           Author <span class="badge badge-light clsr">`+$("#txtauthor").val()+`</span>
          </button>
      
         <button  type="button" class="btn btn-primary timebtn">
           Time <span class="badge badge-light clsr">`+date+`</span>
          </button>
      
      
      
      
        </div>
      
      
       <div class="post">`+$('#txtpost').val()+`</div>
       <div class="comments">
         <button class="watchcomments" >watch comments</button>
         <div class="showcomments">
        <!--comments here-->
         </div>
      <!--input type =text-->
      
      </div>
       </div>
      
         `);  


       
       

       },
       error: function() 
       {
          alert("failed to load post");


       }

   });



});

$(document).on("click","#btnpost",function() {

   var text = $('#txtpost').val();
   var author  ="rishad";
   
   var d = new Date();


   $('body').prepend(`
   <!-- The Modal -->
  <div id="themodal" class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">--------Send message--------</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Author: <input id='txtauthor' type='text'>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button id="upload" type="button" class="btn btn-danger" data-dismiss="modal">Send</button>
        </div>
        
      </div>
    </div>
  </div>
   `);


   $('#themodal').modal('show');

   




 /*   $('#posts').prepend(`
   <div class="postcontainer">

   <div class="rowx" >

    
    
    <button  type="button" class="btn btn-primary timebtn">
      Author <span class="badge badge-light clsr">--------</span>
     </button>

    <button  type="button" class="btn btn-primary timebtn">
      Time <span class="badge badge-light clsr">07-July-2020</span>
     </button>




   </div>


  <div class="post">`+$('#txtpost').val()+`</div>
  <div class="comments">
    <button class="watchcomments" >watch comments</button>
    <div class="showcomments">
   <!--comments here-->
    </div>
<!--input type =text-->

</div>
  </div>

    `);
   



    $.ajax({    //create an ajax request to display.php
        type: "POST",
        url: "loadstatus.php", 
        data:{'rdxtext':text,'author':author},            
                 
        success: function(data){                    
           
        

        },
        error: function(request, status, error) {}

    }); */


});


$(document).on("click",".watchcomments",function() { 

//here
var flag  = $(this).parent().children(".showcomments").children().length;

if(flag==0)
{

  $.ajax({ 
    type: "POST",
    url: "getcomment.php", 
    data:{'nrcomments':10},            
             
    success: function(data)
    {         
      
    

    },
    error: function(request, status, error) {
      alert("error");
    }

});

    $(this).text("hide comments");

    $(this).next('.showcomments').append(`
    <div class="comment_section"> 
       <div class="comment_author">Anonymous :</div>
       <div class="comment_text">dummy comment</div>
       <div class="time">5h ago</time>
    </div>
   

    `);

    $(this).parent().append(`<div class='inputc'>
    <input class="textcomment"  type="text">
    <button class="sendcomment">send</button>
    </div>
    `);
    //$( ".comments" ).add( "input" ).addClass( "inputc" );
  var  stop = 0;
   
}

else
{
    
    $(this).text("watch comments");
    $(this).next('.showcomments').empty();
  //  $(this).next().next()
    $(this).parent().children().last().remove();

  
}


flag = -flag;



});

