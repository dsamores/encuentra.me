<?php

$page_title = "Home";

include_once('../header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Rescatados</span>
                </div>
                
                <div class="row" style="display: none;">
                    <div class="col-xs-12">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>
                </div>
                
                <ul class="list-group" id="contact-list">
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-2">
                            <img src="http://api.randomuser.me/portraits/women/36.jpg" alt="Rosemary Porter" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <span class="name">Veronica Moreno</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-3"><strong>Ubicacion:</strong> Sector La Carolina</div>
                        <div class="col-xs-12 col-sm-3"><strong>Contactarse al:</strong> 0999203456</div>
                        <div class="col-xs-12 col-sm-2">
	                        <div class="btn-group-vertical" role="group" aria-label="...">
							
							  <div class="btn-group" role="group">
							    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							      Es mi familiar
							      <span class="caret"></span>
							    </button>
							    <ul class="dropdown-menu">
							      <li><a href="#">Llamar al contacto</a></li>
							    </ul>
							  </div>
							</div>
                        	
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-2">
                            <img src="http://api.randomuser.me/portraits/men/99.jpg" alt="Rosemary Porter" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <span class="name">Pedro Perez</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-3"><strong>Ubicacion:</strong> Sector La Morita</div>
                        <div class="col-xs-12 col-sm-3"><strong>Contactarse al:</strong> 09992345456</div>
                        <div class="col-xs-12 col-sm-2">
	                        <div class="btn-group-vertical" role="group" aria-label="...">
							
							  <div class="btn-group" role="group">
							    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							      Es mi familiar
							      <span class="caret"></span>
							    </button>
							    <ul class="dropdown-menu">
							      <li><a href="#">Llamar al contacto</a></li>
							    </ul>
							  </div>
							</div>
                        	
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-2">
                            <img src="http://api.randomuser.me/portraits/men/97.jpg" alt="Rosemary Porter" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <span class="name">Juan Ponce</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-3"><strong>Ubicacion:</strong> Sector Cinco Esquinas</div>
                        <div class="col-xs-12 col-sm-3"><strong>Contactarse al:</strong> 0989203666</div>
                        <div class="col-xs-12 col-sm-2">
	                        <div class="btn-group-vertical" role="group" aria-label="...">
							
							  <div class="btn-group" role="group">
							    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							      Es mi familiar
							      <span class="caret"></span>
							    </button>
							    <ul class="dropdown-menu">
							      <li><a href="#">Llamar al contacto</a></li>
							    </ul>
							  </div>
							</div>
                        	
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
</div>


<?php

include_once('../footer.php');

?>