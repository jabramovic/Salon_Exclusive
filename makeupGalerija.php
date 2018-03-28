<!doctype_html>
<html>
<head>
    <?php include_once "head.php" ?>
</head>
<body>
    
    <?php include_once "header.php" ?>
    
    <div class="container">
      
        
        <?php include_once "logo.php" ?>
        <div class="slide">
      <div class="theme-default">
        <div id="slider" class="nivoSlider"> 
            <img src="images/m1.png" data-thumb="images/m1.png" alt="" /> 
            <img src="images/m2.png" data-thumb="images/m2.png" alt="" />
            <img src="images/m3.png" data-thumb="images/m3.png" alt="" data-transition="slideInLeft" /> 
            <img src="images/m4.png" data-thumb="images/m4.png" alt="" />
            
        </div>
        
        </div>              

        </div>
        
        <?php include_once "footer.php" ?>
    
    </div>
    <script type="text/javascript">
            $(window).load(function() {
            $('#slider').nivoSlider();
        });
</script>
</body>
</html>