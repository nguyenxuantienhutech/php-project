<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Tiến, Thanh, Trang</title>
</head>
<body>
    <div class="wrapper">
        <?php 
            require_once("userClass.php");
            $tien = new User('Nguyen Xuan Tien', 'xuantien@gmail.com');
            echo "<h2>---- User info ----</h2>";
            echo "UserID: ".$tien->getUserID()."<br/>";
            echo "UserName: ".$tien->getUserName()."<br/>";
            //thanh
            $thanh = new User('Luu Gia Thanh', 'giathanh@gmail.com');
            echo "<h2>---- User info ----</h2>";
            echo "UserID: ".$thanh->getUserID()."<br/>";
            echo "UserName: ".$thanh->getUserName()."<br/>";
            //Trang
            $trang = new User('Tran Thi Huyen Trang', 'huyentrang@gmail.com');
            echo "<h2>---- User info ----</h2>";
            echo "UserID: ".$trang->getUserID()."<br/>";
            echo "UserName: ".$trang->getUserName()."<br/>";

            //more
            include("employeeclass.php");
            $tien1 = new Person("Nguyen Xuan Tien", 1234);
            echo "<h2>---- More info ----</h2>";
            echo "Person Name: ".$tien1->getName()."<br/>";
            echo "Person ID: ".$tien1->getNationalID()."<br/>";
            echo "<h2>---- Employee ----</h2>";
            $thanh1 = new Employee("Luu Gia Thanh", 1111, "Security");
            echo "Employee ID: ".$thanh1->GetEmployeeID()."<br/>";
            echo "Employee Name: ".$thanh1->getName()."<br/>";
            echo "Employee Department: ".$thanh1->GetDepartment()."<br/>";
            echo "<h2> More employee </h2>";
            $trang1 = new Employee("Tran Thi Huyen Trang", 2222, "Offical");
            echo "Employee ID: ".$trang1->GetEmployeeID()."<br/>";
            echo "Employee Name: ".$trang1->getName()."<br/>";
            echo "Employee Department: ".$trang1->GetDepartment()."<br/>";
        ?>
    </div>
    <footer style="color:red">
        <br/>
        &#169; 2/3/2023 - Xuan Tien, Gia Thanh, Huyen Trang - HUTECH
        <p>Hello world!</p>
    </footer>
</body>
</html>
