

<html>
    <head><title>Customer Details</title>
    
    <link rel="stylesheet" type="text/css" href="css/view_customer_by_acc_no.css" />
    
      <?php include 'header.php' ?></head>
<body>
	<?php include 'staff_profile_header.php' ?>
    
    <div class="view_cust_byac_container_outer">
    <form method="POST">
        <input name="account_no" placeholder="Customer Account No"><br>
        <input type="submit" name="submit_view" value="Submit">

    </form>
    </div>
    
    <?php 

    if(isset($_POST['submit_view'])){
        $cust_ac=$_POST['account_no'];
        include 'db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Account_no= '$cust_ac'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        $row = $result->fetch_assoc();

	    echo '<div class="view_cust_byac_container_inner">
            <div class="cust_details">
                <span class="heading">Customer Details</span><br>
                <label><b>Customer Id :</b> '.$row['Customer_ID'].'</label>
                <label><b>Account Number : </b>'.$row['Account_no'].'</label>
                 <label><b>Account Name :</b> '.$row['Username']. '</label>
                <label><b>Account Type :</b> '.$row['Account_type']. '</label>
                <label><b>IFSC Code : </b>'.$row['IFSC_Code']. '</label>
                <label><b>Branch :</b> '.$row['Branch'].'</label>
                <label><b>Available Balance :</b> $'.$row['Current_Balance'].'</label>
                <label><b>Mobile No :</b> '.$row['Mobile_no'].'</label>
                <label><b>Debit Card No :</b> '.$row['Debit_Card_No'].'</label>
                <label><b>Nominee Name :</b> '.$row['Nominee_name'].'</label>
                <label><b>Nominee Ac/no :</b> '.$row['Nominee_ac_no'].'</label>
                <label><b>Email Id :</b> '.$row['Email_ID'].'</label>
            </div>
            </div>'; 
    
    }

    else{

        echo '<script>alert("Customer not found")</script>';
    }
}
    
    ?>

    </body>
    <!--<?php include 'footer.php' ?>-->
</html>