<?php
            $host="localhost";
            $user="root";
            $pwd="";
            $connect=mysqli_connect($host,$user,$pwd);
            if(!$connect){
                die("connection failed:".mysqli_connect_error());
            }
            else
            echo "connected successfully";
            $sql = "CREATE DATABASE music";
            if($connect->query($sql)==true){
                echo "db successfully created";
            }
            else
            die("connection failed:".mysqli_connect_error());
            mysqli_close($connect);
            ?>