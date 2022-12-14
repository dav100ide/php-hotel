<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php hotel</title>
   <!-- bootstrap css-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- /bootstrap css -->
</head>
<body>
   <div class="container">
      <form action="GET" class="my-3 fs-5">
         <label for="parking">filtra per parcheggio</label>
         <!-- select parcheggio -->
         <select name="parking" id="parking">
            <option value="true" selected>CON parcheggio</option>
            <option value="false">SENZA parcheggio</option>
         </select>
         <!-- /select parcheggio -->
         <!-- select voto -->
         <select name="vote" id="vote">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
         </select>
         <!-- /select voto -->
         <button class="btn btn-info" type="submit">submit</button>
      </form>    
      <?php 
         foreach ( $hotels as $hotel) {         
      ?>
         <table class="table-info table table-striped mb-5">
            <tr>
               <th>
                  <h3 class="text-decoration-underline">
                     <?php echo $hotel['name'] ?>
                  </h3>
               </th>
            </tr>
            <tr>
               <td>
                  <h4>
                     <?php echo $hotel['description'] ?>
                  </h4>
               </td>
            </tr>
            <tr>
               <td>
                  <strong>
                     parcheggio: 
                           <?php if( $hotel['parking'] ){
                              echo 'si';
                           } else{
                              echo 'no';
                           }
                           ?>
                  </strong>
                  <p class="fs-3">
                     <?php echo 'voto:'.$hotel['vote'] . ' distanza dal centro: ' . $hotel['distance_to_center'].'km' ?>
                  </p>
               </td>
            </tr>
         </table>
      <?php 
       }
      ?>
   </div>
   <!-- bootstrap js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <!-- /bootstrap js -->
</body>
</html>