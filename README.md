
การเขียนไฟล์ EXCEL โดย PHP<br>
โดยหลักการใช้<br>
    header("Content-Type: application/vnd.ms-excel"); //โดยเขียนไฟล์เป็นๅ excel
    <br>
    header("Content-Disposition: attachment; filename=\"$filename\"");// ออกเป็นไฟล์ชื่ออะไร
