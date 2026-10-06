<?php
$Numbers=array(
       5, -7, 12, 10, -7, 11,
    -6, 12, 1, -7, 2, 9
);
echo "<h2>Problem 1</h2>";

echo "<br>";
//question

        // 1 & 2. Print all elements

echo "Display all Elements of array numbers:<br>";
foreach($Numbers as $num){
     echo $num . " ";
}
echo "<br><br>";

    // 3. Total of all elements

$totolnum=0;
foreach($Numbers as $num){
    $totolnum +=$num;

}
    echo "totol of all elements = $totolnum <br>";

    // 4. Total of even elements
$Eventotol=0;

foreach($Numbers as $num){
    if($num % 2==0){
        $Eventotol += $num;

    }
}
echo "totol even numbers is = $Eventotol<br>";

// 5. Total of odd elements

$OddNumber=0;
foreach($Numbers as $num){
    if($num % 2 != 0){
        $OddNumber =+ $num;
    }
}
echo "totol of odd numbers is = $OddNumber<br>";

// 6 Find minimum and its positions

$min = min($Numbers);

echo "Minimum element = $min<br>";
echo "Minimum positions: ";

foreach ($Numbers as $index => $num) {
    if ($num == $min) {
        echo $index . " ";
    }
}

echo "<br>";

// 7. Find maximum and its positions
$max = max($Numbers);

echo "Maximum element = $max<br>";
echo "Maximum positions: ";

foreach ($Numbers as $index => $num) {
    if ($num == $max) {
        echo $index . " ";
    }
}

echo "<h2>Problem 2</h2>";

$colors=array(
    "light"=>array(
         "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),
        "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

echo "<table border='1' cellpadding='10'>";

// Column headings
echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";



// Rows
foreach ($colors as $rowName => $row) {

    echo "<tr>";

    echo "<th>$rowName</th>";

    foreach ($row as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "<h2>Problem 3</h2>";

$matrix=array(
    array(2, -6, 8),
    array(7,8,-6),
    array(-6,1,6)
);
    //prints all of the elements

    
echo "<h3>Array Elements</h3>";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {
        echo $matrix[$i][$j] . " ";
    }

    echo "<br>";
}

// 3. Total of odd elements

$oddTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] % 2 != 0) {
            $oddTotal += $matrix[$i][$j];
        }

    }
}

echo "<br>Total of odd elements = $oddTotal<br>";


// 4. Total of even elements

$evenTotal = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] % 2 == 0) {
            $evenTotal += $matrix[$i][$j];
        }

    }
}

echo "Total of even elements = $evenTotal<br>";



// 5. Total of each row

echo "<br><b>Total of each row:</b><br>";

for ($i = 0; $i < 3; $i++) {

    $rowTotal = 0;

    for ($j = 0; $j < 3; $j++) {
        $rowTotal += $matrix[$i][$j];
    }

    echo "Row " . ($i + 1) . " = $rowTotal<br>";
}

// 6. Total of each column

echo "<br><b>Total of each column:</b><br>";

for ($j = 0; $j < 3; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < 3; $i++) {
        $columnTotal += $matrix[$i][$j];
    }

    echo "Column " . ($j + 1) . " = $columnTotal<br>";
}

// 7. Total of each diagonal

$mainDiagonal = 0;
$secondDiagonal = 0;

for ($i = 0; $i < 3; $i++) {

    $mainDiagonal += $matrix[$i][$i];

    $secondDiagonal += $matrix[$i][2 - $i];
}
echo "<br>";
echo "Main diagonal total = $mainDiagonal<br>";
echo "Second diagonal total = $secondDiagonal<br>";

// 8. Total of all elements

$total = 0;

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {
        $total += $matrix[$i][$j];
    }

}

echo "<br>Total of all elements = $total<br>";

// 9. Minimum element and positions

$min = $matrix[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] < $min) {
            $min = $matrix[$i][$j];
        }

    }
}

echo "<br>Minimum element = $min<br>";
echo "Minimum positions: ";


for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] == $min) {
            echo "[$i][$j] ";
        }

    }
}

echo "<br>";

// 10. Maximum element and positions

$max = $matrix[0][0];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] > $max) {
            $max = $matrix[$i][$j];
        }

    }
}

echo "Maximum element = $max<br>";
echo "Maximum positions: ";

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($matrix[$i][$j] == $max) {
            echo "[$i][$j] ";
        }

    }
}

echo "<h2>Problem 4</h2>";

$students = array(

    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "laba dhagax ,Wardhiigleey"
    ),

       "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),


    "CA221_2" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);
echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>Student ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $id => $student) {

    echo "<tr>";

    echo "<td>$id</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";

echo "<h2>problem 5</h2>";

$transcript = array(

    "Semester 1" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),
    
            "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )
    ),

        "Semester 2" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

                "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )
    )
);

// Print the array elements as a table

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";


foreach ($transcript as $semester => $courses) {

    foreach ($courses as $course => $data) {

        echo "<tr>";

        echo "<td>$semester</td>";
        echo "<td>$course</td>";
        echo "<td>" . $data["CW1"] . "</td>";
        echo "<td>" . $data["MidTerm"] . "</td>";
        echo "<td>" . $data["CW2"] . "</td>";
        echo "<td>" . $data["Final"] . "</td>";
        echo "<td>" . $data["Total"] . "</td>";
        echo "<td>" . $data["Status"] . "</td>";

        echo "</tr>";
    }
}
echo "</table>";




?>