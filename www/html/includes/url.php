<?php 
function DisplayUrl() {

?>
<div class="tab-content">
           		<p><?php echo $status; ?></p>

            	<div class="tab-pane fade in active" id="basic">
            		<h4>URL To load on startup</h4>
					<form role="form" action="?page=url" method="POST">
					<div class="row">
						<div class="form-group col-md-4">
							<label for="code">Startup URL</label>
							<input type="text" class="form-control" name="url" value="<?php echo(file_get_contents("/home/pi/url.txt"));?>" />
						</div>
					</div>
					
		
				<input type="submit" class="btn btn-outline btn-primary" name="SaveURL" value="Save settings" />
           		        <input type="submit" class="btn btn-outline btn-primary" name="Reload" value="Re-Launch Chromium" />
				</form>
			</div><!-- /.tab-content -->
		</div><!-- /.panel-body -->
    </div><!-- /.panel-primary -->
</div><!-- /.col-lg-12 -->
</div><!-- /.row -->
<?php 

}


//function SaveUrl(){
  if( isset($_POST['SaveURL']) ) {
    $fp = fopen('/home/pi/url.txt', 'w');
    fwrite($fp, $_POST['url']);
    fclose($fp);
  } 
  if( isset($_POST['Reload']) ) {
    echo "Attempting to reload Chromium";
    exec( 'sudo killall chromium-browser', $return );

  } 
//}


?>
