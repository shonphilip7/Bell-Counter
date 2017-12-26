  /**
  * @file JavaScript configurations 
  * @author Shon Philip
  * @version 1.0
  */
  
  $().ready(function(){
	//jQuery Validation  
    $("#timeForm").validate(); 
	//initialize form inputs
	$('#strTime').timepicker({
	  template: false,  
      showMeridian: false,
	  defaultTime: false
    });

    $('#endTime').timepicker({
	  template: false,
      showMeridian: false,
	  defaultTime: false
    })
	  
  })
  