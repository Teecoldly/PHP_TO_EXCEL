<?php
$a =array(
      array('this','is','the','test','string'),
     array('this1','is1','the1','test1','string1')
    );
    
if (isset($_POST["export"])) {
    $filename = "Export_excel.xls";
    header("Content-Type: application/vnd.ms-excel"); //โดยเขียนไฟล์เป็นๅ excel
    header("Content-Disposition: attachment; filename=\"$filename\"");// ออกเป็นไฟล์ชื่ออะไร
 
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
body {
    font-size: 0.95em;
    font-family: arial;
    color: #212121;
}

th {
    background: #E6E6E6;
    border-bottom: 1px solid #000000;
}

#table-container {
    width: 850px;
    margin: 50px auto;
}

table#tab {
    border-collapse: collapse;
    width: 100%;
}

table#tab th, table#tab td {
    border: 1px solid #E0E0E0;
    padding: 8px 15px;
    text-align: left;
    font-size: 0.95em;
}

.btn {
    padding: 8px 4px 8px 1px;
}
#btnExport {
    padding: 10px 40px;
    background: #499a49;
    border: #499249 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    cursor: pointer;
}
</style>
</head>
<body>
    <div id="table-container">
        <table id="tab">
            <thead>
                <tr>
                    <th width="35%">data1</th>
                    <th width="20%">data2</th>
                    <th width="25%">data3</th>
                    <th width="20%">data4</th>
                    <th width="20%">data5</th>
                </tr>
            </thead>
            <tbody>


                <?php 
                
                for($i = 0 ;$i<2;$i++){
                    ?>
                    <tr>
                    <?php 
                    for($b = 0 ;$b<5;$b++){
                        ?>         
                              <td><?php echo $a[$i][$b]; ?> </td>
                        <?php  } ?> 
                    </tr>
            <?php   }  ?>
            <tr>
            <td> ทดสอบภาษาไทย </td>
            <td> ทดสอบภาษาไทย </td>
            <td> ทดสอบภาษาไทย </td>
            <td> ทดสอบภาษาไทย </td>
            <td> ทดสอบภาษาไทย </td>

            </tr>
      </tbody>
        </table>
        <?php 
        if(isset($_POST["export"])){
            exit(); //  ใช้ในการสิ้นสุดการเขียนไฟล์
        }
        ?>
        <div class="btn">
            <form action="" method="post">
                <button type="submit" id="btnExport"
                    name='export' value="Export to Excel"
                    class="btn btn-info">Export to Excel</button>
            </form>
        </div>
    </div>
</body>
</html>

 