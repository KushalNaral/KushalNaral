<!DOCTYPE html>
<html>
<head></head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="E:\WICC\BlogPrototype\CSS\Toggle.css">


<style>

    body
    {
        font-family: helvetica;
        background-color: #BD93BD;

    }

    #form{

        margin-left: 430px;
    }


    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    #aaa{
        border-radius: 25px;
        background-color: #f2f2f2;
        padding: 20px;
    }


    /*Round Effect on toggle*/

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
    #blogpage{
        background-color: #F2EDEB;
    }
    #navbar{
        background-color: #BD93BD;
    }

    #submit{
        background-color: #925E78;
    }
    /*Till here*/
</style>



<body>
<div class="w3-container " style="height: 1300px">





        <div id="blogpage" class="w3-container ">
            <h1>This is the BLOG PAGE</h1>

            <!--menu-->

            <div id="navbar" class="w3-bar ">


                <a href="controller/dashboard.php" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-purple w3-hover-text-black w3-padding-16 " style="width:20%; font-size: 24px"><i class="fa fa-home"></i> </a>
                <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-purple w3-hover-text-black w3-padding-16" style="width:20%; font-size: 24px">1111</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-purple w3-hover-text-black w3-padding-16" style="width:20%; font-size: 24px">2222</a>

                <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-purple w3-hover-text-black w3-padding-16" style="width:20% ; font-size: 24px">3333</a>

                <a href="#" class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-purple w3-hover-text-black w3-padding-16" style="width:20% ; font-size: 24px">Link 3</a>
            </div>
        </div>




        <div>


            <div id="aaa" class="w3-container " style="width: 880px; height: 820px; margin-left: 600px; margin-top: 100px; font-size: 18px; color: black ">

                <form method="POST" action="blogs">

                    <div class="w3-container " style="width: 800px; height: 50px">


                        <br><br><br><br>

                        <label for="fname" style="margin-right: 100px">Blog Title</label>
                        <input type="text" id="fname" name="title" placeholder="Blog name..">
                        <br><br>

                        <label for="lname" style="margin-right: 67px">Author Name</label>
                        <input type="text" id="lname" name="name" placeholder="Your name..">
                        <br><br>

                        <label for="country" style="margin-right: 100px">Category</label>


                        <select id="country" name="category" style="width: 225px; height: 30px" >
                            <option value="Romance">Romance</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="Fiction">Fiction</option>
                        </select>
                        <br>
                        <br>
                        <label style="margin-right: 10px">Completed</label>
                        <label class="switch">
                            <input type="checkbox" name="status">
                            <span class="slider round"></span>
                        </label>


                        <br><br>
                        <label >Enter Blog Text</label>
                        <br><br>
                        <input type="text" style="width: 600px; height: 300px" placeholder="Enter text here.." name="text">
                        <br><br>
                        <input class="w3-hover-light-purple"  id="submit" type="submit" value="Submit" style=" width: 225px"><br>
                    </div>



                </form>



            </div>



        </div>


            <br><br><br>
    <div class="w3-container">

        <div class="w3-card w3-grey w3-dropdown-hover " style="width: 100%">


            </div>
            <br>
            <div class=" w3-dropdown-hover ">
                <div class="w3-button w3-white w3-hover-black" style="width: 400px">Check Posted Data in DB</div>
                <div class=" w3-dropdown-content w3-bar-block w3-border" style="width: 100%">

                    <ul>
                        <?php foreach($users as $user) : ?>
                            <li>
                                <?= $user->title ?>
                                <?= $user->name ?>
                                <?= $user->category ?>
                                <?= $user->status ?>
                                <?= $user->text ?>
                                <?= $user->text ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>


                </div>


            </div>

    </div>










</body>
</html>			