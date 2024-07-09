<?php
  if(isset($_POST['btnCal'])){
    error_reporting(E_ALL);
    ini_set("Display error", 1);

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

      for ($i = 1; $i <= $month; $i++) {

          $date_monthly = date('d-m-y', strtotime("+$i month", strtotime($start_date_payment)));
          $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

            $interest = $debt * $interestRate;
            $principal = $installment - $interest;
            $debt -= $principal; // $debt= $debt-$principal;
            #$formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
            #$formatted_installment = $formatter->formatCurrency($installment, 'USD');
            #$formatted_principal = $formatter->formatCurrency($principal, 'USD');
            #$formatted_interest = $formatter->formatCurrency($interest, 'USD');
            #$formatted_debt = $formatter->formatCurrency($debt, 'USD');

            $totalInterest += $interest;

          }

        }
?>


<div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-7">
                <h2> Loan calculation</h2><br/>
                <form method="post" class="border_color row g-3 needs-validation" novalidate>
                  <div class="col-md-12">
                    <label for="txtloanamout" class="form-label">Loan Amount ($)</label>
                    <input type="text" name="txtloanamout" class="form-control" id="validationCustom01" value="" required>
                  </div>
                  <div class="col-md-12">
                    <label for="txtinteresrate" class="form-label">Interest Rate Per Month</label>
                    <input type="text" name="txtinteresrate" class="form-control" id="validationCustom02" value="" required>
                  </div>
                  <div class="col-md-12">
                    <label for="txtmonth" class="form-label">Payment Frequency (Month)</label>
                    <input type="text" name="txtmonth" class="form-control" id="validationCustom03" value="" required>
                  </div>
                  
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="btnCal">Calculate</button>
                  </div>
                </form>
            </div>
            <div class="col-5">
                <div class="border_color" style="margin-top:50px;">
                     <table class="table">
                        <tbody>
                          <tr>
                            <td class="text-center"><h4>ប្រាក់ត្រូវបង់ប្រចាំខែ</h4></td>
                            <td style="font-weight:bold;"><span id="monthlypayment"></span></td>
                          </tr>
                          <tr>
                            <td class="text-center"><h1><?php echo $formatter->formatCurrency($installment, 'USD'); ?></h1></td>
                            <td style="font-weight:bold;"><span id="monthlypayment"></span></td>
                          </tr>
                          <tr>
                            <td>ប្រាក់ដើមសរុប</td>
                            <td style="font-weight:bold;"><?php echo $formatter->formatCurrency($loan_amt, 'USD'); ?></td>
                          </tr>
                          <tr>
                            <td>ការប្រាក់សរុបត្រូវបង់</td>
                            <td style="font-weight:bold;"><span id="tt_IntRate"><?php echo $formatter->formatCurrency($totalInterest, 'USD'); ?></span></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit" name="showTable">បង្ហាញតារាងបង់ប្រាក់</button>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <?php

                  include "concept.php";
                ?>
            </div>
          
        </div>
    </div>

    