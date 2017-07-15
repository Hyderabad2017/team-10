<!DOCTYPE html>
 <head>
  <title> Scribe Registration</title>
   <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
           <link rel="stylesheet" type="text/css" href="main.css">
             <style>
               $yellow : #fcdab7;
               .jumbotron {
               margin-bottom: 0px;
               background-image: url(red-polygon.jpg);
               background-position: 0% 25%;
               background-size: cover;
               background-repeat: no-repeat;
               color: white;
               text-shadow: black 0.3em 0.3em 0.3em;
               }
               
             </style>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
   <div class="container">
     <div class="jumbotron">
       <h1>Scribe Registration</h1>
     </div>
     <br></br>
     <form action="upload.php" method="Post" enctype="multipart/form-data">
       <div class="col-sm-4">
         <input type="file" name="filetoupload"/>
         <br>
         <input type="submit" value="Upload"/>
         <br>
         <br>
       </div>
       <div class="col-sm-8">
         <div class="col-sm-4">
  <select name="Language">
  <option value="ENGLISH">ENGLISH</option>
  <option value="TELUGU">HINDI</option>
  <option value="ENGLISH">ENGLISH</option>
</select>
         
       </div>
         <div class="col-sm-8">
           <br>
             <div class="inputwrap">
         Name Of Scribe:<br>
         <input type="text" name ="name">   
             </div>
             <br>

               <div class="inputwrap">
           <!--time format, redo-->
          Location:<br>
          <input type="text" name ="location">
            
              </div>
             <br>

             <div class="inputwrap">
          Qualification:<br>
          <input type="text" name ="qualification">
            
              </div>
             <br>

             <div class="inputwrap">
			 
			 
         Contact no:<br>
         <input type="text" name ="contact">
           
           <br>
             </div>

             <div class="inputwrap"> 
         Email: <br>
         <input type="text" name ="email">
           
           </div>
           
       </div>
     </form>
   </div>
 </body>
</html> 