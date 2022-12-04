<?php
    echo "<h1>Hello Adv css</h1>";

    // int:Any integer number
    //  boot: True or False
    // char:It means one character
    // float: Float Number
    // double: Bigger Float

    // string: It is a set of characters

    $fName = "Nao";
    $lName = "Aoyama";

    // echo $fName." ".$lName;
    // concatenate


    // $courseWork = 90;
    // $midTerm = 87;
    // $finalExam = 100;
    // $courseWork = 95;

    // $student = [];
    // // ["Pablo"][90][87][100]
    // $student[] = "pablo";
    // $student[] = 90;
    // $student[] = 87;
    // $student[] = 100;
    // $student[] = "Nao";
    // $student[] = 92;
    // $student[] = 72;
    // $student[] = 85;

    // foreach($student as $slot){
    //     echo "$slot<br>";
    // }

    // for($i =2; $i < count($student); $i+=4){
    //    echo ($student[$i])."<br>";
    // }

    // $student = [];
    // $student["pablo"] = "Pablo";
    // $student["pablo_cw"] = 90;
    // $student["pablo_mt"] = 87;
    // $student["pablo_fe"] = 100;
    // $student["nao"] = "Nao";
    // $student["nao_cw"] = 92;
    // $student["nao_mt"] = 72;
    // $student["nao_fe"] = 85;
    
    // var_export($student);

    $student = [];
    $student["pablo"] = [];
    $student["nao"] = [];

    $student["pablo"]["name"] = "Pablo";
    $student["pablo"]["cw"] = 90;
    $student["pablo"]["mt"] = 87;
    $student["pablo"]["fe"] = 100;
    
    $student["nao"]["cw"] = 92;
    $student["nao"]["mt"] = 72;
    $student["nao"]["fe"] = 85;

    $student = (object)$student;

    // var_export($student["pablo"]);

    var_export($student);




//    var_export($student[3]);

    echo "<section>
            Coursework : ". $courseWork. 
        " </section>";
    echo "<section>
            Midterm : ". $midTerm. 
        " </section>";
    echo "<section>
            Finalexam : ". $finalExam. 
        " </section>";
    echo "<section>
            Average : ". (($courseWork+$midTerm+$finalExam)/3);
        " </section>";
    echo "<section>
            Did the student pass?:".
        " </section>";
    
?>