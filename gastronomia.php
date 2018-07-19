<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gastronomiá</title>
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
        
        <div class="col-sm-12 col-md-12 ">
        <br>
            <div class="row">
            <div class="cold-md-2">
            <h5>Pesada de nance</h5>
              <img height="150px;" src="./public/images/Gastronomia/Patillos Tipicos/pesada de nnance.jpg">
            </div>
            <div class="col-md-4">
              <p> <b>Ingredientes </b></p>
              <ul>
                <li>2 tazas de nance (media botella más o menos)</li>
                <li>1 taza de harina (o maicena)</li>
                <li>2 tazas de azúcar morena </li>
                <li>
                4 tazas de agua (aproximadamente. Alguna de ellas se puede 
                sustituir por leche evaporada)
                </li>
                <li>Una pizca de sal</li>
                <li>Canela al gusto (opcional)</li>
                <li>
                Queso blanco molido, para servir. En Panamá se usa un queso 
                blanco nacional, muy rico. Es parecido al queso feta, aunque 
                su textura es distinta.
                </li>
              </ul>
            </div>

            <div class="col-md-6">
              <p class="texto">
                <b>Procedimiento</b>              

               
              </p>
                <ol>
                  <li>
                  Lavamos los nances y separamos la pulpa de la semilla y la piel del nance. 
                  </li>
                  <li>
                  Con las manos exprimimos los frutos para que pase la mayor cantidad de 
                  pulpa, luego añadimos un poco más de agua y volvemos a pasarla para 
                  aprovecharla al máximo. 
                  </li>
                  <li>
                  El jugo resultante es muy concentrado, probar para decidir si necesitaremos 
                  más o menos azúcar.
                  </li>
                  <li>
                  Añadir otra taza de agua, disolver en este jugo la harina o maicena y revolvemos
                  para que no queden 
                  </li>
                  <li>
                  Poner al fuego y revolver hasta que espese, añadir poco a poco el azúcar, una 
                  taza más de agua, la sal y la canela al gusto.
                  </li>
                  <li>
                  Seguir cocinando a fuego lento, revolviendo con frecuencia para que no se pegue 
                  hasta que alcance una textura similar a las natillas, unos 20 minutos.
                  </li>
                  <li>
                  Servimos en cuencos o copas individuales con un poco de queso blanco molido por encima.
                  La pesada de nance se puede tomar caliente o fría.
                  </li>

                </ol>
              <p> <b> !Que aproveche</b> </p>
            </div>
          
          </div>

            <a href="./gastronomia.php" class="btn btn-primary">volver</a>
            <a href="./gastronomia.php?id=2" class="btn btn-primary">siguiente receta</a>
  
          </div>
          
        </div>
          
        ');
   
        break;
      
      case 2:
        print('
        <br>
        <div class="col-sm-12 col-md-12 ">
        <br>
          <div class="row">
          <div class="cold-md-2">
          <h5>Arroz con pollo</h5>
          <img height="150px;" src="./public/images/Gastronomia/Patillos Tipicos/arrozconpollo.png">
        </div>
            <div class="col-md-4">
            <p> <b>Ingredientes </b></p>
              <ul>
                <li>2 tazas de arroz</li>
                <li>2 pechugas de pollo grandes</li>
                <li>1 cebolla</li>
                <li>1 rama grande de apio</li>
                <li>3 cucharadas de achiote (si no consigue puede utilizar otro colorante)</li>
                <li>
                1 frasco de alcaparrado (aceitunas y alcaparras)
                </li>
                <li>1 pasta de tomate chica</li>
                <li>5 ajís dulces grandes</li>
                <li>1 lata chica de guisantes verdes</li>
                <li>3 zanahorias medianas</li>
                <li>1 lata chica de pimientos morrones</li>
                <li>Sal, pimienta, ajo y culantro para preparar el pollo</li>

              </ul>
            </div>

            <div class="col-md-6">
              <p class="texto">
              <b>Procedimiento</b>
              <br>
              </p>
              <ol>
                <li>
                Preparamos el pollo con sal, pimienta, ajo, culantro, ají, 
                apio y cebolla. Lo llevamos a cocción hasta que esté en 
                su punto y retiramos para refrescar, reservamos el caldo.
                </li>
                <li>
                Cuando el pollo está fresco, se parte en trozos o se desmenuza 
                (no muy chico), luego se lleva nuevamente a cocción con la pasta 
                de tomate y el caldo que nos quedó del pollo.
                </li>
                <li>
                Sofreímos el arroz con el achiote (si no usa achiote, 
                usar aceite y agregar colorante al arroz).
                </li>
                <li>
                Se agrega el pollo con su salsa. Si hace falta un poco de agua, 
                la agregamos para que se cocine el arroz. Rectificamos la sal.
                </li>
                <li>
                Cuando el arroz seque, se le agregan las alcaparras con las aceitunas, 
                las zanahorias (previamente hervidas y troceadas pequeñas) y los guisantes verdes.
                </li>
                <li>
                Cuando el arroz esté listo se le agregan los pimientos morrones y mezclamos todo.
                </li>
              </ol>

              <p> <b> !Que aproveche</b></p>
            </div>
          
          </div>

            <a href="./gastronomia.php" class="btn btn-primary">volver</a>
            <a href="./gastronomia.php?id=3" class="btn btn-primary">siguiente receta</a>
  
          </div>
          
        </div>
          
        ');
   
        break;
      case 3:
        print('
        <br>
        <div class="col-sm-12 col-md-12 ">
        <br>
            <div class="row">
            <div class="cold-md-2">
            <h5>Sancocho</h5>
            <img height="150px;" src="./public/images/Gastronomia/Patillos Tipicos/sancocho.jpg">
          </div>
            <div class="col-md-4">
            <p class="texto">
            <b>Ingredientes</b>
            <br>
            </p>
              <ul>
                <li>Una gallina o un pollo entero picado en 8 presas</li>
                <li> ½ taza de cebolla picada</li>
                <li>	8 hojas de culantro picadas</li>
                <li> Sal al gusto</li>
                <li> 4 tazas de ñame cortadas en trozos mediano</li>
                <li> Orégano al gusto</li>
              </ul>
            </div>

            <div class="col-md-6">
            <p class="texto">
            <b>Procedimiento</b>
            <br>
            </p>
              <ol>
                <li>
                condimentar el pollo con sal, cebolla y culantro. Déjelo reposar 
                un ratito y luego lo coloca en una olla sopera a fuego medio y tapado, 
                para que sude. No le agregue ningún tipo de grasa o líquido, el pollo 
                va a soltar su jugo natural y se va a cocinar al vapor.
                </li>
                <li>
                Alrededor de 20 minutos después, destape y agregue agua hasta cubrir el 
                pollo. Lleve a hervor y baje la llama, y cocine a fuego muy lento para 
                que el caldo tome el sabor del pollo y del culantro, alrededor de unos 
                20 minutos más. Recuerde que nuestro sancocho se caracteriza por llevar 
                culantro, así que asegúrese de tenerlo a mano antes de empezar su preparación.
                </li>
                <li>
                transcurrido el tiempo, agregue el ñame. Ahora, aquí viene la diferencia 
                entre sancocho aguado y sancocho espeso, pues es el ñame el que le da la 
                textura, y si a usted, como a mí, le gusta que quede espesito, entonces 
                hay que esperar a que el ñame se desbarate.
                </li>
                <li>
                Continuamos cocinando la sopa a fuego bajo, hasta que adquiera la 
                consistencia deseada. Cuando ya está casi lista, le agregamos más 
                culantro y el orégano.
                </li>

              </ol>
              
            </div>
          
          </div>

            <a href="./gastronomia.php" class="btn btn-primary">volver</a>

  
          </div>
          
        </div>
          
        ');
   
        break;
      


      
      default:
        print('
        <div class="col-md-12 col-sm-12">
          <h1 align="center">Gastronomía</h1>
        </div>
        <div class="card col-sm-12 col-md-3" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images/Gastronomia/Patillos Tipicos/pesada de nnance.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Pesada de nance</h5>
            <p class="card-text">

            </p>
            <a href="./gastronomia.php?id=1" class="btn btn-primary">ver receta</a>
          </div>
        </div>

        <div class="card col-sm-12 col-md-3" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images/Gastronomia/Patillos Tipicos/arrozconpollo.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Arroz con pollo</h5>
            <p class="card-text">

            </p>
            <a href="./gastronomia.php?id=2" class="btn btn-primary">ver receta</a>
          </div>
        </div>

        <div class="card col-sm-12 col-md-3" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images/Gastronomia/Patillos Tipicos/sancocho.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Sancocho</h5>
            <p class="card-text">

            </p>
            <a href="./gastronomia.php?id=3" class="btn btn-primary">ver receta</a>
          </div>
        </div>

        
        ');
        break;
    }




 }
?>