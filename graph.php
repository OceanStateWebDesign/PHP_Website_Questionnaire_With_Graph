<?php

    $dataPoints = array(
    	array("y" => $category1total, "label" => "Hardware" ),
    	array("y" => $category2total, "label" => "Network Infrastructure" ),
    	array("y" => $category3total, "label" => "On-Site Team Members" ),
    	array("y" => $category4total, "label" => "Off-Site Team Members" ),
    	array("y" => $category5total, "label" => "Software" ),
    	array("y" => $category6total, "label" => "Security Audits" ),
    	array("y" => $category7total, "label" => "Finance Infrastructure" ),
        array("y" => $category10total, "label" => "Consultation" )
    );
    
//Set each question answer post data to a variable - these are the 'answers' value by point
$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];
$answer6 = $_POST['question-6-answers'];
$answer7 = $_POST['question-7-answers'];
$answer8 = $_POST['question-8-answers'];
$answer9 = $_POST['question-9-answers'];
$answer10 = $_POST['question-10-answers'];
$answer11 = $_POST['question-11-answers'];
$answer12 = $_POST['question-12-answers'];
$answer13 = $_POST['question-13-answers'];
$answer14 = $_POST['question-14-answers'];
$answer15 = $_POST['question-15-answers'];
$answer16 = $_POST['question-16-answers'];
$answer17 = $_POST['question-17-answers'];
$answer18 = $_POST['question-18-answers'];
$answer19 = $_POST['question-19-answers'];
$answer20 = $_POST['question-20-answers'];
$answer21 = $_POST['question-21-answers'];
$answer22 = $_POST['question-22-answers'];
$answer23 = $_POST['question-23-answers'];
$answer24 = $_POST['question-24-answers'];
$answer25 = $_POST['question-25-answers'];
$answer26 = $_POST['question-26-answers'];
$answer27 = $_POST['question-27-answers'];
$answer28 = $_POST['question-28-answers'];
$answer29 = $_POST['question-29-answers'];
$answer30 = $_POST['question-30-answers'];
$answer31 = $_POST['question-31-answers'];
$answer32 = $_POST['question-32-answers'];
$answer33 = $_POST['question-33-answers'];
$answer34 = $_POST['question-34-answers'];
$answer35 = $_POST['question-35-answers'];
$answer36 = $_POST['question-36-answers'];
$answer37 = $_POST['question-37-answers'];
$answer38 = $_POST['question-38-answers'];
$answer39 = $_POST['question-39-answers'];
$answer40 = $_POST['question-40-answers'];
$answer41 = $_POST['question-41-answers'];
$answer42 = $_POST['question-42-answers'];
$answer43 = $_POST['question-43-answers'];
$answer44 = $_POST['question-44-answers'];
$answer45 = $_POST['question-45-answers'];
$answer46 = $_POST['question-46-answers'];
$answer47 = $_POST['question-47-answers'];
$answer48 = $_POST['question-48-answers'];
$answer49 = $_POST['question-49-answers'];
$answer50 = $_POST['question-50-answers'];
$answer51 = $_POST['question-51-answers'];
$answer52 = $_POST['question-52-answers'];
$answer53 = $_POST['question-53-answers'];
$answer54 = $_POST['question-54-answers'];
$answer55 = $_POST['question-55-answers'];
$answer56 = $_POST['question-56-answers'];
$answer57 = $_POST['question-57-answers'];
$answer58 = $_POST['question-58-answers'];
$answer59 = $_POST['question-59-answers'];
$answer60 = $_POST['question-60-answers'];
$answer61 = $_POST['question-61-answers'];
$answer62 = $_POST['question-62-answers'];
$answer63 = $_POST['question-63-answers'];
$answer64 = $_POST['question-64-answers'];
$answer65 = $_POST['question-65-answers'];
$answer66 = $_POST['question-66-answers'];
$answer67 = $_POST['question-67-answers'];
$answer68 = $_POST['question-68-answers'];
$answer69 = $_POST['question-69-answers'];
$answer70 = $_POST['question-70-answers'];
$answer71 = $_POST['question-71-answers'];
$answer72 = $_POST['question-72-answers'];
$answer73 = $_POST['question-73-answers'];
$answer74 = $_POST['question-74-answers'];
$answer75 = $_POST['question-75-answers'];
$answer76 = $_POST['question-76-answers'];
$answer77 = $_POST['question-77-answers'];
$answer78 = $_POST['question-78-answers'];
$answer79 = $_POST['question-79-answers'];
$answer80 = $_POST['question-80-answers'];
$answer81 = $_POST['question-81-answers'];
$answer82 = $_POST['question-82-answers'];
$answer83 = $_POST['question-83-answers'];
$answer84 = $_POST['question-84-answers'];
$answer85 = $_POST['question-85-answers'];
$answer86 = $_POST['question-86-answers'];
$answer87 = $_POST['question-87-answers'];
$answer88 = $_POST['question-88-answers'];
$answer89 = $_POST['question-89-answers'];
$answer90 = $_POST['question-90-answers'];
$answer91 = $_POST['question-91-answers'];
$answer92 = $_POST['question-92-answers'];
$answer93 = $_POST['question-93-answers'];
$answer94 = $_POST['question-94-answers'];
$answer95 = $_POST['question-95-answers'];
$answer96 = $_POST['question-96-answers'];
$answer97 = $_POST['question-97-answers'];
$answer98 = $_POST['question-98-answers'];
$answer99 = $_POST['question-99-answers'];
$answer100 = $_POST['question-100-answers'];


//Form Data Variables - Input Data
$useremail = $_POST['email']; 
$username = $_POST['name']; 
$company = $_POST['companyname'];
$position = $_POST['position'];
$phone = $_POST['phone'];
$referrer = $_POST['referrer'];

//Random Variables
$ran  = rand();
$question_file = './quiz_questions.txt';
$numb = 1;
$results_file = $ran.'results.txt';

//Output Quiz Takers Name + Info to top of graph
$testtaker = $username . " - " . $useremail . " - " . $company . " - " . $position . " - " . $phone . $referrer . "\n \n \n";
file_put_contents($results_file, $testtaker, FILE_APPEND);

//For each question in file
foreach(file($question_file) as $q)
{

$result = "Question $numb:" . $q . "Answer:" . ${"answer".$numb} . "\n";

file_put_contents($results_file, $result, FILE_APPEND);

file_put_contents($results_file, "\n", FILE_APPEND);	
	$numb++;

}

//Create categories by grouping answers and getting the sum of all 'answer points'.
$category1total = $answer1 + $answer2 + $answer3 + $answer4 + $answer5 + $answer6 + $answer7 + $answer8 + $answer9 + $answer10;
$category2total = $answer11 + $answer12 + $answer13 + $answer14 + $answer15 + $answer16 + $answer17 + $answer18 + $answer19 + $answer20;
$category3total = $answer21 + $answer22 + $answer23 + $answer24 + $answer25 + $answer26 + $answer27 + $answer28 + $answer29 + $answer30;
$category4total = $answer31 + $answer32 + $answer33 + $answer34 + $answer35 + $answer36 + $answer37 + $answer38 + $answer39 + $answer40;
$category5total = $answer41 + $answer42 + $answer43 + $answer44 + $answer45 + $answer46 + $answer47 + $answer48 + $answer49 + $answer50;
$category6total = $answer51 + $answer52 + $answer53 + $answer54 + $answer55 + $answer56 + $answer57 + $answer58 + $answer59 + $answer60;
$category7total = $answer61 + $answer62 + $answer63 + $answer64 + $answer65 + $answer66 + $answer67 + $answer68 + $answer69 + $answer70;
$category8total = $answer71 + $answer72 + $answer73 + $answer74 + $answer75 + $answer76 + $answer77 + $answer78 + $answer79 + $answer80;
$category9total = $answer81 + $answer82 + $answer83 + $answer84 + $answer85 + $answer86 + $answer87 + $answer88 + $answer89 + $answer80;
$category10total = $answer91 + $answer92 + $answer93 + $answer94 + $answer95 + $answer96 + $answer97 + $answer98 + $answer99 + $answer100;

//Start Recording the processed output for saving server side
ob_start();

?>

<!DOCTYPE HTML>
<html>
<head>

<div style="text-align: center;  margin: 0 auto; max-width: 1300px;">

<img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo1.png" alt="Logo" width="300" height="150" style="display: inline-block; float: left;">

<h1 style="vertical-align: middle; display: inline-block; float: left; font-size: 21px; padding-top: 50px; padding-bottom: 25px; padding-right: 150px;"> Effective Management Association </h1>

<?php
//Output Form Post Field Data
echo("<p style='padding-top: 25px; padding-bottom: 5px; display: block;'>" . "Name: ".$username . " <br />" . "Email: ".$useremail . " <br /> " . "Company: ".$company . " <br /> " . "Position: ".$position . " <br /> " . "Phone: ".$phone . " <br /> " . "Referrer: ".$referrer . "</p>");
?>

<h1 style="text-aligh:center;background: green; color: white; display: block; font-size: 28px; margin-top: -15px; padding-top: 5px; padding-bottom: 5px;"> Business Analysis for <?php echo($company);  ?></h1>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<canvas id="myChart" width="400" height="250"></canvas>
<script>

//Re-Defines php variables in the js script tag area
var $category1total = "<?php echo $category1total ?>";
var $category2total = "<?php echo $category2total ?>";
var $category3total = "<?php echo $category3total ?>";
var $category4total = "<?php echo $category4total ?>";
var $category5total = "<?php echo $category5total ?>";
var $category6total = "<?php echo $category6total ?>";
var $category7total = "<?php echo $category7total ?>";
var $category8total = "<?php echo $category8total ?>";
var $category9total = "<?php echo $category9total ?>";
var $category10total = "<?php echo $category10total ?>";

var $useremail = "<?php echo $useremail ?>";
var $username = "<?php echo $username ?>";
var $company = "<?php echo $company ?>";
var $position = "<?php echo $position ?>";
var $phone = "<?php echo $phone ?>";
var $referrer = "<?php echo $referrer ?>";

// Define the graph data category totals
var barTotalPopulationData = [ $category1total, $category2total, $category3total, $category4total, $category5total, $category6total, $category7total, $category8total, $category9total, $category10total]; // 

// Labels array
var labels = ['Hardware', 'Software', 'Network Infrastructure', 'On-Site Admins', 'Off-Site Admins', 'DevOps', 'SecOps', 'Finance', 'Compliance', 'MSP'];
// End Defining data

var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {

    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: ' ', // Name the series
            data: barTotalPopulationData, // Specify the data values array
            borderColor: 'white',
	    strokeStyle: Color,
            pointStrokeColor : 'white',
            backgroundColor: [ // Specify custom colors
                'red',
                'green',
                'blue',
                'yellow',
                'brown',
                'orange',
                'pink',
                'purple',
                'lime',
                'teal'
                

            ],
            
            borderWidth: 1 // Specify bar border width
        }
        
        ]
    },  
    
 
options: {
         legend: {
            display: false
         },
         tooltips: {
            enabled: false
         }
    }
});
</script>

<?php
// Prints COPYWRIGHT
echo("<div style='padding-top: 50px; float:left; font-size:12px;'> Copywright ©: 2021 Effective Management Association, All Right Reserved</div>");
?>

<?php
// Prints the day, date, month, year, time, AM or PM
$today = date('Y-m-d', 0);
echo("<div style='padding-top: 50px;  padding-bottom:25px; float:right; font-size:12px;'> Date:".$today."</div>");
?>

</div>

</body>
</html>

<?php
//SEND EMAIL 1 with GRAPH ATTACHMENT - PHP MAIL
$to = 'oceanstateweb@gmail.com'; 
$from = 'oceanstateweb@gmail.com'; 
$fromName = 'Ocean State Web'; 
$subject = 'Questionnaire Graph';  
$attachmentname = $ran.'results.html';
$file = $attachmentname;

//Outputs html report
file_put_contents($attachmentname, ob_get_contents());

// Email body content 
$htmlContent = ' 
    <h3>Attached is your Results</h3> 
    <p>We appreciate your participation and look forward to any questions or communications you may have.</p> 
'; 
 
// Header for sender info
$headers = "From: $fromName"." <".$from.">"; 

// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html/pdf; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($file,"rb"); 
        $data =  @fread($fp,filesize($file)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email 
$mail = @mail($to, $subject, $message, $headers, $returnpath);  

?>


