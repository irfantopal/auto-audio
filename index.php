<!DOCTYPE html>
<html>
    <head>
        <title>Auto Audio</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">  
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Play</th>     
            </tr>
            <?php 
                $dir = "audios/"; // The folder where the audio files are. Ex. "audios/". Don't forget the / after the folder name.

                $files = array();
                $dh  = opendir($dir);
                while (false !== ($filename = readdir($dh)) ) {
                    if ($filename != "." && $filename != "..") {
                        $files[] = $filename;
                    }
                }

                sort($files, SORT_STRING);

                foreach($files as $file){
                    $filedir = $dir.$file;
                    $name = pathinfo($file, PATHINFO_FILENAME);

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