<html>
<head>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding-top :20px;
	padding-bottom :15px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 15px;;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
img{
   
}

</style>
</head>
<body>
<div class="header">
  <a href="adminpage.php?value=0" class="logo">MediKit</a>
  <div class="header-right">
    <a class="active" href="index.php?value=0">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>




</body>

</html>

