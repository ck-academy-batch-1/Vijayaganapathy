
<style>
    section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 15%;
    }
</style>




<section>


    <div>
       <?php
       for ($row=0; $row<7; $row++)
       {
         for ($column=0; $column<=7; $column++)
           {
                 if ((($column == 1 or $column == 5) and $row < 5) or ($row == 6 and $column == 3) or ($row == 5 and ($column == 2 or $column == 4)))
                   echo "**";    
               else  
                   echo " &nbsp; &nbsp; ";     
           }        
         echo "<br>";
       }
       echo "<br>";
       
       
       ?>
    </div>
<div>
    <?php
    for ($row=0; $row<7; $row++)
    {
      for ($column=0; $column<=7; $column++)
        {
       if ($column == 3 or ($row == 0 and $column > 0 and $column < 6) or ($row == 6 and $column > 0 and $column < 6))
                echo "**";    
            else  
                echo "&nbsp; &nbsp;  ";     
        }        
      echo "<br>";
    }
    ?>
</div>
    <div>
        <?php
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j <= 8; $j++) {
                if (($j == 4 and $i != 6) or ($i == 0 and $j > 2 and $j < 6) or ($i == 6 and $j == 3) or ($i == 5 and $j == 2))
                    echo "*";
                else
                    echo "&nbsp ";
                    if (($j == 4 and $i != 6) or ($i == 0 and $j > 2 and $j < 6) or ($i == 6 and $j == 3) or ($i == 5 and $j == 2))
                    echo "*";
                else
                    echo "&nbsp ";
            }
            echo "<br>";
        }
        ?>
    </div>


    <div>
        <?php
        for ($i = 0; $i <= 7; $i++) {
            for ($j = 0; $j <= 7; $j++) {
                if ((($j == 1 or $j == 5) and $i != 0) or (($i == 0 or $i == 3) and ($j > 1 and $j < 5)))
                    echo "*";
                else
                    echo "&nbsp ";
                    if ((($j == 1 or $j == 5) and $i != 0) or (($i == 0 or $i == 3) and ($j > 1 and $j < 5)))
                    echo "*";
                else
                    echo "&nbsp ";
            }
            echo "<br>";
        }

        ?>
    </div>


    <div>
        <?php
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j <= 8; $j++) {
                if ((($j == 1 or $j == 5) and $i < 2) or $i == $j and $j > 0 and $j < 4 or ($j == 4 and $i == 2) or (($j == 3) and $i > 3))
                    echo "*";
                else
                    echo "&nbsp ";
                    if ((($j == 1 or $j == 5) and $i < 2) or $i == $j and $j > 0 and $j < 4 or ($j == 4 and $i == 2) or (($j == 3) and $i > 3))
                    echo "*";
                else
                    echo "&nbsp ";
            }
            echo "<br>";
        }
        ?>
    </div>




</section>
