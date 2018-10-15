<?php
if(isset($_REQUEST['submit']))
{
	print_r($_REQUEST);exit;
}
?>
<!-- JQuery Multifile Upload -->
<script type="text/javascript" src="multifile.js"></script>
<script type="text/javascript">
<!-- Create an instance of the <strong class="highlight">multiSelector</strong> class, pass it the output target and the max number of files -->
	var multi_selector = new MultiSelector( document.getElementById( 'files_list' ),-1);
	<!-- Pass in the <strong class="highlight">file</strong> element -->
	multi_selector.addElement( document.getElementById( 'my_file_element' ) );
</script>  
<form name="frm" action="#" method="post">
<!--<input type="file" name="attachment[]" id="attachment" onchange="document.getElementById('moreUploadsLink').style.display = 'block';" />-->
<input id="my_file_element" type="file" name="file_1" accept="gif|jpg" />
<div id="moreUploads"></div>
<div id="moreUploadsLink" style="display:none;"><a href="javascript:addFileInput();">Attach another File</a></div>
<input type="submit" name="submit" value="Save" />
</form>
<div id="alert_msg" title="Basic dialog"></div>
 <script>
	<!-- Create an instance of the <strong class="highlight">multiSelector</strong> class, pass it the output target and the max number of files -->
	var multi_selector = new MultiSelector( document.getElementById( 'files_list' ), -1 );
	<!-- Pass in the <strong class="highlight">file</strong> element -->
	multi_selector.addElement( document.getElementById( 'my_file_element' ) );
</script>