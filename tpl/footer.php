<footer id="footer-wrap">
    <div class="container">
        &copy; <?=date('Y')?> <?=$_SERVER['HTTP_HOST']?>
    </div>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/jquery.browser.js"></script>
<?php
if(!empty($scripts) && is_array($scripts)){
    foreach($scripts as $script){
        echo '<script src="'.$script.'"></script>'."\n";
    }
}
?>

<?php
/*
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11111111-1', '<?=$_SERVER['HTTP_HOST']?>');
  ga('send', 'pageview');

</script>
*/
?>

</body>
</html>
