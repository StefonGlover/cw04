<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CW - 04 #05</title>
</head>
<body>
    <?php 
        //Exercise 1
        echo "<h1>Exercise 1: Function</h1>";
        hello_world();

        function hello_world(){
            echo "Hello world!";
        }

        //Exercise 2
        echo "<h1>Exercise 2: Loops</h1>";

        for ($i = 1; $i <= 5; $i++)
        {
            for($j = 1; $j <= $i; $j++)
            {
                echo "*";
            }
            echo "<br>";
        }

        //Exercise 3
        echo "<h1>Exercise 3: Triangle Function</h1>";
        triangle(22);

        function triangle($size){
            if(is_numeric($size))
            {
                if($size < 1){
                    echo "Value cannot be less than 1!";
                }
                else
                {
                    for ($i = 1; $i <= $size; $i++)
                    {
                        for($j = 1; $j <= $i; $j++)
                        {
                            echo "*";
                        }
                        echo "<br>";
                    }
                }
            }
            else
            {
                echo "Please enter a number!";
            }
        }

         //Exercise 4
         echo "<h1>Exercise 4: Word Count Function</h1>";
         
         word_count("Hello, how are you?");
         
         function word_count($word){
            $count = str_word_count($word);
            echo $count;

         }

           //Exercise 5
           echo "<h1>Exercise 5: Word Occurance Function</h1>";

           countWords("I want to be the very best that no one ever was. To catch them is my real test, to train them is my cause.");

           function countWords($str){
               $words = str_word_count($str, 1);
               
               $numOfOccurance = array_count_values($words);

               print_r($numOfOccurance);
           }

            //Exercise 6
            echo "<h1>Exercise 6: Remove Function</h1>";

            $word = "Programmer";
        

            echo "Before character removal: ".$word . "<br>";

            remove_all($word, "m");

            function remove_all($str, $char){
                echo "After removal: " .preg_replace("[$char]", "", $str);
            }
            
    ?>
</body>
</html>