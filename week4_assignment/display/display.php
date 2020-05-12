<?php
 
    function display($items)
    {
        $i = 0;
        echo '<table border="1">';
                echo '<thead>';
                    echo '<tr>';
                        echo '<th> Item </th>';
                        echo '<th> Price </th>';
                        echo '<th> Quantity </th>';
                        echo '<th> Method </th>';
                        echo '<th> Total </th>';
                    echo '</tr>';
                echo '</thead>';
                
            foreach ($items as $item) {
               
                echo '<tbody>';
                    echo '<tr>';
                        echo '<td> item' .++$i. '</td>';
                        echo '<td>' . $item->price  . '</td>';
                        echo '<td>' . $item->quantity . '</td>';
                        echo '<td>' . get_class($item) . '</td>';
                        echo '<td>' . $item->price * $item->quantity . '</td>';
                    echo '</tr>';
                echo '</tbody>';
            }
        echo '</table>';
    }

?>