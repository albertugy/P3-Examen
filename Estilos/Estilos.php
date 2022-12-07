<?php
header("Content-Type: text/css; charset: UTF-8"); 
?>

*{
	margin: 0px;
	padding: 0px;
	font-family: century gothic;
	text-align: center;
}

form {
	padding: 50px 20px;
	background-color: #ededed;
	margin: calc(25% + 100px);
	margin-top: 40px;
	padding-top: 20px;
	margin-bottom: 30px
}

h1 {
	text-align: center;
	padding: 12px;
	color: black;
}

input {
	width: calc(100% - 20px);
	padding: 9px;
	margin: auto;
	margin-top: 12px;
	font-size: 16px
}

input[type='submit']{
	background-color: #48e;
	color: #fff;
	width: calc(80% - 20px);
	margin: 0 10%;
	margin-top: 22px;
	border: none;
}
hr{
	margin-left: 20%;
	margin-right: 20%;
	border: solid 3px;
	border-color: #03125c;
	border-radius: 10px;
}

table{
	margin-left: 2.5%;
	border: solid 1px;
	border-color: #03125c;
	width: 90%;
	background-color: #03125c;
	border-collapse: separate;
   	border-spacing: 3px;
	border-radius: 10px;
}
th, td {
	width: 18%;
	border: 1px solid ;
	border-color: #03125c;
	border-collapse: collapse; 
	background-color:#fff;
	border-radius: 10px;
}


caption {
	font-weight:bold;
	padding: 0.3em;
	color: #fff;
	background-color: #03125c;
	border-radius: 10px;
	font-size: 20px;
}
a{
	color: #072c52;
	font-size:20px;
	text-decoration: none;
}

a:hover{
	color: #ff6a19;	
}

.Subido{
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.Error{
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}