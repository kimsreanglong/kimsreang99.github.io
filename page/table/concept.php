<?php
if(isset($_POST['btnCal'])){
    $loan_amt = $_POST['txtloanamout'];
    $interestRate = $_POST['txtinteresrate'];
    $month = $_POST['txtmonth'];

    #calculate Rate (9.6%/y)
    #9.6/12 = 0.8
    $interestRate /= 100; //0.008

    #បា្រក់ដែលត្រូវបង់
    $installment = ($loan_amt * $interestRate) / (1 - pow((1 + $interestRate), -$month));

    #ប្រាក់ដើម
    $principal = 0;
    $interest = 0;
    #សមតុល្យបំណុល
    $debt = $loan_amt;
    $start_date_payment = date("d-m-Y");
    

    #echo "Start Date Payment: $start_date_payment<br>";
    #echo "Loan Amount: $loan_amt<br>";
    #echo "Interest Rate: $interestRate<br>";
    #echo "Number of Months: $month<br>";
    #echo "Monthly Installment: $installment<br>";
   

   
    

?>

<table class="table" style="margin-top:50px; ">
  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Installment</th>
      <th scope="col">Principal</th>
      <th scope="col">Interest</th>
      <th scope="col">Remaining Debt</th>
    </tr>
  </thead>
  <tbody>
    <?php
         for ($j = 1; $j <= $month; $j++) {

          $date_monthly1 = date('d-m-y', strtotime("+$j month", strtotime($start_date_payment)));
          $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

            $interest = $debt * $interestRate;
            $principal = $installment - $interest;
            $debt -= $principal; // $debt= $debt-$principal;
            $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
            $formatted_installment = $formatter->formatCurrency($installment, 'USD');
            $formatted_principal = $formatter->formatCurrency($principal, 'USD');
            $formatted_interest = $formatter->formatCurrency($interest, 'USD');
            $formatted_debt = $formatter->formatCurrency($debt, 'USD');

            $totalInterest += $interest;


            

          
    ?>
    <tr>
      <td scope="row"><?php  echo $date_monthly1; ?></td>
      <td ><?php  echo $formatted_installment ; ?></td>
      <td><?php  echo $formatted_principal; ?></td>
      <td><?php  echo $formatted_interest; ?></td>
      <td><?php  echo $formatted_debt; ?></td>
      
    </tr>
    <?php

    
    }
}?>
  </tbody>
</table>
