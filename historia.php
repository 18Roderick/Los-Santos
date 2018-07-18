<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Historia</title>
</head>
<body>

<?php     include_once './header.php';  ?>

<div class="container">
  <h1 align="center">Historia</h1>
  <div class="row ">
    

    <br><br>


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
        <div class="col-sm-12 col-md-12 etapas">
        <h4 target="#precolombina"><b>
        Época precolombina
          
        </b></h4>
  
        <p class="texto " id="precolombina">
          En esta región se encuentran los asentamientos humanos más antiguos del istmo de Panamá. A la llegada de los europeos,
         la región era regida por el cacique Antataura o Cutara, y era conocida como la Tierra del
          señor Parita, del ngäbe Bäri-ta que significa Confederación de Pueblos, 
          por tener bajo su dominio a otras seis provincias indígenas: Guararí, Quemá, 
          Chiracoitia, Hueré, Guanata y Usagaña. La única provincia que no estaba bajo 
          su dominio era la de Escoriá.
        </p>
      </div>
          
        ');
        print('<a href="./historia.php" class="btn btn-primary">volver</a>');
        break;

      case 2:
        print('
        <div class="col-sm-12 etapas">

        <h4 ><b>
          Época colonial
        </b></h4>
  
        <p class="texto " id="colonial">
        Gaspar de Espinosa, conquistador español
        Los primeros europeos en explorar la región fueron los españoles.
         En 1516 Pedrarias Dávila, gobernador de Castilla de Oro, envía a Gaspar 
         de Espinosa a conquistar las provincias bajo dominio de Parita. Espinosa 
         partió de Santa María la Antigua del Darién junto a los capitanes Diego Albites,
          Bartolomé Hurtado y Pablo Mejía y otros 200 soldados españoles, sometiendo 
          la región y exterminando gran parte de la población de la confederación de Parita.
        <br>
        En julio de 1519, Gaspar de Espinosa, en compañía del piloto Juan
         de Castañeda, organiza una segunda expedición a las tierras de Parita y 
         Escoriá. En esta ocasión Espinosa se encuentra con el funeral del 
         cacique Parita, quien falleció probablemente de muerte natural. Una vez
          consolidado el dominio éspañol, se funda Natá de los Caballeros. Es desde
         esta población que se inicia el repoblamiento de la península de Azuero,
          despoblada después de la conquista. Un grupo de colonos de Natá decidió
          erigir un núcleo poblacional a orillas del río Cubita, al que denominaron Los Santos,
           porque su fundación se realizó el 1 de noviembre de 1569, día de la fiesta de 
           Todos los Santos, celebración católica instituida en honor de todos los santos.
  
  
        </p>
      </div>
        ');
        print('<a href="./historia.php" class="btn btn-primary">volver</a>');
        break;
      
      case 3:
        print('
        
        <div class="col-sm-12 col-md-12 etapas">
        <h4 ><b>
          Época Republicana
        </b></h4>
  
        <p class="texto " id="republicana">
        Con la separación de Panamá de Colombia en 1903, la nueva república quedó 
        constituida por las provincias de Bocas del Toro, Coclé, Colón, Chiriquí,
        Los Santos, Panamá y Veraguas. La provincia de Los Santos ocupaba todo
        el territorio de la península de Azuero, hasta la división en dos
        provincias mediante la Ley número 55 del 30 de diciembre de 1914,
        en el primer gobierno del presidente Belisario Porras.
        <br>
        <br>
        En la constitución política de 1941, el presidente Arnulfo Arias 
        suprimió la provincia de Herrera y su territorio quedaría sujeto a 
        la provincia de Los Santos, con capital en Chitré. Esta provincia,
        además de la provincia de Herrera, incluía la totalidad del territorio
        de Quebro (actuales corregimientos de Mariato, Quebro y Arenas),
        así como la totalidad del corregimiento de Ponuga, el sur del 
        corregimiento de la Colorada y el corregimiento de El Barrito.
        <br>
        <br>
        La actual provincia de Los santos se constituyó mediante el decreto N° 13 
        del 8 de enero de 1945. Se restituyó la extinta provincia de Herrera
        a la geografía nacional, así como los distritos suprimidos. 
        Con la creación de la nueva provincia, Azuero quedó constituida
        nuevamente en dos provincias, similar a la división política de 
        los años 1914 y en 1915, perdiendo el territorio occidental de la 
        provincia que pasó a formar parte de la provincia de Veraguas. 
        Chitré fue declarada cabecera de Herrera, y Las Tablas como cabecera
        de Los Santos. La provincia de Los Santos se reglamenta en su régimen 
        territorial, en virtud del Capítulo II de la Ley 58 de 29 de julio de 
        1998 publicado en la gaceta oficial N°23,602 del jueves 6 de agosto de 1998.
        </p>
      </div>

        ');
        print('<a href="./historia.php" class="btn btn-primary">volver</a>');
        break;
      
      case 4:
      print('
      <div class="col-sm-12 etapas">

      <h4 ><b>
      Independencia
      </b></h4>

      <p class="texto " id="colonial">

        <br>
        En 1821, la Villa de Los Santos se distinguió por sus esfuerzos a favor de 
        la independencia de Panamá de España. El 10 de noviembre el pueblo se amotinó,
        y el Cabildo declaró su resolución de no continuar más bajo el poder español. 
        Este suceso se conoce con el nombre de El Grito de Los Santos. Con la indepen­dencia 
        de Panamá y su posterior adhesión a la Gran Colombia, la jurisdicción adminis­trativa 
        de la provincia se dividió en las provincias de Veraguas y Panamá.
        <br>
        Tras la disolución de la Gran Colombia, surgieron dos nuevos países
        denominados Estado de Venezuela y Estado del Ecuador. Las provincias
        que ocupaban la parte central de la desintegrada Gran Colombia,
        que en ese entonces comprendía los antiguos departamentos de Boyacá,
        Cauca, Cundinamarca, Magdalena e Istmo (Panamá) decidieron formar 
        un nuevo Estado, denominado República de la Nueva Granada. En 1855, 
        Panamá, pasó a convertirse en Estado Federal de Panamá, 
        constituido por las provincias de Panamá, Azuero, Veraguas y Chiriquí.
         A través de la Ley de 12 de septiembre de 1855, se instauró el departamento 
         de Los Santos.

      </p>
    </div>
      ');
        
        print('<a href="./historia.php" class="btn btn-primary">volver</a>');
        break;
      
      default:
        print('
        
        <div class="card col-sm-12 col-md-3" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="./public/images/cimarron3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Época precolombina</h5>
            <p class="card-text">
             En esta región se encuentran los asentamientos
             humanos más antiguos del istmo de Panamá. A la llegada de los europeos,
            la región era regida por...
            </p>
            <a href="./historia.php?id=1" class="btn btn-primary">ver mas</a>
          </div>
        </div>

        <div class="card col-sm-12 col-md-3" style="width: 18rem;">
        <img class="card-img-top" height="150px" src=".../100px180/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Época colonial</h5>
            <p class="card-text">
            Gaspar de Espinosa, conquistador español
            Los primeros europeos en explorar la región fueron los españoles.
             En 1516 Pedrarias Dávila...
            </p>
            <a href="./historia.php?id=2" class="btn btn-primary">ver mas</a>
          </div>
        </div>

        <div class="card col-sm-12 col-md-3" style="width: 18rem;">
        <img class="card-img-top" height="150px" src=".../100px180/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Época Republicana</h5>
            <p class="card-text">
            Con la separación de Panamá de Colombia en 1903, la nueva república quedó 
            constituida por las provincias de Bocas del Toro, Coclé, Colón, ...
            </p>
            <a href="./historia.php?id=3" class="btn btn-primary">ver mas</a>
          </div>
        </div>

        <div class="card col-sm-12 col-md-3" style="width: 18rem;">
        <img class="card-img-top" height="150px" src=".../100px180/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Independencia</h5>
            <p class="card-text">En 1821, la Villa de Los Santos se distinguió 
            por sus esfuerzos a favor de la independencia de Panamá de España..
            </p>
            <a href="./historia.php?id=4" class="btn btn-primary">ver mas</a>
          </div>
        </div>
        
        ');
        break;
    }




 }
?>