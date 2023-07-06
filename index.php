<?php
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
     integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" 
     crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>    
     <title>Document</title>
</head>
<body>
        <div class="contenitore-uno">
            <div class="container m-5">
               <div class="row  d-flex justify-content-center">
               <h1 class="text-center">toDoList</h1>
            </div>
               </div>
            </div>

            <div id="App">
                <div class="container m-5 ">
                <div class="row">
                    <div class="col-12">

                    </div>  
                    <ul class="list-group list-group-flush border-1 rounded">
                        <li v-for="(item, index) in toDoList" :key="index" class="list-group-item">{{item.text}}
                        </li>
                    </ul>
                </div>
                </div>

            </div>
        </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>