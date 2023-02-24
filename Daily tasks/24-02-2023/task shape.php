
<h1>CAT</h1>
<pre> <?php

echo "     /\\_/\     <br>";
echo "     / o o \\   <br>";
echo "    (   \"   )   <br>";
echo "     \\~(*)~/   <br>";
echo "      / ^ \\     <br>";
echo "     /     \\   <br>";

?>
</pre>
<H1>GRANATE</H1>
<pre>
<?php

echo "            _____  <br>";
echo "         .-\"     \"-. <br>";
echo "       _/_/_|_|_\\_\\_\\_  <br>";
echo "      /_/|_||_||_||_|\\_\\ <br>";
echo "     |_|_|_||_||_||_|_|_|<br>";
echo "     |_|_|_||_||_||_|_|_|<br>";
echo "     |_|_|_||_||_||_|_|_|<br>";
echo "     |_|_|_||_||_||_|_|_|<br>";
echo "     |\\_\\_|_|_||_|_/ /| |<br>";
echo "     \\_\\_\\ | || | /_/ /  <br>";
echo "      \\_\\_\\|_||_|/_/ /   <br>";
echo "       `\\_\\ | || | /_/`    <br>";
echo "         `\"-|__||__|-\"`    <br>";
echo "            |__||__|       <br>";
echo "            /   | \\       <br>";
echo "           |____|____|     <br>";

?>

</pre>
<H1>HEART</H1>
<pre>
<?php
echo "<pre>";
$num = 10;
for($i=$num/2; $i<=$num; $i+=2)
{
    for($j=1; $j<$num-$i; $j+=2)
    {
        echo "&nbsp;";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    for($j=1; $j<=$num-$i; $j++)
    {
        echo "&nbsp;";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    echo "<br/>";
}
  
for($i=$num; $i>=1; $i--)
{
    for($j=$i; $j<$num; $j++)
    {
        echo "&nbsp;";
    }
    for($j=1; $j<=($i*2)-1; $j++)
    {
        echo "*";
    }
    echo "<br/>";
}
echo "</pre>";
?>

</pre>


<style>
    section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 15%;
    }
</style>



