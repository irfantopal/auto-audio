<!DOCTYPE html>
<html>
    <head>
        <title>Auto Audio - Made by Irfan Topal</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">  
    </head>
    <body>
        <h2>
        Auto Audio - Made by Irfan Topal
        </h2>

        <table>
            <tr>
                <th>Audio name</th>
                <th>Hear</th>     
            </tr>
            <?php 
                $files = array();
                $dir = "audios";
                $dh  = opendir($dir);
                while (false !== ($filename = readdir($dh)) ) {
                    if ($filename != "." && $filename != "..") {
                        $files[] = $filename;
                    }
                }

                sort($files, SORT_STRING);

                foreach($files as $file){
                    $maxfileend = 3; 
                    $maxendfilename = -4;
                    $filedir = "audios/".$file;
                    $urlname = substr($file, 0, $maxfileend);
                    $name = substr($file, -0, $maxendfilename);

                    echo "<tr>\n";
                    echo "<td>$name</td>\n";
                    echo "<td><audio controls>
                    <source src=".$filedir." type='audio/mpeg'>
                        Your browser is not supporting.
                </audio></td>\n";
                    echo "</tr>\n";

                }
            ?>
        </table>
    </body>
</html>

            

