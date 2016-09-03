<?php

$page_title = "Home";

include_once('../header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="../assets/img/perfil.jpeg" alt="" class="img-rounded img-responsive"/>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h4>
                            David Amores</h4>
                        <small><cite title="San Francisco, USA">La Gasca N23-12 <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>david@gmail.com
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Mayo 31, 1989</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Agregar </button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Familia</a></li>
                                <li><a href="#">Amigos</a></li>
                                <li class="divider"></li>
                                <li><a href="lugares.php">Lugares frecuentes</a></li>
                                <li><a href="seguros.php">Lugares seguros</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <img src="../assets/img/badge1.PNG" alt="Explorador" height="40" class="img-rounded"/>
                        <img src="../assets/img/badge2.png" alt="Explorador" height="40" class="img-rounded"/>
                        <img src="../assets/img/badge3.png" alt="Explorador" height="40" class="img-rounded"/>
                        <button type="button" class="btn btn-success" style="margin-top:68px;">
							  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="glyphicon-class">Estoy bien</span>
							  </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Familiares</span>
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
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://api.randomuser.me/portraits/women/34.jpg" alt="Rosemary Porter" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <span class="name">Nathy Amores</span><br/>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5267 Cackson St"></span>
                            <span class="text-muted">Ladron de Guevara S22</span><br/>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(497) 160-9776"></span>
                            <span class="text-muted">(593) 9160-9776</span><br/>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="rosemary.porter@example.com"></span>
                            <span class="text-muted">nathy@gmail.com</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-4">
	                        <div class="btn-group-vertical" role="group" aria-label="...">
							  <button type="button" class="btn btn-default">
							  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="glyphicon-class">OK</span>
							  </button>
							  <a href="/em_app/social/reportar.php">
							  <button type="button" class="btn btn-default">
							  Desaparecido
							  </button>
							  </a>
							</div>
                        	
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://api.randomuser.me/portraits/women/56.jpg" alt="Debbie Schmidt" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <span class="name">Debbie Schmidt</span><br/>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="3903 W Alexander Rd"></span>
                            <span class="text-muted">3903 W Alexander Rd</span><br/>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(867) 322-1852"></span>
                            <span class="text-muted">(867) 322-1852</span><br/>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="debbie.schmidt@example.com"></span>
                            <span class="text-muted">debbie.schmidt@example.com</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-4">
	                        <div class="btn-group-vertical" role="group" aria-label="...">
							  <button type="button" class="btn btn-success">
							  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="glyphicon-class">OK</span>
							  </button>
							  	<button type="button" class="btn .disabled">
							  Desaparecido
							  </button>
							</div>
                        	
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://api.randomuser.me/portraits/women/76.jpg" alt="Glenda Patterson" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <span class="name">Glenda Patterson</span><br/>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5020 Poplar Dr"></span>
                            <span class="text-muted">5020 Poplar Dr</span><br/>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(538) 718-7548"></span>
                            <span class="text-muted">(538) 718-7548</span><br/>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="glenda.patterson@example.com"></span>
                            <span class="text-muted">glenda.patterson@example.com</span><br/>
                        </div>
                        <div class="col-xs-12 col-sm-4">
	                        <div class="btn-group-vertical" role="group" aria-label="...">
							  <button type="button" class="btn btn-default">
							  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="glyphicon-class">OK</span>
							  </button>
							
							  <button type="button" class="btn btn-default">
							  Desaparecido
							  </button>
							</div>
                        	
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Amigos</span>
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
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Scott Stevens</span><br/>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5842 Hillcrest Rd"></span>
                            <span class="text-muted">5842 Hillcrest Rd</span><br/>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(870) 288-4149"></span>
                            <span class="text-muted">(870) 288-4149</span><br/>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="scott.stevens@example.com"></span>
                            <span class="text-muted">scott.stevens@example.com</span><br/>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://api.randomuser.me/portraits/men/97.jpg" alt="Seth Frazier" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Seth Frazier</span><br/>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="7396 E North St"></span>
                            <span class="text-muted">7396 E North St</span><br/>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(560) 180-4143"></span>
                            <span class="text-muted">(560) 180-4143</span><br/>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="seth.frazier@example.com"></span>
                            <span class="text-muted">seth.frazier@example.com</span><br/>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://api.randomuser.me/portraits/women/90.jpg" alt="Jean Myers" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Jean Myers</span><br/>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="4949 W Dallas St"></span>
                            <span class="text-muted">4949 W Dallas St</span><br/>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(477) 792-2822"></span>
                            <span class="text-muted">(477) 792-2822</span><br/>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="jean.myers@example.com"></span>
                            <span class="text-muted">jean.myers@example.com</span><br/>
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