<?php
include('header.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h2>Preguntas Frecuentes</h2>
    <div class="container">
        <div class="row" id="example">
            <div class="accordion" id="accordionExample">

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        var template = `<div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Accordion Item #1
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well
                            as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                            though the transition does limit overflow.
                        </div>
                    </div>
                </div>`;

        // var data = [{
        //     pregunta: "Pegrunta",
        //     respuesta: `<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well
        //                     as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
        //                     though the transition does limit overflow.`
        // }, {
        //     pregunta: "Pegrunta",
        //     respuesta: `<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well
        //                     as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
        //                     though the transition does limit overflow.`
        // }, {
        //     pregunta: "Pegrunta",
        //     respuesta: `<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well
        //                     as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
        //                     though the transition does limit overflow.`
        // }]

        let accordionExample = document.getElementById('accordionExample');

        <?php
        include('db.php'); 
 
        $q = "SELECT id,pregunta,respuesta1,respuesta2 FROM pregunta";

        $response = $connection->query($q);

        if ($response->num_rows > 0) 
        {
            while($row = $response->fetch_assoc()) 
            {
                echo 'linea';
                // echo 'accordionExample.innerHTML += `<div class="accordion-item">
                //             <h2 class="accordion-header" id="headingOne${index}">
                //                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne${index}" aria-expanded="true" aria-controls="collapseOne${index}">
                //                 '.$row["pregunta"].'
                //                 </button>
                //             </h2>
                //             <div id="collapseOne${index}" class="accordion-collapse collapse" aria-labelledby="headingOne${index}" data-bs-parent="#accordionExample">
                //                 <div class="accordion-body">
                //                 '.$row["respuesta1"].'
                //                 </div>
                //             </div>
                //       </div>`';
            }
        }  
        ?>              
        // }
    </script>
</body>

</html>

<?php include('footer.php'); ?>