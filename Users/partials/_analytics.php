<?php
//Global variables
$customer_id = $_SESSION['customer_id'];

//1. My Orders
$query = "SELECT COUNT(*) FROM `m_orders` WHERE customer_id =  '$customer_id' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($orders);
$stmt->fetch();
$stmt->close();

//3. Available Products
$query = "SELECT COUNT(*) FROM `m_products` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($products);
$stmt->fetch();
$stmt->close();

//4.My Payments
$query = "SELECT SUM(pay_amt) FROM `m_payments` WHERE customer_id = '$customer_id' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($sales);
$stmt->fetch();
$stmt->close();
