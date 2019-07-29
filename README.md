
การเขียนไฟล์ EXCEL โดย PHP
โดยหลักการใช้
    header("Content-Type: application/vnd.ms-excel"); //โดยเขียนไฟล์เป็นๅ excel
    header("Content-Disposition: attachment; filename=\"$filename\"");// ออกเป็นไฟล์ชื่ออะไร
