<?php echo 'This is PHP Text'?> <!-- PHP Process in Server -->
<br/><br/>


<p>This Text From HTML</p> <!-- PHP File Can Hold HTML -->

<h3 class="<?php echo 'php_class';?>"><?php echo 'This is PHP Code Inside HTML'; ?></h3> <!-- PHP Code in HTML -->
<br/>


<script type="text/javascript">
	document.write("This Text From JavaScript");
</script> <!-- PHP File Can Hold Javascript -->
<br/><br/>


<?php
	echo '<h2>This Is HTML Heading in PHP Code</h2>'; // HTML Code in PHP
	
	echo '<script> document.write("This Text From JavaScript"); </script>'; // JavaScript Code in PHP
?>