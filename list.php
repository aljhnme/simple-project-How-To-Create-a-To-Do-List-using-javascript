<!DOCTYPE html>
<html>
<head>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="container">
 	<div class="row">
 	  <div class="col-md-6">
 	  	<div class="todolist not-done">
 	  		<h1>Todos</h1>
 	  		<input type="text" class="form-control add-todo" id="val_text" placeholder="Add todo">
 	  		<button id="add_todo" class="btn btn-success">Add</button>

 	  		<hr>
 	  		<ul class="list-unstyled" id="newtodo">
 	  			
 	  		</ul>

 	  	</div>
 	  </div>
 	</div>
 </div>
</body>
<script>
 document.getElementById('add_todo').addEventListener('click',add_todo_);

 function add_todo_()
 {
   var li=document.createElement('li');
   var div=document.createElement('div');
   var label=document.createElement('label');
   var button=document.createElement('button');
   var span=document.createElement('span');
   var input=document.createElement('input');

   input.type="checkbox";
   div.className="checkbox";
   li.className="ui-state-default";
   button.className="remove-item btn btn-default btn-xs pull-right";
   span.className="glyphicon glyphicon-remove";


   li.appendChild(div);
   div.appendChild(label);
   div.appendChild(button);
   button.appendChild(span);
   label.appendChild(input);

   var text_input=document.getElementById('val_text').value;
   label.appendChild(document.createTextNode(text_input));

   if (text_input !=  "") 
   {
    document.getElementById('newtodo').appendChild(li);
   }else{
    alert('please add to do');
   }
   
   document.getElementById('val_text').value="";

 }
</script>

<script type="text/javascript">
	//jquery_______
	$(document).ready(function(){
       $(".remove-item").live('click',function(){
         
         var index=$(".remove-item").index(this);
         $(".ui-state-default:eq("+index+")").remove();

       });
	});
</script>
</html>