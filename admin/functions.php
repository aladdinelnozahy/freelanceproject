<?php
require('config.php');

    // page change title
    function setTitle(){
        if (isset($_GET['page'])){
            $title = $_GET['page'];
                switch ($title){
                    case 'home':echo 'home';break;
                    case 'addusers':echo 'Create New User';break;
                    case 'manageuser':echo 'Users Control';break;
                    case 'freelancers':echo 'Freelancers';break;
                    case 'edit':echo 'Edit User';break;
                    default: echo 'no page';

                }
        }
    }
    function getTotals($tbl){
        global $connection ;
        $sql="SELECT COUNT(*) as'total' FROM $tbl ";
        $result = mysqli_query($connection,$sql);
        $count = mysqli_fetch_array($result);
        return $count['total'];
    }

    // function checkUser($col,$col2,$tbl,$where =''){
    //     $sql = "SELECT $col1 , $col2 FROM $tbl ";
    
    
    // }



    function getMessage($text){
        echo "
         <div class=\"alert alert-info\">
            <span style='color:'> $text</span>
         </div>";
       
    }



?>