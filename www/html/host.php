<?php
function pingAddress($ip) {
    $pingresult = exec("fping -t 100 -c 1 $ip", $outcome, $status);
    if (0 == $status) {
        $result = "Online";
	$threshold = "<100ms";
    } else {
	$pingresult = exec("fping -t 500 -c 2 $ip", $outcome, $status);
	if (0 == $status) {
	$result = "Lagging";
	$threshold = ">100ms";
	} else {
        $result = "Offline";
	$threshold = "Timed Out";
    	}
	}
    return array($result, $status, $outcome, $threshold);
}

$host = pingAddress($_GET['ip']);
?>
<div class="col-md-12">

            <?php
           if ($host[0] == "Online"){
               echo '
                            <div class="row inner ok">
                            <div class="col-md-2">
                            <span class="alert alert-success glyphicon glyphicon-ok"></span>';
                } else if ($host[0] == "Lagging") {
                    echo '
			     <div class="row inner ok">
                            <div class="col-md-2">
                            <span class="alert alert-warning glyphicon glyphicon glyphicon-flag"></span>';
		} else {
                    echo '
                            <div class="row inner error">
                            <div class="col-md-2">
                            <span class="alert alert-danger glyphicon glyphicon-remove"></span>';
		//exec('beep -f 475 -l 100 -r 20 > /dev/null &');
              }
            ?>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <h4><?php echo($_GET['name'] );?></h4> <?php echo($_GET['ip'] );?>
                    <p><strong><?php echo($host[0]." - ".$host[3]); ?></strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
