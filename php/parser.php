<?php

$myfile = fopen("feed.txt", "r") or die("Unable to open file!");

//Split the data to separate register number and value
$split = [];
$x = 0;
while (! feof($myfile)){
    $split[$x] = (explode(":", fgets($myfile)));
    $x++;
}

// Prepare data for the datatable by creating a nested array of objects
$data = array();
for($i = 1; $i < count($split); $i++){
    $y = $split[$i][0];
    $unit = "";
    if($y == 1 or $y == 2){ // Add descriptions and some unit types
        $description = "Flow rate";
        $unit = "m3/h";
        }
    elseif ($y == 3 or $y == 4){
        $description = "Energy flow rate";
        $unit = "GJ/h";
    }
    elseif($y == 5 or $y == 6){
        $description = "Velocity";
        $unit = "m/s";
    }
    elseif($y == 7 or $y == 8){
        $description = "Fluid sound speed";
        $unit = "m/s";
    }
    elseif($y == 9 or $y == 10){
        $description = "Positive accumulator";
    }
    elseif($y == 11 or $y == 12){
        $description = "Positive decimal fraction";
    }
    elseif($y == 13 or $y == 14){
        $description = "Negative accumulator";
    }
    elseif($y == 15 or $y == 16){
        $description = "Negative decimal fraction";
    }
    elseif($y == 17 or $y == 18){
        $description = "Positive energy accumulator";
    }
    elseif($y == 19 or $y == 20){
        $description = "Positive energy decimal fraction";
    }
    elseif($y == 21 or $y == 22){
        $description = "Negative energy accumulator";
    }
    elseif($y == 23 or $y == 24){
        $description = "Negative energy decimal fraction";
    }
    elseif($y == 25 or $y == 26){
        $description = "Net accumulator";
    }
    elseif($y == 27 or $y == 28){
        $description = "Net decimal fraction";
    }
    elseif($y == 29 or $y == 30){
        $description = "Net energy accumulator";
    }
    elseif($y == 31 or $y == 32){
        $description = "Net energy decimal fraction";
    }
    elseif($y == 33 or $y == 34){
        $description = "Temperature #1/inlet";
        $unit = "C";
    }
    elseif($y == 35 or $y == 36){
        $description = "Temperature #2/outlet";
        $unit = "C";
    }
    elseif($y == 37 or $y == 38){
        $description = "Analog input at A13";
    }
    elseif($y == 39 or $y == 40){
        $description = "Analog input at A14";
    }
    elseif($y == 41 or $y == 42){
        $description = "Analog input at A15";
    }
    elseif($y == 43 or $y == 44){
        $description = "Current input at A13";
    }
    elseif($y == 45 or $y == 46){
        $description = "Current input at A13";
    }
    elseif($y == 47 or $y == 48){
        $description = "Current input at A13";
    }
    elseif($y == 49 or $y == 50){
        $description = "System password";
    }
    elseif($y == 51){
        $description = "Password for hardware";
    }
    elseif($y == 53 or $y == 54 or $y == 55){
        $description = "Date and time";
    }
    elseif($y == 56){
        $description = "Day + hour for auto-save";
    }
    elseif($y == 59){
        $description = "Key to input";
    }
    elseif($y == 60){
        $description = "Go to Window #";
    }
    elseif($y == 61){
        $description = "LCD Back-lit light for number of seconds";
    }
    elseif($y == 62){
        $description = "Pulses left for OCT";
    }
    elseif($y == 72){
        $description = "Error code";
    }
    elseif($y == 77 or $y == 78){
        $description = "PT100 resistance of inlet";
    }
    elseif($y == 79 or $y == 80){
        $description = "PT100 resistance of outlet";
    }
    elseif($y == 81 or $y == 82){
        $description = "Total travel time";
    }
    elseif($y == 83 or $y == 84){
        $description = "Delta travel time";
    }
    elseif($y == 85 or $y == 86){
        $description = "Upstream travel time";
    }
    elseif($y == 87 or $y == 88){
        $description = "Downstream travel time";
    }
    elseif($y == 89 or $y == 90){
        $description = "Output current";
    }
    elseif($y == 92){
        $description = "Working step and signal quality";
    }
    elseif($y == 93){
        $description = "Upstream strength";
    }
    elseif($y == 94){
        $description = "Downstream strength";
    }
    elseif($y == 96){
        $description = "Language used in user interface";
    }
    elseif($y == 97 or $y == 98){
        $description = "The rate of the measured travel time by the calculated travel time";
    }
    elseif($y == 99 or $y == 100){
        $description = "Reynolds number";
    }
    else{
        $description = "None";
    }

    // Create the final nested array containing the data
    $data[] = array(
        'Register' =>$split[$i][0], 'Value' => $split[$i][1], 'Description' => $description, 'Unit' => $unit
    );
}

// Send the data to frontend as JSON format
$results = array(
"sEcho" => 1,
"iTotalRecords" => count($data),
"iTotalDisplayRecords" => count($data),
"aaData"=>$data,
);

echo json_encode($results);
fclose($myfile);

