<?php
$questions =[


['question'=>'What is 2+2=?','correct'=>'4'],
['question'=>'What is the capital of France ?','correct'=>'paris'],
['question'=>'who wrote "Hamlet"?','correct'=>'shakespeare'],

];
$answers=[];
foreach($questions as $index=>$question){
    echo ($index+1).".".$question['question']."\n";
    $answers[]=trim(readline("Your answer :"));
}

function evaluateQuiz(array $questions ,array $answers): int{
    $score=0;
    foreach($questions as $index=>$question){
        if($answers[$index]===$question['correct']){
           $score++;
        }
       
}
return $score;
}

    $score=evaluateQuiz( $questions, $answers);
    echo "\n you Score ". $score . "  out of ".count($questions)."\n";
    if($score===count($questions)){
        echo"Excellent job !\n";
    }

    elseif($score>1){
        echo"Good effort !\n";
    }
    else{
        echo "Better luck next time !\n";
    }












