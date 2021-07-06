<!DOCTYPE html>
<head>
        <meta charset=UTF-8" />
        <title>Business Analysis Chart</title>
        <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<div style="color: black; font-family: Lato , Arial, Helvetica; margin: 0 auto; text-align: center; padding-left: 50px; padding-right: 50px; background-color: white; max-width: 700px; border: 15px solid white; box-shadow: 0px 25px 15px 25px #333;">
        <div id="page-wrap">

                <h1 style="font-size: 46px;">Business Cyber Security Analysis</h1>

                <form action="./graph.php" method="post" id="quiz"> 

                <div style="display: inline-block; padding-bottom: 15px; margin-top:-25px;">
               <input type="input" name="name" Required id="name" placeholder="Name" size="14" style="margin:10px;" />
               <input type="input" name="companyname"Required id="companyname" placeholder="Company Name" size="14" style="margin:10px;" />
               <input type="input" name="position"Required id="position" placeholder="Company Position" size="14" style="margin:10px;"  />
               <br />
               <input type="input" name="email" Required id="email" placeholder="Email Address" size="14" style="margin-right:10px;"  >
               <input type="input" name="phone" Required id="phone" placeholder="Phone" size="14" style="margin-left:10px;"  />
               <br />



<p style="font-size: 18px;">

Please answer this quiz honestly. We are attempting to get an initial asessment on your businesses security posture and needs.
<br />

Upon completing this questionnaire, your Analysis® results  graph will be displayed to you.

<br /><br />

+ (Plus) means I AGREE, YES or MOSTLY YES

<br />

M (Middle) means UNCERTAIN, MAYBE, NEITHER YES or NO

<br />

- (Minus) means I DISAGREE, NO or MOSTLY NO

</p>
</div>
<br /><br />

<div style="margin: 0 auto; max-width: 1200px; text-align: center;">


            <ol>

<?php

$question_file = './quiz_questions.txt';
$numb = 1;

//For each question in file
foreach(file($question_file) as $question)
{

	echo("<div style='font-size: 18px; display:inline-block;'>$numb. $question</div><br /><br /><div style='font-size: 21px; display: inline-block;'><input type='radio' name='question-$numb-answers' id='question-$numb-answers-A' value='0' /><label for='question-$numb-answers-A'> + </label><input type='radio' name='question-$numb-answers' id='question-$numb-answers-B' value='3' /><label for='question-$numb-answers-B'> M </label><input type='radio' name='question-$numb-answers' id='question-$numb-answers-C' value='9' /><label for='question-$numb-answers-C'> - </label></div><br /><br />");
	$numb++;

}

?>

            </ol>

            <input type="submit" value="Submit" class="submitbtn" />

                </form>
        </div>

</div>
</body>

</html>
