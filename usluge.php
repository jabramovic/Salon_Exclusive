<!doctype_html>
<html>
<head>
    <?php include_once "head.php" ?>
</head>
<body>
    
    <?php include_once "header.php" ?>
    
    <div class="container">
      
        
        <?php include_once "logo.php" ?>
        
        <div class="content">
            
            <div class="services">
            
                <div class="nokti">
                    <img src="images/nail-polish.svg" height="70" width="70">
                    <p>Manikura</p>
                    <ul class="close" >
                        <li>Prirodni nokti</li>
                        <li>Umjetni nokti</li>
                        <li>Parafinska kupka</li>
                        <li>Trajni lak</li>
                    </ul>
                </div>
                <div class="sminka">
            <img src="images/lipstick.svg" height="70" width="70">
                    <p>Šminkanje</p>
                    <ul class="close" >
                        <li>Dnevno šminkanje</li>
                        <li>Šminkanje za posebne prilike</li>
                        
                    </ul>
                    </div>
                    <div class="lashes">
            <img src="images/eye-make-up.svg" height="70" width="70">
                        <p>Obrve i trepavice</p>
                        <ul class="close" >
                        <li>Korekcija obrva</li>
                        <li>Bojanje obrva</li>
                        <li>Umjetne trepavice</li>
                        <li>Lash-lift</li>
                        
                    </ul>
                    </div>
                    <div class="pedikura">
            <img src="images/flowers-on-human-feet.svg" height="70" width="70">
                        <p>Pedikura</p>
                        <ul class="close" >
                        <li>Struganje odumrle kože</li>
                        <li>Lakiranje</li>
                        <li>Peeling i njega stopala</li>
                        
                    </ul>
                        </div>
                        <div class="face">
            <img src="images/mask.svg" height="70" width="70">
                            <p>Njega lica</p>
                            <ul class="close" >
                        <li>Dermoabrazija</li>
                        <li>Mezoterapija</li>
                        <li>Ultrazvuk</li>
                        
                    </ul>
                        </div>
                     <div class="wax">
                    <img src="images/wax.svg" height="70" width="70">
                    <p class="click">Depilacija</p>
                         <ul class="close">
                        <li>Hladni i topli vosak</li>
                        <li>Depilacija šećernom pastom</li>
                        <li></li>
                        
                    </ul>
                </div>
            </div>
             
            </div>
        <?php include_once "footer.php" ?>
        
    </div>
    
   
    
    
    <script>
        
         $(document).ready(function(){
            
            $("p").click(function(){
                $('.close').hide();
                $(this).next("ul").toggle("slow");
            })
            
         })
    
        
        
    </script>
</body>
</html>