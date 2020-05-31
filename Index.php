<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

@author Sylvia Kornelina Sihombing
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'Company.php';
            include 'Department.php';
            include 'Employee.php';
        ?>
        <u><h2>Data Karyawan</h2></u>
        <div class="content">
        <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="13%">Employee Name</td>
                <td width="1%">:</td>
                <td>
                    <?php
                        $viewEmployee = new Employee();
                        $viewEmployee->name = 'Sylvia Kornelina Sihombing';
                        echo $viewEmployee->getEmployeeProfil();
                    ?>
                </td>
            </tr>
        
            <tr>
                <td>Title</td>
                <td width="1%">:</td>
                <td>
                    <?php
                        $viewEmployee = new Employee();
                        $viewEmployee->title = 'Software Quality Assurance';
                        echo $viewEmployee->getEmployeeProfil();
                    ?>
                </td>
            </tr>
        
            <tr> 
                <td>Department</td>
                <td width="1%">:</td>
                <td>
                    <?php
                        $viewDept = new Department();
                        $viewDept->name = 'Technology';
                        echo $viewDept->getDepartmentName();
                    ?>
                </td>
            </tr>
        
            <tr>
                <td>Company</td>
                <td width="1%">:</td>
                <td>
                    <?php
                        $viewComp = new Company();
                        $viewComp->name = 'Institut Teknologi Del';
                        echo $viewComp->getCompanyName();
                    ?>
                </td>
            </tr>
        
            <tr>
                <td>Salary</td>
                <td width="1%">:</td>
                <td>
                    <?php
                        $viewEmployee = new Employee();
                        $viewEmployee->salary = 6000000;
                        echo 'Rp ';
                        echo $viewEmployee->getEmployeeProfil();
                    ?>
                </td>
            </tr> 
        </table>
        </div>
    </body>
</html>
