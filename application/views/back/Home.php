<!-- Page php main 
Affichage dynamique a base de SQL -->


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="col">
                    <?
                    foreach($sta as $key => $ev) 
                    {
                        
                      echo'  <div class="col-xs-3">
                            <div class="panel panel-success">
                            <div class="panel-heading"><h2 class="text-center">'.$ev->getNom().'</h2> </div>
                            <a href="'.site_url(array("station", "view","test")).'">'.$ev->getNom().'</a>
                            <div class="panel-body">
                            
                            <div class="row">
                            <div class="col-xs-6 well col-xs-offset-3">
                                    <div class="container-fluid"> <img src="'.img_url($ev->getImage()).'" class="img-responsive" alt="Image de la station"> </div>
                                    </div>
                                    <div class="col-xs-12">
                                    test
                                    </div>
                            </div>
                            </div>
                        </div>
                        </div>';}
                        

                    ?> 
                    
                </div>
            </div>
        </div>
    </div>
</body> 
