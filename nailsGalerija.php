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
            <img src="images/n5.png" data-thumb="images/n5.png" alt="" /> 
            <img src="images/n6.png" data-thumb="images/n6.png" alt="" />
            <img src="images/n7.png" data-thumb="images/n7.png" alt="" data-transition="slideInLeft" /> 
            <img src="images/n8.png" data-thumb="images/n8.png" alt=""  />
            <img src="images/n9.png" data-thumb="images/n9.png" alt="" />
        </div>
        
        </div>              

        </div>
        
        
    
    <br><br><br><br>
        <?php include_once "footer.php" ?>
        
    </div>
    
    <script type="text/javascript">
            $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
</body>
</html>