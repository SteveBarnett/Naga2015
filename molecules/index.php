<?php
$directory = '.';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
?>
<ul>
<?php
foreach ($scanned_directory as $key => $value) {
  echo '<li><a href="' . $value . '">' . $value . '</a></li>';
}
?>
</ul>
