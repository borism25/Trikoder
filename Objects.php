<?php

class Invoice {
    var $SIN;
//    Sequential invoice number
    var $DOC;
//    Date Of Creation
    var $DD;
//    Due Date
    var $TBA;
//    Total Brutto Amount
    var $TAX;
//    Total Tax Amount (Fixed 25%)

    function set_sin() {
//        $result = mysql_query("SELECT MAX(id) FROM ID");
//        $row = mysql_fetch_row($result);
//        $highest_id = $row[0];
        $highest_id= 2;
        $this->SIN = $highest_id + 1;
    }

    function get_sin() {
//        return $this->SIN;
        echo $this->SIN . '<br>';
    }

    function set_doc() {
        $currentDate = date('Y-m-d H:i:s');
        $this->DOC = $currentDate;
    }

    function get_doc() {
//        return $this->DOC;
        echo $this->DOC . '<br>';
    }

    function set_dd() {

    }
    function get_dd() {

    }
    function set_tba($price) {
        $this->TBA = $price;
    }
    function get_tba() {
//        return $this->TBA;
        echo $this->TBA . '<br>';

    }

    function rem_tba($price) {
        $main = $this->TBA;
//        Pick the main price
        $remove = $main - $price;
//        remove the inserted price or by id "product" -> need changes if need to remove price by id
        $this->TBA = $remove;
        echo $this->TBA . '<br>';

    }


    function set_tax() {
        $price = $this->TBA;
        $PDV = $price / 100 * 20;
//        OR $PDV = $price * 0.20;

        //Bruto -20%
        //Netto +25%
        $this->TAX = $PDV;

    }
    function get_tax() {
//        return $this->TAX;
        echo $this->TAX . '<br>';

    }



}

$boris = new Invoice();
$boris->set_sin();
$boris->get_sin();

$boris->set_doc();
$boris->get_doc();

$boris->set_tba(2000);
$boris->get_tba();
$boris->rem_tba(200);

$boris->set_tax();
$boris->get_tax();



class Invoice_Item {
//    var $entity;
//    var $AOP;
////    Amount of Product
//    var $Item_Price;
//    var Total_Price;

    function setProduct ($entity, $AOP, $Item_Price) {
        require "connect_to_mysql.php";

        $sql = "INSERT INTO `borismunk`.`inovice` (`ID`, `entity`, `AOP`, `Item_Price`) VALUES (NULL, '$entity', '$AOP', '$Item_Price')";

        if (mysql_query($sql)){
            echo "Your products table has been created successfully!";
        } else {
            echo "CRITICAL ERROR: products table has not been created.";
        }
    }
    function getProductID ($ID) {
        require "connect_to_mysql.php";

        $sql = "SELECT * FROM `inovice` WHERE ID = $ID";

        if ($result= mysql_query($sql)){
        $row = mysql_fetch_row($result);
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        } else {
            echo "CRITICAL ERROR: products table has not been created.";
        }

    }

    function getAllProducts() {
        require "connect_to_mysql.php";

        $sql1 = "SELECT * FROM `inovice`";

       $result1= mysql_query($sql1);
//            $row = mysql_fetch_row($result);
            while($row1 = mysql_fetch_array($result1)){
                    echo "<pre>";
                    print_r($row1);
                    echo "</pre>";
                }
     }
}

$borisProizvod = new Invoice_Item();
//$borisProizvod->setProduct('crvena majica', 50, 35 );
echo "Product by ID";
$borisProizvod->getProductID(2);
echo "All Products";
$borisProizvod->getAllProducts();

echo "KATEGORIJE";
$products_cat = array(
    1 => 'Obuca',
    2 => 'Odjeca',
    3 => 'Elektronika',
    4 => 'Ostalo' );

    echo "<pre>";
    print_r($products_cat);
    echo '</pre>';

class Product {
    var $name;


    function set_Name($name) {
        $this->name = $name;

    }

    function get_Name(){
        echo $this->name. '<br>';
    }

}
$borisProizvodName = new Product;
$borisProizvodName->set_Name('Novi');
$borisProizvodName->get_Name();








































?>

