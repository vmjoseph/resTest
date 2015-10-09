<?php
    
    $nameFirst= trim($_POST["firstN"]);
    $nameLast= trim($_POST["lastN"]);
    $cwid=$_POST["cwid"];
    $year=ucwords($_POST["year"]);
    $gender=ucwords($_POST["gender"]);
    $laundryChoice=$_POST["laundry"];
    $kitchenChoice=$_POST["kitchen"];
    $specialNeeds=$_POST["sNeeds"];
    $hall=ucwords($_POST["hall"]);
    $errorCounter;
   
   //php checks whether each choice is selected and creates an output for each outcome
        if(isset($laundryChoice)){
                $laundryChoice= "Would like laundry on site";
                
            }else{
                $laundryChoice= "Would not like laundry";
        }
        
    //php checks if the user's chosen residence hall also has their chosen preferences
        if(isset($kitchenChoice)){
            $kitchenChoice= "Would like a kitchen";
            
            if($hall=== "Marian Hall" || $hall== "Midrise Hall" ){
                    
                    $errorKitchen="You want a kitchen, but $hall does not have one.<br>";
                    $errorCounter++;
                }
        
        }else{
            $kitchenChoice= "Would not like a kitchen<br>";
           // echo "are you sure you don't want a kitchen?<br>";
        }

        if(isset($specialNeeds)){
            $specialNeeds= "Would like  special needs services";
            if ($hall=== "Marian Hall" || $hall==="Midrise Hall" || $hall=== "Lower West Cedar (N-S)"|| $hall=== "Upper West Cedar St Townhouses (T-Y)"|| $hall=== "Fulton Street Townhouses" || $hall=== "New Fulton Townhouses"){
                $sNeedserror= "Sorry, $hall does not offer special services<br>";
                $errorCounter++;
            }
        }else{
            $specialNeeds= "Would not like special needs services";
        }
        
     
echo "<script>console.log('error amount:$errorCounter ,$errorKitchen')</script>";
if ($errorCounter>0){
   if(isset($kitchenChoice)){
   }
    echo "<script>alert('$errorKitchen');
    window.history.back();</script>";
}else{
    
}
    //php outputs the information submitted by the user
    //     echo "Your name is: ".$nameFirst." ".$nameLast."(".$cwid.")<br>";
    //     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are a ".$gender. " ".$year." who wishes to live in ".$hall."<br>";
    //     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your preferences are: <br>" ;
    //     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laundry: ".$laundryChoice. "<br>";
    //     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kitchen: ".$kitchenChoice."<br>";
    //     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Special Needs: ".$specialNeeds."<br>";
      $output= "Your name is: $nameFirst $nameLast ($cwid)<br>
                You are a $gender $year, who wishes to live in $hall<br>
                You have chosen the following preferences: <br>
                Laundry: $laundryChoice <br> Kitchen: $kitchenChoice <br> Special Needs: $specialNeeds";
                echo $output;
                
$downloadButton = "<form action='' method='POST'>
<input type='hidden' name='firstN' value='$nameFirst'>
<input type='hidden' name='lastN' value='$nameLast'>
<input type='hidden' name='cwid' value='$nameFirst'>
<input type='hidden' name='gender' value='$gender'>
<input type='hidden' name='sNeeds' value='$specialNeeds'>
<input type='hidden' name='hall' value='$hall'>
<button id='goBack' onclick='window.history.back();'>Information not correct? Go Back</button>
    <input type='submit' name='download' class='download' id='download' value='Submit and Download'>
    </form>";
    
    echo $downloadButton;
    
    
    if(isset($_POST['download'])){
        
        ob_clean();
        require('fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        
        //Outputs an array of lines
        $grabText=explode('<br>',$output);
        //prints every line
        foreach( $grabText as $line ){
        $pdf->Cell(40,10,$line);
        $pdf->Ln(12);
    }
    
    $pdf->Output();
        // ob_clean();
//         $file="ResidenceSubmissioin.xls";
//         header("Content-type:application/vnd.ms-excel");
//         header("Content-Disposition:attachment;filename='$file'");


// echo $output;

    
}else {
    // echo "Error, something happened. Please return to the main page and submit again";
}

?>