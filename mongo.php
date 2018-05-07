<?php
    function bson_de_array($array): int{
        $sim = 1;
        foreach ($array as $nome => $valor) {
            $sim = 1;
            try { $dado = ($valor->bsonSerialize() ? "Array \n" : "Array \n"); }catch(Error $e){ $dado = $valor; $sim = 0; }
            echo("<br>Nome : ".$nome."<br>Valor : ".$dado."<br>");
            if ($sim == 1){
                echo ("<br> Inicio do Array ".$nome." : <br>");
                bson_de_array($valor);
                echo ("<br> Final do Array ".$nome."<br>");
            }
        }
        return (0);
    }

    require '/home/aluno/public_html/vendor/autoload.php'; // include Composer goodies
    $username = "root";
    $password = "root";
    $mongo = new MongoDB\Client("mongodb://localhost", array("username" => $username, "password" => $password));
    $collection = $mongo->ifc->alunos;

    $find = ($collection->find());
    bson_de_array($find);

    echo ("<br><br><br><br><br><br>");

    $y = array( "y" => "fatorial" );
    $collection->insertOne( $y ); // insertMany

    echo ("Teste Mongo + y<br>");

    $find = ($collection->find());
    bson_de_array($find);

    echo ("<br><br><br><br><br><br>");

    $y = array("y" => "fatorial");
    $ym = array('$set' => array("y" => 10));
    $collection->updateOne($y, $ym); // updateMany or replaceOne

    echo ("Teste Mongo + y modificado<br>");
    
    $find = ($collection->find());
    bson_de_array($find);

    echo ("<br><br><br><br><br><br>");

    $y = array( "y" => 10 );
    $collection->deleteMany( $y ); // deleteOne

    echo ("Teste Mongo - y<br>");

    $find = ($collection->find());
    bson_de_array($find);

    echo ("<br><br><br><br><br><br>");

?>

