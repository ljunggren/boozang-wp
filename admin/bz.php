<?php 
$projectId = $_GET['projectId'];

if ($projectId) {
?>
<!DOCTYPE html><script type='text/javascript' src='//api.boozang.com/ide?id=<?php echo $projectId ?>'></script>
<?php 
} else {
?>
<html><head></head><body>
<h5 id="enabling">Enabling Boozang test tool on your site</h5>
<p>These are the steps to take in order to get started testing on you Wordpress site</p>
<p>
<span>1.</span> Sign-up up for free <a target="_blank" href="https://boozang.com/">here</a><br />
<span>2.</span> Verify your email address to finalize account setup<br />
<span>3.</span> Access your account on <a target="_blank" href="//api.boozang.com">https://api.boozang.com</a><br />
<span>4.</span> Click &#8220;projects&#8221; link in your main account screen<br />
<span>5.</span> Add new project<br />
<span>6.</span> Copy the projectId key<br />
<span>7.</span> Goto Boozang plugin settings<br />
<span>8.</span> Add projectId key<br />
<span>9.</span> Save settings<br />
<span>10.</span> Refresh this page <br />
<span>11.</span> Enter login credentials if not already logged in<br />
<span>12.</span> Start testing your website using the Boozang tool</li>
</p>
</body></html>
<?php 
}
?>

