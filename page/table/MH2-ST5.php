
  
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
        <div class="container" method="post" style="padding-top:30px;">
                            
            <div class="row" >
                <div class="col-lg-7 mx-auto" >
                    <div class="card mt-2 mx-auto p-4 bg-light" >
                        <div class="card-body bg-light">
                
                        <div class = "container" >             

                        

                        <div class="controls">
                            <label for="form_name" style="padding-bottom:30px; font-weight: 500; font-size: 20px;">1 Calulator program using operetors</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">First Number</label>
                                        <input id="form_name" type="text" name="firstNum" class="form-control"    >
                                        
                                    </div>
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Second Number </label>
                                        <input id="form_email" type="text" name="secondNum" class="form-control"  >
                                        
                                    </div>
                                </div>
                            </div>
                            <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $num1= $_POST['firstNum'];
                                    $num2= $_POST['secondNum'];
                                    
                                    if(isset($_POST['Add'])){
                                        $resNum = $num1 + $num2;
                                    }else if(isset($_POST['Subtract'])){
                                        $resNum = $num1 - $num2;
                                    }else if(isset($_POST['Multiply'])){
                                        $resNum = $num1 * $num2;
                                    }else if(isset($_POST['Divide'])){
                                        if($num2 !=0 ) {
                                            $resNum = $num1 / $num2;
                                        }else {
                                            $resNum=0;
                                        }
                                    }
                                    else{
                                        $resNum=0;
                                    }



                            ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Result </label>
                                        <p class="form-control" style="min-height: 40px;"><?= $resNum ?></p>

                                        
                                    </div>
                                </div>
                            </div>
                                <?php

                                    
                                }
                                ?>

                            <div class="row">
                                <div class="col-md-12" style="padding-top:30px; padding-bottom: 50px; display: flex;">
                                    
                                    <input type="Submit" class="btn btn-success btn-send  pt-2 btn-block" name="Add"  value="Add"/ style="font-weight: 500; width: 100px;">
                                    <input type="Submit" class="btn btn-success btn-send  pt-2 btn-block" name="Subtract"  value="Subtract"/ style="font-weight: 500; width: 100px; background: Red;">
                                    <input type="Submit" class="btn btn-success btn-send  pt-2 btn-block" name="Multiply"  value="Multiply"/ style="font-weight: 500; width: 100px; background: Blue;">
                                    <input type="Submit" class="btn btn-success btn-send  pt-2 btn-block" name="Divide"  value="Divide"/ style="font-weight: 500; width: 100px; background: Orange;">
                                       
                                
                                </div>
                    
                            </div>
                            

                             
                        </div>
                        <div class="controls">
                            <label for="form_name" style="padding-bottom:30px; font-weight: 500; font-size: 20px;">2 គណនាម៉ាស៊ីនត្រជាក់មួយស៊ីអនុភាព (P) 2.4kw។ គេប្រើប្រាស់ក្នុងរយះពេល 10h។<br>គណនាចំណាយនៃការប្រើប្រាស់ម៉ាស៊ីនត្រជាក់?<br>
                            -  បើតម្លៃអគ្គិសនី == 500r/kwh <br>
                            -  បើតម្លៃអគ្គិសនី > 500r/kwh && <= 700/kwh <br>
                            -  បើតម្លៃអគ្គិសនី > 700r/kwh && <= 1000/kwh <br>
                            -  បើតម្លៃអគ្គិសនី 1500r/kwh                                                       
                            </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">អនុភាព (P)</label>
                                        <input id="form_name" type="text" name="P" class="form-control"  >
                                        
                                    </div>
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">រយះពេលប្រើប្រាស់ (T) </label>
                                        <input id="form_email" type="text" name="T" class="form-control"  >
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">តម្លៃអគ្គិសនី (W)</label>
                                        <input id="form_email" type="text" name="W" class="form-control"  >

                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="padding-top:30px; padding-bottom: 50px;">
                                    
                                    <input type="Submit" class="btn btn-success btn-send  pt-2 btn-block" name="calulatorElectric"  value="គណនាថាមពលអគ្គិសនី" >                                    
                                       
                                
                                </div>
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                        $p = $_POST['P'];
                                        $t = $_POST['T'];
                                        $w = $_POST['W'];
                                        if(isset($_POST['calulatorElectric'])){
                                            if($w==500){
                                                $total = $p * $t * 500;
                                            }else if($w == 700){
                                                $total = $p * $t * $w;
                                            }else if($w == 1000){
                                                $total = $p * $t * $w;
                                            }else if ($w == 1500){
                                                $total = $p * $t * $w;
                                            }else{
                                                $total = "Error";
                                            }
                                            echo "<div style='background:yellow;'>តម្លៃអគ្គិសនី = $total </div>";
                                        }
                                    }

                                ?>
                    
                            </div>
                        </div>

                        <label for="form_name" style="padding-bottom:30px; font-weight: 500; font-size: 20px;">3 Using nested for loop that create a chess board</label>    
                        <table width="270px" cellspacing="0px" cellpadding="0px" border="1px" style="margin-bottom: 50px ;">
                            <!-- cell 270px wide (8 columns x 60px) -->
                            <?php
                            // Outer loop for rows
                            for($row=1; $row<=8; $row++)
                            {
                                echo "<tr>"; // Start a new table row
                                
                                // Inner loop for columns
                                for($col=1; $col<=8; $col++)
                                {
                                    // Calculate total sum of row and column indices
                                    $total = $row + $col;
                                    
                                    // Check if total is even or odd to determine cell color
                                    if($total % 2 == 0)
                                    {
                                        // If total is even, set cell background color to white
                                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                                    }
                                    else
                                    {
                                        // If total is odd, set cell background color to black
                                        echo "<td height=30px width=30px bgcolor=red></td>";
                                    }
                                }
                                
                                echo "</tr>"; // End the table row
                            }
                            ?>
                        </table>

                        <div class="controls">
                            <label for="form_name" style="padding-bottom:30px; font-weight: 500; font-size: 20px;">4 Array to String Conversion<br> <span style="padding-bottom:30px; font-weight: 200;" >Jone</span></label>                            
                            <div class="form-check">
                               <label>
                                    <input type="checkbox" name="colors[]" value="Red"> Red
                                </label><br>                                
                                <label>
                                    <input type="checkbox" name="colors[]" value="Green"> Green
                                </label><br>
                                <label>
                                    <input type="checkbox" name="colors[]" value="Blue"> Blue
                                </label><br>
                                <label>
                                    <input type="checkbox" name="colors[]" value="Pink"> Pink
                                </label><br>
                                <button type="submit" name="btnColor" class="btn btn-success btn-send  pt-2 btn-block">Submit</button>
                                <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        
                                        if (isset($_POST['btnColor'])) {
                                            $selectedColors = $_POST['colors'];
                                            
                                            echo "<h2>Jone selected the following colors:</h2>";
                                            
                                            foreach ($selectedColors as $color) {
                                                echo "<div class='color-box' style='background:$color; magin-bottom:10px;'>$color</div> " ;
                                            }
                                            
                                        } else {
                                            echo "<h2>No colors were selected.</h2>";
                                        }
                                    } else {
                                        echo "<h2>No form data received.</h2>";
                                    }
                                ?>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- /.row-->

    </form>
