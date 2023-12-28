<?php
include('config.php');

if(isset($_POST['btn']))
{
  $name = $_POST['sname'];
  $admno =$_POST['adno'];
  $feetype = $_POST['fee'];
  $transmode = $_POST['ttype'];
  $transno= $_POST['tnos'];
  $amount = $_POST['amount'];

  $sql = mysqli_query($config,"INSERT INTO student_trans ( name, adm_no,fee_type, trans_mode, trans_no, amount) VALUES ('$name','$admno','$feetype','$transmode','$transno','$amount')");
  if($sql)
  {
    echo '<script> alert("Transaction sucessful")</script>';
  }
  else
  {
    echo '<script> alert("Transaction failed..")</script>';
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fee Payment Gatways</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 1em;
      text-align: center;
    }

    section {
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input,
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>

  <header>
    <h1>School Accounting System</h1>
  </header>

  <section>
    <h2>Manage Transactions</h2>

    <form id="transactionForm" method ="POST">
      <label for="sname">Student Name:</label>
      <input type="text" id="studentName" name="sname" required>

      <label for="adno">Admission Number:</label>
      <input type="text" id="transno" name="adno" required>

      <label for="fee">Fee Type:</label>
      <select id="feeType" name="fee" required>
        <option value="tuition">Tuition Fee</option>
        <option value="exam">Exam Fee</option>
        <option value="transportation">Transportation Fee</option>
        <option value="late">Late Fee</option>
        <option value="hostel">Hostel Fee</option>
        <option value="disciplinary">Indiscipline Fee</option>
      </select>

      <label for="ttype">Transaction Type:</label>
      <select id="transactionType" name="ttype" required>
        <option value="upi">UPI Payment</option>
        <option value="card">Card Payment</option>
        <option value="cash">Cash Payment</option>
        <option value="wallet">Wallet Payment</option>
      </select>

      <label for="tnos">Transaction Number:</label>
      <input type="number" id="transno" name="tnos" required>

      <label for="amount">Amount:</label>
      <input type="number" id="amount" name="amount" required>

      <button type="submit" name ="btn" onclick="addTransaction()" >Submit</button>
    </form>

    <h3>Transaction History</h3>
    <table id="transactionTable">
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Adm. no</th>
          <th>Fee Type</th>
          <th>Transaction number</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody id="transactionBody"></tbody>
    </table>
  </section>

  <script>
    function addTransaction() {
      const form = document.getElementById('transactionForm');
      const tableBody = document.getElementById('transactionBody');
      const row = tableBody.insertRow();

      const cell1 = row.insertCell(0);
      const cell2 = row.insertCell(1);
      const cell3 = row.insertCell(2);
      const cell4 = row.insertCell(3);
      const cell5 = row.insertCell(4);

      cell1.textContent = form.elements['studentName'].value;
      cell2.textContent = form.elements['feeType'].value;
      cell3.textContent = form.elements['transactionType'].value;
      cell4.textContent = form.elements['transno'].value;
      cell5.textContent = form.elements['amount'].value;

      form.reset();
    }
  </script>

</body>

</html>


