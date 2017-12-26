	 
  <?php
  use Globalfit\Classes\Bells as Bells;
  use Globalfit\Classes\Input as Input;
  
  require_once 'core/init.php';

    if (Input::exists()) {
		$strTime = Input::get('strTime');
	    $endTime = Input::get('endTime');
		
		$bell  = new Bells();
        $bellCount = $bell::countBells($strTime, $endTime);
   ?>
    <div class="alert alert-info">
      <h4> Bell count = <?php echo $bellCount; ?></h4>
    </div>
  <?php		
	}
  ?>
  