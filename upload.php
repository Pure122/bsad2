<?php
session_start();
include('server.php');


$targetmaindir = "testpic/mainpic/";
$targetindir = "testpic/inpic/";
$picnamemain = $_FILES['mainpic']['name'];
$inpicnames = array_filter($_FILES['inpic']['name']);

if(isset($_POST['newpro'])){
    if(!empty($_FILES['mainpic']['name'])){
        $mainpicname = basename($_FILES['mainpic']['name']);
        $targetmainpic = $targetmaindir.$mainpicname;
        $filetypemain = pathinfo($targetmainpic, PATHINFO_EXTENSION);
        $patecombvalue = "'$mainpicname'";
        $allowtype = array('jpg','jpeg','png');
        move_uploaded_file($_FILES['mainpic']['tmp_name'], $targetmainpic);
            
                foreach($_FILES['inpic']['name'] as $key=>$val){
                    $inpicname= basename($_FILES['inpic']['name'][$key]);
                    $targetinpic = $targetindir.$inpicname;

                    $inpictype = pathinfo($targetinpic,PATHINFO_EXTENSION);
                    if(in_array($inpictype,$allowtype)){
                        if(move_uploaded_file($_FILES['inpic']['tmp_name'][$key], $targetinpic)){
                           
                            $insertpic .= ",'$targetinpic'";
                        }
                    }
                 }
                 $newid = $_POST['newproid'];
                 $newname = $_POST['newproname'];
                 $newdesc = $_POST['newprodesc'];
                 $newprc = (float)$_POST['newproprice'];
                 $newqty = (int)$_POST['newproqty'];
                 $newcate = $_POST['newprocate'];
                 $sqlvalue = "("."'$newid',"."'$newname',"."'$newdesc',"."'$newprc',"."'$newqty',"."'$newcate',"."'$targetmainpic'".$insertpic.")";
                $insertsql = "INSERT INTO Products (ProdID,Prod_Name,Prod_Desc,Prod_Price,Prod_Quantity,Prod_Category,Prod_Mainpic,Prod_Pic1,Prod_Pic2,Prod_Pic3,Prod_Pic4) VALUES $sqlvalue";
            $db->query($insertsql);

            
        

    }
}



?>