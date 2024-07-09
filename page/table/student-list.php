<?php
        include "conn/dg_configure.php";
                                        
    ?>



<main>
    


                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Student Table</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Student Register Form
                            </div>
                            <form method="post" action="page/table/student_insert.php">
                                <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-12 mb-4">

                                          <div  class="m-outline">
                                            <label class="form-label" >Student Name</label>
                                            <input type="text" name="txtStudentName"class="form-control " />
                                            
                                          </div>

                                        </div>
                                        <div class="col-md-12 mb-4">

                                        </div>
                                        
                                      </div>
                                      <div class="col-md-12 mb-2">

                                          

                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rdoStuGender" 
                                              value="M" checked />
                                            <label class="form-check-label" >Male</label>
                                          </div>

                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rdoStuGender"
                                              value="F" />
                                            <label class="form-check-label" >Female</label>
                                          </div>
                                        </div>

                                      <div class="row">
                                        <div class="col-md-12 mb-4 d-flex align-items-center">
                                          <div data-mdb-input-init class="form-outline datepicker w-100">
                                            <label for="birthdayDate" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control " name="txtPhoneNumber" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-2  mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline">
                                                
                                                <?php
                                                    include "datepicker.php"
                                                ?>
                                            </div>                                            
                                        </div>
                                        <div class="col-md-8 mb-4 pb-2">
                                            <div data-mdb-input-init class="form-outline">
                                                <label class="form-label" >Address</label>
                                                <input type="tel" name="txtAddress" class="form-control" />
                                            </div>
                                        </div>

                                        
                                      </div> 
                                      <div class="row">
                                        
                                          
                                      </div>
                                      <div class="mt-4 pt-2">
                                        <input  class="btn btn-success" type="submit" value="Register" name="btnRegister"/>                                        
                                      </div>
                                </div>
                            </form>
                        </div>
                        <?php
                            /*if (isset()) {
                                // code...
                            }*/
                        ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Student List
                            </div>
                            <div class="card-body">
                                

                                <table id="datatablesSimple">

                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Student Name</th>
                                            <th>Gender</th>
                                            <th>Phone Number</th>
                                            <th>Date Of Birth</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Student Name</th>
                                            <th>Gender</th>
                                            <th>Phone Number</th>
                                            <th>Date Of Birth<br></th>
                                            <th>Address</th>
                                            <td>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $sql = "select * from tblStudent order by Id asc";
                                            $result = mysqli_query($conn, $sql);
                                            while ( $row = mysqli_fetch_array ($result)) {
                                                    
                                            
                                        ?>
                                        <tr>
                                            <td><?= $row[0]?></td>
                                            <td><?= $row[1]?></td>
                                            <td><?= $row[2]?></td>
                                            <td><?= $row[3]?></td>
                                            <td><?= $row[4]?></td>
                                            <td><?= $row[5]?></td>
                                            <td>
                                                <button type="button" class="btn btn-secondary">Edit</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>   
                                        <?php
                                                }
                                        ?>                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>