<div align="center">
<?php
    //var_dump($_FILES["file"]);
$ci=$_POST['ci'];

    $directorio = "../pdf/";
// i_2.jpg
    $archivo = $directorio . 'i_' . $ci. '.pdf';

    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

    // valida que es imagen
    $checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);

    //var_dump($size);

         //validando tamaño del archivo
        $size = $_FILES["file"]["size"];

        if($size > 10000000){
            echo "El archivo tiene que ser menor a 10Mb";
        }else{

            //validar tipo de imagen
            if($tipoArchivo == "pdf" || $tipoArchivo == "pdf"){
                // se validó el archivo correctamente
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
                    echo "<h2>El archivo se subió correctamente</h2>";
                    echo "<h4><a href='../admin.php'>Perfecto</a></h4>";
                }else{
                    echo "Hubo un error en la subida del archivo";
                }
            }else{
                echo "Solo se admiten archivos pdf";
            }
        }
    
      
?>
</div>