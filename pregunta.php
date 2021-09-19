<?php
include('header.php');
?>

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
        // var template = `<div class="accordion-item">
        //             <h2 class="accordion-header" id="headingOne">
        //                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        //               Accordion Item #1
        //             </button>
        //             </h2>
        //             <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        //                 <div class="accordion-body">
        //                     <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well
        //                     as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
        //                     though the transition does limit overflow.
        //                 </div>
        //             </div>
        //         </div>`;

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

                $id         = $row["id"];
                $pregunta   = $row["pregunta"];
                $respuesta1 = $row["respuesta1"];
                $respuesta2 = $row["respuesta2"];

                // $accordion =  "accordionExample";

                $iden = $row["id"];
                $DOMdivitemNode   =  "DOMdivitemNode".$iden;
                $DOMh2Node   =  "DOMh2Node".$iden;
                $DOMdivNode  =  "DOMdivNode".$iden;   
                $DOMbutNode  =  "DOMbutNode".$iden;
                $DOMdiv2Node =  "DOMdiv2Node".$iden;


                echo "let $DOMbutNode = document.createElement('button');
                $DOMbutNode.className = 'accordion-button';
                $DOMbutNode.type = 'button';
                $DOMbutNode.setAttribute('data-bs-toggle','collapse');
                               
                $DOMbutNode.setAttribute('data-bs-target','#collapseOne$iden');
                $DOMbutNode.setAttribute('aria-expanded','false');
                $DOMbutNode.setAttribute('aria-controls','collapseOne$iden');
                $DOMbutNode.innerText = '$pregunta';

                let $DOMh2Node = document.createElement('h2');
                $DOMh2Node.className = 'accordion-header';
                $DOMh2Node.id='headingOne$iden';        
                
                $DOMh2Node.appendChild($DOMbutNode);
                
                let $DOMdiv2Node = document.createElement('div');
                $DOMdiv2Node.className='accordion-body';
                $DOMdiv2Node.innerText ='$respuesta1';

                let $DOMdivNode = document.createElement('div');
                $DOMdivNode.id='collapseOne$iden';
                $DOMdivNode.className='accordion-collapse collapse';
                $DOMdivNode.setAttribute('aria-labelledby','headingOne$iden');
                $DOMdivNode.setAttribute('data-bs-parent','#accordionExample');

                $DOMdivNode.appendChild($DOMdiv2Node);

                let $DOMdivitemNode = document.createElement('div');
                $DOMdivitemNode.className='accordion-item';

                $DOMdivitemNode.appendChild($DOMh2Node);
                $DOMdivitemNode.appendChild($DOMdivNode);
                
                accordionExample.appendChild($DOMdivitemNode);";
            }
        }  
 
        ?>              
        // }
    </script>

<?php include('footer.php'); ?>

 








