<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=0.5">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- Bootstrap 3 -->
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery-scrollto.js"></script>
        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
        <!-- end of Bootstrap 3 -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script type="text/javascript">

		var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

		function populatedropdown(dayfield, monthfield, yearfield){
		var today=new Date()
		var dayfield=document.getElementById(dayfield)
		var monthfield=document.getElementById(monthfield)
		var yearfield=document.getElementById(yearfield)
		for (var i=0; i<31; i++)
		dayfield.options[i]=new Option(i, i+1)
		dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
		for (var m=0; m<12; m++)
		monthfield.options[m]=new Option(monthtext[m], monthtext[m])
		monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
		var thisyear=today.getFullYear()
		for (var y=0; y<20; y++){
		yearfield.options[y]=new Option(thisyear, thisyear)
		thisyear-=1
		}
		yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
		}

		</script>
    </head>
    <!-- end of head -->
    <!-- start of body -->
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- start of inner -->



     <div class="container-fluid">
		<div class="row"><img src="img/banner.jpg" alt="Banner Image" class="img-responsive unselectable" draggable="false"></div>
     </div><!-- end of container-fluid -->

      <div class="container-fluid" id="form-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2 id="error"></h2>
					<form action="main/add_app" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name" class="col-sm-3 col-sm-offset-1">Name:</label>
							<div class="col-sm-7"><input required name="name" type="text" class="form-control"></div>
						</div>
						<div class="form-group">
							<label for="Dob" class="col-sm-3 col-sm-offset-1">Date Of Birth:</label>
							<div class="col-sm-2"><select  name="day" required class="form-control" id="daydropdown">
							</select> 
							</div>
							<div class="col-sm-2">
							<select class="form-control" name="month" required id="monthdropdown">
							</select>
							</div> 
							<div class="col-sm-2">
							<select class="form-control" name="year" required  id="yeardropdown">
							</select> 

							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-3 col-sm-offset-1">E-mail:</label>
							<div class="col-sm-7"><input name="email" required type="text" class="form-control"></div>
						</div>
						<div class="form-group">
							<label for="education" class="col-sm-3 col-sm-offset-1">Education Level:</label>
							<div class="col-sm-7"><select  name="study"required id="education" class="form-control">
							<option value="novalue"></option>
							<option value="master">Master</option>
							<option value="bachelor">Bachelor</option>
							<option value="highschool">high school</option>
							</select>
							</div>
						</div>
						<div class="form-group">
							<label for="uni" class="col-sm-3 col-sm-offset-1">University/College:</label>
							<div class="col-sm-7"><input required name="university" type="text" class="form-control"></div>
						</div>
						<div class="form-group">
							<label for="application" class="col-sm-3 col-sm-offset-1">Applying for:</label>
							<div class="col-sm-7"><select required id="job" name="job" class="form-control">
							<option value="novalue"></option>
							<option value="front end">Front End developer</option>
							<option value="back end">Back End developer</option>
							<option value="graphic designer">Graphic designer</option>
							<option value="web designer">Web designer</option>
							<option value="social media marketeer"> Social Media Marketeer</option>
							<option value="motion graphics">Motion Graphics Animator</option>
							<option value="sales">Sales</option>
							</select></div>
						</div>
						<div class="form-group">
							<label for="cv" class="col-sm-3 col-sm-offset-1">CV:</label>
							<div class="col-sm-7"><input name="cv" required type="file" style="color: white;" accept=".pdf"></div>
						</div>
						<div class="form-group">
							<label for="comments" class="col-sm-3 col-sm-offset-1">Comments:</label>
							<div class="col-sm-7">
							<textarea type="text" name="comment" class="form-control" rows="3"></textarea>
							</div>
						</div>
						   <div class="col-sm-4 col-sm-offset-4">
		                 <button type="submit" class="btn btn-default btn-lg btn-block">Submit</button>
		                  </div>
					</form>
				</div>
			</div>
		</div>
     </div><!-- end of container-fluid -->
    
     <!-- end of inner -->
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
		window.onload=function(){
		populatedropdown("daydropdown", "monthdropdown", "yeardropdown")
		}
		</script>
    </body>
    <!-- end of body -->
</html>
