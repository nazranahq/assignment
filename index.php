<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        require 'search.php';
        
        $array = [
            'id' => '2',
            'company' => 'augmedix'
        ];
        
        $search = new Search();
        
        echo (empty($search->hasItem(['company' => 'augmedix', 'id' => 2],'company'))) ? 'False' : 'True'."<br/>";
        echo (empty($search->hasItem(['company' => 'augmedix', 'id' => 2],'id'))) ? 'False' : 'True'."<br/>";
        echo (empty($search->hasItem(['company' => 'augmedix', 'id' => 2],'else'))) ? 'False' : 'True'."<br/>";
        echo "<br/>";
        print_r($search->only(['company' => 'augmedix', 'id' => 2], 'company'));
        echo "<br/>";
        print_r($search->only(['company' => 'augmedix', 'id' => 2], 'id'));
        echo "<br/>";
        print_r($search->only(['company' => 'augmedix', 'id' => 2], ['company', 'id']));   
        
    ?>
</body>
</html>