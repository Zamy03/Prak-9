<?php
header("Countent-Type:application/zip");
header("Countent-Length:".filesize($file));
header("Countent-Disposition:attachment;filename=$file");
readfile($file);
?>