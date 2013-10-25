<style type="text/css">
.menu {
	-webkit-perspective: 100000;
	-moz-perspective: 100000;
	-o-perspective: 100000;
	-ms-perspective: 100000;
	perspective: 1200;
	display: block;
	width: 800px;	
	height: 65px;
	margin: 0 auto;
	list-style: none;
	padding: 0;
	padding: 0 0 0 30px;
	border-radius: 5px;
}

.menu li {
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	height: 5px;
	width: 140px;
	margin: 0 10px 0 0;
	float: left;
	position: relative;
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	-ms-transition: all 0.2s linear;
	transition: all 0.2s linear;
}

.menu li a {
	display: block;
	color: #fff;
	font-weight: bold;
	box-sizing: border-box;
	height: inherit;
	width: inherit;
	font-size: 1.0em;
	text-decoration: none;
	text-transform: uppercase;
	font-family: Arial, sans-serif;
}

.menu li a span {
	height: inherit;
	width: inherit;
	padding: 22px 0;
	text-align: center;
	position: absolute;
	left: 0;
	display: block;
}

.current {
	-webkit-transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 	
	-moz-transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 	
	-o-transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 	
	-ms-transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 	
	transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 	
}

.menu li a span:first-of-type {
	-webkit-transform: translateZ(74px);
	-moz-transform: translateZ(74px);
	-o-transform: translateZ(74px);
	-ms-transform: translateZ(74px);
	transform: translateZ(74px);
	background-color: #3e4649;
	box-shadow: inset 0px 0px 15px rgba(0,0,0,0.1);
}
	
.menu li a span:nth-of-type(2) {
	background: #fa623f;
	box-shadow: inset 0px 35px 30px -30px rgba(255,255,255,0.1);
	-webkit-transform: rotate3d(1,0,0,90deg) translateZ(32px) translateY(42px);
	-moz-transform: rotate3d(1,0,0,90deg) translateZ(32px) translateY(42px);
	-o-transform: rotate3d(1,0,0,90deg) translateZ(32px) translateY(42px);
	-ms-transform: rotate3d(1,0,0,90deg) translateZ(32px) translateY(42px);
	transform: rotate3d(1,0,0,90deg) translateZ(32px) translateY(42px);
}

.menu li a span:nth-of-type(3) {
	background: #f8876d;
	box-shadow: inset 0px 35px 30px -30px rgba(255,255,255,0.1);
	-webkit-transform: rotate3d(1,0,0,180deg) translateZ(-9px);
	-moz-transform: rotate3d(1,0,0,180deg) translateZ(-9px);
	-o-transform: rotate3d(1,0,0,180deg) translateZ(-9px);
	-ms-transform: rotate3d(1,0,0,180deg) translateZ(-9px);
	transform: rotate3d(1,0,0,180deg) translateZ(-9px);
}

.menu li a span:nth-of-type(4) {
	background: #3e4649;
	-webkit-transform: rotate3d(1,0,0,270deg) translateZ(33px) translateY(-42px);
	-moz-transform: rotate3d(1,0,0,270deg) translateZ(33px) translateY(-42px);
	-o-transform: rotate3d(1,0,0,270deg) translateZ(33px) translateY(-42px);
	-ms-transform: rotate3d(1,0,0,270deg) translateZ(33px) translateY(-42px);
	transform: rotate3d(1,0,0,270deg) translateZ(33px) translateY(-42px);
}
	
.menu > li:hover {
	-webkit-transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 
	-moz-transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 
	-o-transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 
	-ms-transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 
	transform: rotate3d(1,0,0,-90deg) translateZ(-20px); 
}

.menu > .current:hover {
	-webkit-transform: rotate3d(1,0,0,-180deg) translateY(-44px);
	-moz-transform: rotate3d(1,0,0,90deg) translateZ(-64px);
	-o-transform: rotate3d(1,0,0,-180deg) translateY(-44px);
	-ms-transform: rotate3d(1,0,0,-180deg) translateY(-44px);
	transform: rotate3d(1,0,0,-180deg) translateY(-44px);
}

.menu > .current span:nth-of-type(4), .menu > li:hover span:nth-of-type(4) {
	background: #fa623f;
}

.menu > .current:hover span:nth-of-type(4) {
	background: #f8876d;
}
.menu ul {
	opacity: 0;
	width: 100%;
	border-radius: 0;
	padding: 0;
}

.menu > li:hover ul {
	opacity: 1;
	height: auto;
	background: #fa623f;
	-webkit-transition: opacity 0.1s linear 0.3s;
	-moz-transition: opacity 0.1s linear 0.3s;
	-o-transition: opacity 0.1s linear 0.3s;
	-ms-transition: opacity 0.1s linear 0.3s;
	transition: opacity 0.1s linear 0.3s;
	-webkit-transform: rotate3d(1,0,0, 90deg) translateY(114px);
	-moz-transform: rotate3d(1,0,0, 90deg) translateY(115px);
	-o-transform: rotate3d(1,0,0, 90deg) translateY(114px);
	-ms-transform: rotate3d(1,0,0, 90deg) translateY(114px);
	transform: rotate3d(1,0,0, 90deg) translateY(114px);
	position: absolute;
	left: 0;
	top: 65px;
}

.menu > li ul {
	-webkit-transform: rotate3d(1,0,0, 90deg);	
	-moz-transform: rotate3d(1,0,0, 90deg);	
	-o-transform: rotate3d(1,0,0, 90deg);	
	-ms-transform: rotate3d(1,0,0, 90deg);	
	transform: rotate3d(1,0,0, 90deg);	
}
.menu > .current:hover ul {
	-webkit-transform: rotate3d(1,0,0, 180deg) translateY(145px);	
	-moz-transform: rotate3d(1,0,0, 270deg) translateY(31px);	
	-o-transform: rotate3d(1,0,0, 180deg) translateY(141px);	
	-ms-transform: rotate3d(1,0,0, 180deg) translateY(161px);	
	transform: rotate3d(1,0,0, 180deg) translateY(161px);	
	top: 35px;
	background: #f8876d;
}

.menu ul li {
	display: block;
	float: none;
	border-radius: 0;
	background: inherit;
	width: 170px;
	height: 40px;
}

.menu ul li a {
	box-sizing: border-box;
	padding: 8px 0 0 25px;
	background: inherit;
	width: inherit;
}

.menu ul li a:hover {
	background-color: #eb350b;
}

.menu ul .current a:hover {
	background-color: #ce5f45;
}
.menu .contact {
	width: 170px;
}

/* ========================== */
/* ========= IGNORE ========= */
/* ========================== */

#travel {
	padding: 10px;
	background: rgba(0,0,0,0.6);
	border-bottom: 2px solid rgba(0,0,0,0.2);
	font-variant: normal;
	text-decoration: none;
	margin-bottom: 50px;
}

#travel a {
	font-family: 'Georgia', serif;
	text-decoration: none;
	border-bottom: 1px solid #f9f9f9;
	color: #f9f9f9;
}

.header {
	font-family: Arial, sans-serif;
	text-align: center;
	margin-bottom: 60px;
}

.header h2 {
	font-size: 2em;
}
</style>


	