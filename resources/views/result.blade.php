
<?php
if (isset($_GET['submit'])){
    $value = $_GET['name'];  
    $_result = ConverToRoman($value);
}

function ConverToRoman($num){ 
    $n = intval($num); 
    $res = ''; 

    //array of roman numbers
    $romanNumber_Array = array( 
        'L' => 50000,       
        '_XL'=>40000,
        '_X_X_X'=>30000,
        '_XX'=>20000,
        '_X' => 10000,
        '_IX'=>9000,
        '_VMMM'=>8000,
        '_VMM'=>7000,
        '_VM' =>6000,
        '_V'=>5000,
        '_I_V'=>4000,
        'MMM'=>3000,
        'MM'=>2000,
        'M'  => 1000, 
        'CM' => 900, 
        'D'  => 500, 
        'CD' => 400, 
        'C'  => 100, 
        'XC' => 90, 
        'XL' => 40, 
        'X'  => 10, 
        'IX' => 9, 
        'V'  => 5, 
        'IV' => 4, 
        'I'  => 1); 

    foreach ($romanNumber_Array as $roman => $number){ 
        $matches = intval($n / $number); 
        $res .= str_repeat($roman, $matches); 
        $n = $n % $number; 
    } 

    return $res; 
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roman Calculator</title>
</head>
<body>
    <br>
    <body>
        <br>
        <div>
            <br>
            <center>
                <br>
                "Result is:"
            </center>
            <br>
        </div>
    </body>
    <div>
        <center>
            <?php echo $_result ; ?><br>
        </center>
            
    </div>
    <body>
        <br>

        <center>
            <a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">Calcuate again :)</a>
    
        </center>  
    </br>      
    </body>
</body>
</html>