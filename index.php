  
  <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Clock Tower Bell Counter</title>

        <!-- Bootstrap -->
        <link type="text/css" href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<!-- CSS -->
		<link type="text/css" href="_assets/css/style.css" rel="stylesheet" />

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body>
        <div class="container">
			
	      <div class="row">
		    <div class="col-sm-12">
		      <h1 class="text-center">Clock Tower Bell Counter</h1>
		    </div>
		  </div>
		  <div class="row">
		    <div class="col-sm-12">
			  <div class="col-sm-4">
			  </div>
			  <div class="col-sm-4">
			    <div class="row">
			      <div class="col-sm-12">
				    <!-- Input Form -->
                    <form id="timeForm" method="POST">
                      <div class="form-group bootstrap-timepicker timepicker">
				        <div class="row">
			              <div class="col-sm-12">
				            <label for="strTime">Start Time:</label>
                            <input id="strTime" type="text" class="form-control input-small" name="strTime" required />
				          </div>
				        </div>
				        <div class="row">
			              <div class="col-sm-12">
				            <label for="endTime">End Time:</label>
                            <input id="endTime" type="text" class="form-control input-small" name="endTime" required />
				          </div>
                        </div>				   
			          </div>
		              <div class="row">
			            <div class="col-sm-4">
                          <button type="submit" class="btn btn-primary">Calculate</button>
			            </div>
		              </div>
                    </form>
				  </div>
				  <!-- Result -->
                  <div class="row">
		            <div class="col-sm-12" id="message">
                    </div>			
		          </div>
			    </div>
			  </div>
			  <div class="col-sm-4">
			  </div>
			</div>
		  </div>
		  
		</div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="_assets/js/bootstrap.min.js"></script>
		
		<!-- Bootstrap Time Picker -->
        <script type="text/javascript" src="_assets/js/bootstrap-timepicker.min.js"></script>
		<!-- Validation -->
		<script src="_assets/js/jquery.validate.min.js"></script>
		<!-- Main js for the application -->
		<script src="_assets/js/main.js"></script>
		<!-- Handling Form Data -->
		<script>
        $('#timeForm').submit(function(e){
          e.preventDefault();
          $.ajax({
            url: 'process.php',
            type: 'POST',
            data: $(this).serialize(), 
            dataType: 'html'
          })
          .done(function(data){
            $('#message').fadeIn('slow').html(data);
          })
          .fail(function(){
            alert('Opps!! There was an issue ...'); 
          });
        });
        </script>
      </body>
  </html>
  