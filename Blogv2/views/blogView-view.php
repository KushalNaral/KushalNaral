<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>






  </head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="E:\WICC\BlogPrototype\CSS\Toggle.css">


  <style>

    body{
        font-family: helvetica;
        background-color: #BD93BD;

    }

    #cont{

        background-color: #BD93BD;
    }
    #blogtitle{
        background-color: #F2EDEB;
    }
    #BLO{
        background-color: #BD93BD;
    }
    #bodypart{
        background-color: #F2EDEB;
    }
    #bloaa{
        background-color: #F2EDEB;
    }
  </style>





  <body>



  <div id="cont" class="w3-container  " style="height: 300px; ">



    <div class="w3-container w3-center " style="margin-top: 300px; height: 5000px">
            <div id="blogtitle" class="w3-container " >
                <h2>Here are your Blogs</h2>
            </div>

            <div  id="BLO" class=" w3-card " style="margin-left: 350px; margin-right: 350px; height: 1000px">
                <h1>BLOGS</h1>

                <div id="bodypart" class="w3-card "   >

                   <br>
                   <br>
                   <br>
                   <br>
                    <ul>
                        <?php foreach($users as $user) : ?>
                           <!-- <li>
                                <?/*= $user->title */?>
                                <?/*= $user->name */?>
                                <?/*= $user->category */?>
                                <?/*= $user->status */?>
                                <?/*= $user->text */?>
                                <?/*= $user->text */?>
                            </li>-->

                            <div class="w3-container w3-center" >


                                <div class="w3-card-4" style="margin-left: 80px; margin-right: 100px" >
                                    <header id="bloaa" class="w3-container ">
                                        <h1><?= $user->title ?> </h1>
                                    </header>
                                    <div class="w3-container">
                                        <p>By <?= $user->name ?></p>
                                        <hr>

                                        <pre><?= $user->text  ?></pre><br>
                                    </div>
                                    <div class="w3-row">

                                        <div class="w3-button w3-round-xlarge w3-white w3-hover-black">
                                            <h5>Category:<?= $user->category ?></h5>
                                        </div>


                                        <div class="w3-button w3-round-xlarge w3-white w3-hover-black">
                                            <div class="w3-third w3-center">
                                                <h5>Status:  <?php
                                                    if($user->status === 'on')

                                                        echo "Completed";
                                                    else
                                                    {
                                                        echo "Not Completed";
                                                    }?>
                                                </h5>

                                            </div>

                                        </div>

                                        <div class="w3-button w3-round-xlarge w3-white w3-hover-red">
                                            <h5>DELETE</h5>

                                        </div>
                                        <br><br><br>


                                    </div>

                                </div>




                            </div>








                    <br><br><br><br><br>
                        <?php endforeach; ?>
                    </ul>

                </div>


            </div>

    </div>
  </div>
















  </body>
</html>
