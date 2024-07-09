
  
    <style>
        .mytextArea{
            margin-bottom: 10px;
        }
        .div{
            display:flex;
        }
        .r1{
            display:flex;
            justify-content: center;
            margin-top:50px;
            -webkit-user-select: none; /* Safari */
                -ms-user-select: none; /* IE 10 and IE 11 */
            user-select: none; /* Standard syntax */      

    
        }
        label{
            -webkit-user-select: none; /* Safari */
                -ms-user-select: none; /* IE 10 and IE 11 */
            user-select: none; /* Standard syntax */ 
        }
        .th-w {
            min-width: 300px;
            background-color: red;

        }
        .t-width{
            width: 500px;
        }
    </style>


    <form method="post">
        <div class="container" method="post">
                <div class=" text-center mt-5 ">

                    <h1 >DECLARING VARIABLE TYPE IN PHP</h1>
                        
                    
                </div>

            
            <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
            
                    <div class = "container">
                                    <form id="contact-form" role="form">

                    

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Product Name *</label>
                                    <input id="form_name" type="text" name="txtProductName" class="form-control"  required="required" data-error="Firstname is required.">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Price $</label>
                                    <input id="form_lastname" type="text" name="txtPrice" class="form-control"  required="required" data-error="Lastname is required.">
                                                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Quanity *</label>
                                    <input id="form_email" type="text" name="txtQuanity" class="form-control"  required="required" data-error="Valid email is required.">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Choose Type *</label>
                                    <select id="form_need" name="ChooseType" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value="" selected disabled>Choose Your Type</option>
                                        <option >Good</option>
                                        <option >Bad</option>                                    
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Description *</label>
                                    <textarea id="form_message" name="txtDescription" class="form-control mytextArea" placeholder="Write your message here." rows="4" ></textarea
                                        >
                                </div>

                            </div>

                            
                            <div class="div" style="padding-bottom:10px;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">10%</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">20%</label>
                                </div>
                                <div class="form-check form-check-inline label1" >
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option3">
                                    <label class="form-check-label" for="inlineRadio2">30%</label>
                                </div>
                                
                            </div> 


                            <div class="col-md-12">
                                
                                <input type="Submit" class="btn btn-success btn-send  pt-2 btn-block" name="btnSubmit"  value="Submit"/>
                                   
                            
                            </div>
                
                        </div>



                        <div class="container r1">
                            <div>
                                <table class="table t-width">
                                <thead>
                                    <tr >
                                        <th scope="col th-w" width="150px">
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Details";

                                                }
                                            ?>
                                        </th>
                                        <th scope="col th-w" width="150px">
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Value";

                                                }
                                            ?>
                                        </th>
                                        <th scope="col th-w" width="150px">
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Return Data Type";

                                                }
                                            ?>
                                        </th>                                                     
                                    </tr>
                                    <tr >
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Product Name";

                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo $_POST['txtProductName'];

                                                }
                                            ?>
                                        </td><td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo gettype($_POST['txtProductName']);

                                                }
                                            ?>
                                        </td>                           
                                    </tr>
                                    <tr >
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Price";

                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){

                                                    echo (double) $_POST['txtPrice'];

                                                }
                                            ?>
                                        </td><td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo gettype((double) $_POST['txtPrice']);

                                                }
                                            ?>
                                        </td>                           
                                    </tr>
                                    <tr >
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Quanity";

                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo $_POST['txtQuanity'];

                                                }
                                            ?>
                                        </td><td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo gettype ((int) $_POST['txtQuanity']);

                                                }
                                            ?>
                                        </td>                           
                                    </tr>
                                    <tr >
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Type of Product";

                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){

                                                    $_POST['ChooseType']=true;
                                                    echo $_POST['ChooseType'];

                                                }
                                            ?>
                                        </td><td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo gettype($_POST['ChooseType']);

                                                }
                                            ?>
                                        </td>                           
                                    </tr>
                                    <tr >
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Message";

                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo $_POST['txtDescription'];

                                                }
                                            ?>
                                        </td><td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                   $diescription = $_POST['btnSubmit'];

                                                   echo gettype($diescription);

                                                }
                                            ?>
                                        </td>                           
                                    </tr>
                                    <tr >
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "Option Discount";

                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    echo "10/20/30";

                                                }
                                            ?>
                                        </td><td>
                                            <?php 
                                                if(isset ($_POST['btnSubmit'])){
                                                    $options = [
                                                        '1' => 'One',
                                                        '2' => 'Two',
                                                        '3' => 'Three',
                                                        '4' => 'Four'
                                                    ];

                                                    echo $options;

                                                }
                                            ?>
                                        </td>                           
                                    </tr>
                                    
                                </thead>
                                </table>
                                                

                            </div>
                        </div>
                        


                </div>
                </form>
                </div>
                    </div>


            </div>
                <!-- /.8 -->

            </div>
            <!-- /.row-->

        </div>
        </div>
    <form>
