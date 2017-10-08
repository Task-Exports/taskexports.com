
<!DOCTYPE html>
<html>
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107698580-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-107698580-2');
    </script>

	<title>TASK Exports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/texlogo.png" type="image/png" sizes="16x16 32x32"> 
	<link rel="stylesheet" type="text/css" media="(min-width: 720px)" href="css/styles.css">
	<link rel="stylesheet" type="text/css" media="(max-width: 720px)" href="css/mobilestyles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div id="tophack" style="visibility:hidden;">LOL</div>

    <button id="open" class="omenu" onclick="openNav()">&#9776;</button>
	<div id="kiloNav" class="knav">
			<a id="h" class="active">Top</a>
            <a id="p">Products</a>
            <a id="a">About</a>
            <a id="c">Contact</a>
	</div>

    
    <div class="head">
        <div class="headt">
            
        </div>
    </div>
    <div class="ban" id="banner">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <img class="logo" src="./assets/texlogo.png">
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12 title">
            <h1>Task Exports</h1>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 topnav" id="navg">
            <a id="ha" class="active">Top</a>
            <a id="pa">Products</a>
            <a id="aa">About</a>
            <a id="ca">Contact</a>
        </div>
    </div>
    <div class="dummy" id="dummy">
        <div class="dumd">
            <p><label>Task</label>&nbsp;your<br>Exports !</p>
        </div><br>
        <div class="dumd">
            <h3><i class="fa fa-clock-o" style="color:#0296FF;"></i>&nbsp;Prompt Delivery</h3>
            <h3><i class="fa fa-star" style="color:#0296FF;"></i>&nbsp;Quality Goods</h3>
            <h3><i class="fa fa-handshake-o" style="color:#0296FF;"></i>&nbsp;Customer Satisfaction</h3>
        </div>
    </div>
    <div class="produc row no-gutter" id="prod">
        <div class="pdisp col-md-6 col-sm-12 col-xs-12">
            <div class="fright" style="background-image: url('assets/prod1.jpg');">
                <div class="cen" data-toggle="modal" data-target="#prod1">
                    <label id="ptit">Coconuts</label><br>
                    <label id="inti">Click to know More</label>
                </div>
            </div>
            <div class="fright" style="background-image: url('assets/prod4.jpg');">
                <div class="cen" data-toggle="modal" data-target="#prod4">
                    <label id="ptit">Spices</label><br>
                    <label id="inti">Click to know More</label>
                </div>
            </div>

        </div>
        <div class="pdisp col-md-6 col-sm-12 col-xs-12">
            <div class="fright" style="background-image: url('assets/prod5.jpg');">
                <div class="cen" data-toggle="modal" data-target="#prod5">
                    <label id="ptit">Peanuts</label><br>
                    <label id="inti">Click to know More</label>
                </div>
            </div>
            <div class="fright" style="background-image: url('assets/prod3.jpg');">
                <div class="cen">
                    <label id="ptit">Jute</label><br>
                    <label id="inti">Click to know More</label>
                </div>
            </div>

        </div>
    </div>
    <div class="abt" id="about">
        <div class="abtc">
            <div class="abtb">
                <h2>About Us</h2>
                <p>We are an Upcoming Exports from India.</p>
            </div>
        </div>
    </div>
    <div class="cont" id="contact">
        <div class="ovl">
            <form class="cntfrm" method="POST" action="mailer.php">
                <input type="text" placeholder="Name" name="name" required autocomplete="on">
                <input type="email" placeholder="E-Mail" name="email" required autocomplete="on"><br>
                <input type="text" placeholder="Subject" name="subject" required><br>
                <textarea class="tarea" placeholder="Message" name="message" required></textarea><br>
                <?php echo $error; ?><br>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <div class="foot">
        <div class="ns">
            <div class="diso">
                <strong>TASK Exports</strong><br>
                H-4, 2nd Floor,<br>
                TNHB, Arakkonam,<br>
                Tamil Nadu, India<br>
                631003
            </div>
            <div class="diso">
                <strong><a href="mailto:info@taskexports.com">info@taskexports.com</a><br>
                <a href="tel:+919894807274">+91 98 94 807274</a></strong>
            </div>
            <div class="diso">
                &copy;<?php echo date('Y'); ?> Task Exports<br>
                Site Designed by: <strong><a href="https://therohith.com" target="_">Rohith</a></strong>
            </div>
        </div>
    </div>


<!--MODALS-->

    <div class="modal fade" id="prod1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Coconuts</h4>
                </div>
                <div class="modal-body">
                    <img src="assets/prod1.jpg" alt="Coconuts" width="40%">
                    <p>We export some of the finest quality Coconuts in India, in all its forms.
                            
                            <ul>
                                <li>Coconut</li>
                                <li>Coco Pith/Peat</li>
                                <li>Coconut Shell Charcoal</li>
                                <li>Dried Endosperm</li>
                                <li>Raw Coir</li>
                                <li>Copras</li>
                            </ul>

                        All of the above available in any modular quantity as per importer requirement.<br>
                        Packaging also done according to importer Requirement.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prod5" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Peanuts / Groundnuts</h4>
                </div>
                <div class="modal-body">
                    <img src="assets/prod5.jpg" alt="Coconuts" width="40%">
                    <p>We also export fine quality Peanuts/Groundnuts in India.
                            
                            <table width="100%" border="1" cellpadding="2" cellspacing="10" bgcolor="#CCCCCC">
        
                              <tr>
                                <td width="19%" bgcolor="#f2f2f2"><strong>Type:</strong></td>
                                <td width="81%" bgcolor="#FFFFFF">Bold/Java</td>
                              </tr>
                              <tr>
                                <td  bgcolor="#f2f2f2"><strong>Bold Counts per Ounce:</strong></td>
                                <td bgcolor="#FFFFFF">35/40, 38/42, 40/45, 45/50, 45/55, 50/60, 60/70, 70/80 </td>
                              </tr>
                              <tr>
                                <td  bgcolor="#f2f2f2"><strong>Java Counts per Ounce:</strong></td>
                                <td bgcolor="#FFFFFF">40/50, 45/55, 50/60, 60/70, 70/80, 80/90, 100/120, 120/140, 140/160, 160/180 </td>
                              </tr>
                              <tr>
                                <td  bgcolor="#f2f2f2"><strong>Red Skin Counts per Ounce:</strong></td>
                                <td bgcolor="#FFFFFF">70/80, 80/90<br />
                                  Groundnut kernels for oil crushing is also available</td>
                              </tr>
                              <tr>
                                <td  bgcolor="#f2f2f2"><strong>Moisture:</strong></td>
                                <td bgcolor="#FFFFFF">7% max OR 8% max (as per customer requirements)</td>
                              </tr>
                              <tr>
                                <td  bgcolor="#f2f2f2"><strong>Admixture:</strong></td>
                                <td bgcolor="#FFFFFF">1% max OR 0% max (as per customer requirements)</td>
                              </tr>
                              <tr>
                                <td  bgcolor="#f2f2f2"><strong>Foreign Material:</strong></td>
                                <td bgcolor="#FFFFFF">0.50% max OR 0.00% max (as per customer requirements)</td>
                              </tr>
                              <tr>
                                <td bgcolor="#f2f2f2"><strong>Oil content:</strong></td>
                                <td bgcolor="#FFFFFF">42% - 48% max</td>
                              </tr>
                              <!-- <tr>
                                <td  bgcolor="#f2f2f2"><strong>Aflatoxin:</strong></td>
                                <td bgcolor="#FFFFFF">- Aflatoxin negative
                                  <br />
                                  - 
                                  5 PPB (TLC method)              <br />
                                  - 
                                  10 PPB (HPLC/ELISA method with B1B2 contion)              <br />
                                  - 
                                  20 PPB (HPLC/ELISA method with B1B2 contion)              <br />
                                  -
                                  as per customer requirement</td>
                              </tr> -->
                              <tr>
                                <td  bgcolor="#f2f2f2"><strong>Packing:</strong></td>
                                <td bgcolor="#FFFFFF">- New Jute Bags of 50/25/20/10/9/8 Kgs Gross 
                                  <br />
                                  -
                                  One 20&quot; FCL can load 20 MTS or 400 Bags of 50 Kgs each</td>
                              </tr>

                            </table>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


</body>


<script>


var mq = window.matchMedia("(max-width: 720px)");

$("#a").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 500);
    if(mq.matches){
        document.getElementById('open').style.visibility = "visible";
        document.getElementById("kiloNav").style.width = "0";
    }
});
$("#h").click(function() {
    $('html, body').animate({
        scrollTop: $("#tophack").offset().top
    }, 500);
    if(mq.matches){
        document.getElementById('open').style.visibility = "visible";
        document.getElementById("kiloNav").style.width = "0";
    }
});
$("#c").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 500);
    if(mq.matches){
        document.getElementById('open').style.visibility = "visible";
        document.getElementById("kiloNav").style.width = "0";
    }
});
$("#p").click(function() {
    $('html, body').animate({
        scrollTop: $("#prod").offset().top
    }, 500);
    if(mq.matches){
        document.getElementById('open').style.visibility = "visible";
        document.getElementById("kiloNav").style.width = "0";
    }
});


	function openNav() {
		if (mq.matches) {
		    document.getElementById("kiloNav").style.width = "100%";
		    document.getElementById('open').style.visibility = "hidden";
    	}
	}


$('.topnav a').click(function(){
    $('.topnav a').removeClass('active');
    $(this).addClass('active');
})
$("#aa").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 500);
});
$("#ha").click(function() {
    $('html, body').animate({
        scrollTop: $("#tophack").offset().top
    }, 500);
});
$("#ca").click(function() {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 500);
});
$("#pa").click(function() {
    $('html, body').animate({
        scrollTop: $("#prod").offset().top
    }, 500);
});
</script>

</html>
