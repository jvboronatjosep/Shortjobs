.container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
  
  body {
    font-family: Helvetica, Arial, sans-serif; 
    background-color: white; 
    color: black; 
}
  
  .nav-link {
    font-size: 18px;
  }
    
  .carousel-image {
    height: 900px;
    object-fit: cover; 
  }
  
    .header-buttons {
    display: flex;
    align-items: center; 
    }
    
    .header-buttons a.btn {
    height: 50px; 
    display: flex;
    align-items: center; 
    justify-content: center;
    margin-right: 5px; 
    }

    .navbar {
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 10;
    }
    
    .carousel-inner {
      height: 100vh;
    }
    
    .carousel-item img {
      object-fit: cover;
      height: 1100px;
  }

  
  @font-face {
    font-family: Florida-font;
    src: url(NavineDemo-SemiCondensed.ttf);
}

body{
    margin: 0px;
    padding: 0px;
    background-image: url(Fondo.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    color: black;
    background-color: white;
}


/* Encabezado */



.logo{
    display: flex;
    align-items: center;
}


#enviar{
    font-family:Verdana,Helvetica;
    font-size:12pt;
    width: 500px;
    color:#696969;
    padding: 5px 7px 5px 7px;
    border:1px solid #0000FF;
    background:#FFF;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    border-radius: 15px;
}
.logo img{
    margin-left: 30px;
    height: 100px;
}

.nav-item {
  color: yellow;
}



/* Botones */


:root {
    --color: #d1cece;
    --font: Arial;
}



.wrapper {
    padding: 4rem 0;
    filter: url('#goo');
    margin-left: 43%;
}

.button {
    display: inline-block;
    text-align: center;
    background: var(--color);
    color: var(--bg);
    font-weight: bold;
    padding: 2.36em 2.64em 2.06em;
    line-height: 1;
    border-radius: 1em;
    position: relative;
    min-width: 8.23em;
    text-decoration: none;
    font-family: var(--font);
    font-size: 1.25rem;
}

.button:hover{
    color: #E22636;
    
}

.button:before,
.button:after {
    width: 4.4em;
    height: 2.95em;
    position: absolute;
    content: "";
    display: inline-block;
    background: var(--color);
    border-radius: 50%;
    transition: transform 1s ease;
    transform: scale(0);
    z-index: -1;
}

.button:before {
    top: -25%;
    left: 20%;
}

.button:after {
    bottom: -25%;
    right: 20%;
}

.button:hover:before,
.button:hover:after {
    transform: none;
}

#enviar:hover {
  background-color: lightblue;
  color: white;
}





/* PIE DE PAGINA */
.pie-pagina{
    width: 100%;
    background-color: black;
}

.pie-pagina .grupo-1{
    width: 100%;
    max-width: 4096px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 50px;
    padding: 45px 0px;
}

.pie-pagina .grupo-1 .Caja figure{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pie-pagina .grupo-1 .Caja figure img{
    width: 250px;
}

.pie-pagina .grupo-1 .Caja h2{
    color: white;
    margin-bottom: 25px;
    font-size: 20px;
    font-family: Florida-font;
}

.pie-pagina .grupo-1 .Caja p{
    color: white;
    margin-bottom: 10px;
    font-family: Florida-font;
}

.pie-pagina .grupo-1 .red-social a{
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: rgb(255, 255, 255);
    margin-right: 10px;
    background-color: rgb(53, 46, 46);
    text-align: center;
    transition: all 300ms ease;
    border-radius: 50px;
}

.pie-pagina .grupo-1 .red-social a:hover{
    color: #E22636;
}


.pie-pagina .grupo-2{
    background-color: white;
    padding: 15px 10px;
    text-align: center;
    color: black;
}

.pie-pagina .grupo-2 small{
    font-size: 15px;
}

.Caja{
    margin-left: 50px;
}

.Caja .Medio{
    margin-left: 100px;
}