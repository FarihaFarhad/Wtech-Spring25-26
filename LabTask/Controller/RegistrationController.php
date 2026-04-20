<?php
session_start();

$name ="";
$email ="";
$website ="";
$comment ="";
$gender ="";

$datafile ="../data.json";

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name =$_POST["name"];
        $email =$_POST["email"];
        $website =$_POST["website"];
        $comment =$_POST["comment"];
        $gender =$_POST["gender"];


        if(empty($name) && !preg_match("/^[a-zA-Z ]*$/", $name))
            {
                echo "Invalid Name";
                
            }
        
        if (empty($email) || !preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) 
            {
                echo "Invalid email";
            }
                
        

        if (empty($website)&& !preg_match("/^(https?:\/\/)?([\w\-]+\.)+[\w\-]+(\/[\w\- .\/?%&=]*)?$/", $website)) 
            {
                echo "Invalid URL";
            }

        if (!isset($_POST["gender"])) 
            {
                echo "Gender is required";
            }

        else{
            echo "Login successful!<br>";

        }

        $formdata=array("name"=>$name, "email"=>$email, "website"=>$website, "comment"=>$comment,"gender"=>$gender );
        if(file_exists($datafile))
            {
                $existdata = file_get_contents($datafile);
                $tempdata = json_decode($existdata, true);
            }

            else{
                    $tempdata = array();
                }
            if(!is_array($tempdata))
                {
                    $tempdata = array();
                }
            $tempdata [] = $formdata;
            $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);

            if(file_put_contents($datafile,$jsondata)!==false)
                    {
                        echo "Data Saved Successfully <br>";
                    }
                    else{
                        echo "No Data Saved";
                    }
            $data = file_get_contents($datafile);
            $mydata = json_decode($data,true);

        }
            

    if(!isset($_SESSION["UserName"]) || isset($_COOKIE["UserName"]))
        {
            echo "Welcome Back";
        }
        else{
            echo "Please log In";
        }
            



        


        
    
    
    


?>





