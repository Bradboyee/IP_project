<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    
</head>

<body>
        <div id="roundcorner">
            <h1>ข้อมูลการฉีดวัคซีน</h1>
            <form action="insertvac_atk_licence.php" method="post">
        <input type="text" id="Vaccine_Product_First" name="VaccineProductFirst" placeholder="วัคซีนที่ได้รับเข็มแรก "> 
        <br><br> 
        <input type="text" id="Vaccine_Product_Sec" name="VaccineProductSec" placeholder="วัคซีนที่ได้รับเข็มสอง ">
            <br><br> 
        <input type="text" id="Vaccine_Product_Third" name="VaccineProductThird" placeholder="วัคซีนที่ได้รับเข็มสาม ">
                <br><br> 
        <input type="text" id="Vaccine_VaccinatedNumber" name="VaccineVaccinatedNumber" placeholder="จำนวนวัคซีนที่ได้รับทั้งหมด ">
                    <br><br> 
        <input type="date" id="Vaccine_Date" name="VaccineDate" placeholder="วันที่ได้รับวัคซีน ">
                         <br>
                         <label>ATK</label>
                         <br>
        <input type="text" id="ATK_DetectPlace" name="ATKDetectPlace" placeholder="สถานที่ตรวจ "> 
            <br><br>
        <input type="date" id="ATK_DetectDate" name="ATKDetectDate" placeholder="วันที่ตรวจ ">
                <br><br>
        <input type="text" id="ATK_InfectedHistory" name="ATKInfectedHistory" placeholder="ประวัติการติดเชื้อ ">
                    <br><br>
        <input type="text" id="ATK_DetectResult" name="ATKDetectResult" placeholder="ผลลัพธ์การตรวจ ">
         <br>
         <label>ข้อมูลเกี่ยวกับใบอนุญาติขับรถ</label>
         <br>
            <form action="insertVaccine-Atk-License.php" method="post">    
        <input type="date" id="Licence_IssueDate" name="LicenceIssueDate" placeholder="วันออกใบขับขี่ ">
            <br><br>
        <input type="date" id="Licence_ExpiryDate" name="LicenceExpiryDate" placeholder="วันหมดอายุใบขับขี่ ">
                <br><br>
        <input type="text" id="Licence_LicencePlate" name="LicenceLicencePlate" placeholder="ป้ายทะเบียนรถ ">
        <button type="submit">Submit</button>
</form>
        </div>
         <br> 
</body>
