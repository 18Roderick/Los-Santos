<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Personajes importantes</title>
</head>
<body>
<?php     include_once './header.php';  ?>

<div class="container-fluid">

  <div class="row justify-content-md-center">
    

    <br>


    <?php
     show();
    ?>

    
    <!-- fin del contenedor -->
  </div>

</div>


<?php     include_once './footer.php';   ?>

</body>
</html>


<?php
 function show(){
   $id = 0;
   if (isset($_REQUEST['id'])) {
     $id = $_REQUEST['id'];
   }
    switch ($id) {
      case 1:
        print('
        <div class="col-sm-12 col-md-8 etapas">
        <h4 target="#precolombina"><b>
        Belisario Porras Barahona
          
        </b></h4>
        <div class="row">
          <div class="col-md-8">
          <p class="texto" id="">
          (Las Tablas, 28 de noviembre de 1856 - Ciudad de Panamá, 28 de agosto de 1942)
          fue un abogado, escritor, poeta, profesor, diplomático, militar, político y
          periodista panameño. Escribió varias páginas de pensamiento político y literario. Fue 
          Presidente de Panamá durante tres periodos; (1912-1916, 1918-1920, 1920-1924).
          
          </p>
          </div>

          <div class="col-md-4">
            <img height="150px;" src="./public/images/Personalidades/Belisario Porras.jpg">
          </div>
        </div>

        

        <a href="./personajes.php" class="btn btn-primary">volver</a>
        <a href="./personajes.php?id=2" class="btn btn-primary">siguiente</a>
      </div>
          
        ');
        
        break;

      case 2:
        print('
        <div class="col-md-8 col-sm-12 etapas">
        <h4 ><b>
        Dorindo Cárdenas
        </b></h4>
          <div class="row">
            <div class="col-md-8">
            <p class="texto " id="">
            Nace un 14 de febrero de 1936 en la comunidad de Agua Buena, distrito y 
            provincia de Los Santos. . “El Premier de los Comendadores”, “El Maestro 
            de Maestros”, son algunos de los calificativos a su maestría artística, 
            que a través de 40 años ha recibido de su pueblo y el público amante de 
            la más genuina manifestación de nuestra música típica popular. 
             
            </p>
            </div>

            <div class="col-md-4">
              <img height="150px;" src="./public/images/Personalidades/dorindo cardenas.jpg">
            </div>
          </div>
  

        <a href="./personajes.php" class="btn btn-primary">volver</a>
        <a href="./personajes.php?id=3" class="btn btn-primary">siguiente</a>
      </div>
        ');

        break;
      
      case 3:
        print('
        
        <div class="col-md-8 col-sm-12  etapas">
        <h4 ><b>
        José Dimas Cedeño
        </b></h4>
        <div class="row">
        <div class="col-md-8">
        <p class="texto " id="">
        Arzobispo Emérito de la Arquidiócesis de Panamá 
        Su Excelencia Reverendísima Monseñor José Dimas 
        Cedeño Delgado, Arzobispo Metropolitano de Panamá. Nacido en Peña Blanca, 
        Las Tablas, Panamá el 23 de julio de 1933. Es Ordenado Sacerdote el 25 de 
        junio de 1961 en Panamá. Fue Consagrado Obispo de Santiago de Veraguas el 17 
        de mayo de 1975.
        
        </p>
        </div>

        <div class="col-md-4">
          <img height="150px;" src="./public/images/Personalidades/Jose dimas cedeño.jpg">
        </div>
      </div>
  


        <a href="./personajes.php" class="btn btn-primary">volver</a>
        <a href="./personajes.php?id=4" class="btn btn-primary">siguiente</a>
      </div>

        ');

        break;
      
      case 4:
        print('
        <div class="col-md-8 col-sm-12 etapas">

          <h4 ><b>
          Mireya Elisa Moscoso Rodríguez
          </b></h4>
          <div class="row">
          <div class="col-md-8">
          <p class="texto " id="">

          Fue la primera mujer en ejercer la Presidencia de la República de Panamá, 
          por el período constitucional del 1º de septiembre de 1999 hasta el 1º de 
          septiembre de 2004.
          <br>
          Nació el 1 de julio de 1946.


          </p>
          </div>

          <div class="col-md-4">
            <img height="150px;" src="./public/images/Personalidades/mireya moscoso.jpg">
          </div>
        </div>

          <a href="./personajes.php" class="btn btn-primary">volver</a>
          <a href="./personajes.php?id=5" class="btn btn-primary">siguiente</a>
      </div>
        ');    

        break;
      
    case 5:
        print('
        <div class="col-md-8 col-sm-12  etapas">

          <h4 ><b>
          Ulpiano Vergara
          </b></h4>
          <div class="row">
          <div class="col-md-8">
          <p class="texto " id="">

          Como lo conocen mejor sus fanáticos “El Mechiblanco” o “El León de San José” 
          nace en San José de Las Tablas, un 7 de Julio de 1948. Sus padres son Abraham 
          Vergara y Mercedes Díaz.  Es un gran exponente de la música típica de Panamá.

          </p>
          </div>

          <div class="col-md-4">
            <img height="150px;" src="./public/images/Personalidades/Ulpiano Vergara.jpg">
          </div>
        </div>


          <a href="./personajes.php" class="btn btn-primary">volver</a>
          <a href="./historia.php" class="btn btn-primary">volver a historia</a>
      </div>
        ');    

        break;
        
    default:
        print('
        
        <div class="col-md-12 col-sm-12">
          <h1 align="center">Personajes Importantes</h1>
        </div>
        
        <div class="card col-sm-12 col-md-2" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images/Personalidades/Belisario Porras.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Belisario Porras Barahona </h5>
            <p class="card-text">
  
            </p>
            <a href="./personajes.php?id=1" class="btn btn-primary">ver mas</a>
          </div>
        </div>

        <div class="card col-sm-12 col-md-2" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images/Personalidades/dorindo cardenas.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Dorindo Cárdenas</h5>
            <p class="card-text">

            </p>
            <a href="./personajes.php?id=2" class="btn btn-primary">ver mas</a>
          </div>
        </div>

        <div class="card col-sm-12 col-md-2" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images//Personalidades/Jose dimas cedeño.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">José Dimas Cedeño</h5>
            <p class="card-text">

            </p>
            <a href="./personajes.php?id=3" class="btn btn-primary">ver mas</a>
          </div>
        </div>

        <div class="card col-sm-12 col-md-2" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images/Personalidades/mireya moscoso.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Mireya Elisa Moscoso Rodríguez</h5>
            <p class="card-text">

            </p>
            <a href="./personajes.php?id=4" class="btn btn-primary">ver mas</a>
          </div>
        </div>

        
        <div class="card col-sm-12 col-md-2" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images/Personalidades/Ulpiano Vergara.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Ulpiano Vergara</h5>
            <p class="card-text">

            </p>
            <a href="./personajes.php?id=5" class="btn btn-primary">ver mas</a>
          </div>
        </div>
        
        ');
        break;
    }




 }
?>