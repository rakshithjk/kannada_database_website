<?php

    session_start();
    $sess = 0;
    print_r($_SESSION);
    if(($_SESSION['signed_in'])==true)
    {
            $sess =1;
            
?>


<html> 
<head> 
<title>Kannada Database</title>
<link rel="stylesheet" type="text/css" href="../style.css">
<style>
<!--div .qwe{ background-color: white; color:blue; border: solid 2px black; margin: 30px; font-family: Trebuchet MS;}--> 
.qwe{background-color: yellow; color:red; border: solid 2px black; margin: 80px; font-family: Trebuchet MS;text-size:35px;}
.we{text-size:15px;}
</style>
</head> 

<body style="background-color: #f4f4f4;">

<header id="litbg" style="background-image: url(bg.jpg);
    width:100%;height:500px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;">

<div class="row">
    <div class="logo">
        
            <img src="../img/logo.png">
        
    </div>
    <ul class="main-nav"  >
        <li><a  href="../index.php"><span style="color:red;">HOME</span></a></li>
        <li><a  href="../movies.php"><span style="color:red;">MOVIES</span></a></li>
        <li><a href="../literature.php"><span style="color:red;">LITERATURE</span></a></li>
        <li><a  href="../songs.php"><span style="color:red;">SONGS</span></a></li>
        <li><a class="current" href="../forum.php"><span style="color:red;">FORUM  </span></a></li>
        <li class="login" id="login" style="color:red;visibility:visible;"><a href="../login.php"><span style="color:red;">SIGN-IN/REGISTER</span></a></li>
        <li class="logout" id="logout" style="color:red;visibility:hidden;"><a href="../logout.php"><span style="color:red;">LOGOUT</span></a></li>
    </ul>
</div>
<script>
var a = "<?php echo $sess; ?>"; 
if (a == 1)
{
    var lin = document.getElementById("login").style;
    var lot = document.getElementById("logout").style;
    lin.visibility ="hidden";
    lin.display="none";
    lot.visibility="visible";
}
if ( a==0 )
{
    var lin = document.getElementById("login").style;
    var lot = document.getElementById("logout").style;
    lin.visibility ="visible";
    lot.visibility="hidden";
    lot.display="none";
}

</script> 
</header>




<?php
//create_cat.php
include '../connect.php';

 $cat = 1;
 $tp = $_GET['id'];

        //display category data8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
        //do a query for the topics
        $sql = "SELECT
    topic_id,
    topic_subject
FROM
    topics
WHERE
    topics.topic_id = " . mysqli_real_escape_string($conn, $_GET['id']);
         
        $result = mysqli_query($conn,$sql);
         
        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.' . mysqli_error($conn);
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else  //88888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
            {
                while($row = mysqli_fetch_assoc($result))
        {
            echo '<h2>POSTs in ′' . $row['topic_subject'] . '′ category</h2>';
        }
     
        //do a query for the topics
        $sql = "SELECT
    posts.post_topic,
    posts.post_content,
    posts.post_date,
    posts.post_by,
    users.user_id,
    users.user_name
FROM
    posts
LEFT JOIN
    users
ON
    posts.post_by = users.user_id
WHERE
    posts.post_topic = " . mysqli_real_escape_string($conn,$tp);
         
        $result = mysqli_query($conn,$sql);
         
        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else
            {
                //prepare the table
                echo '<table border="1" style="background-color:lightblue;width:100%;">
                      <tr>
                        <th></th>
                        <th>Topic</th>
                        <th>Created on</th>
                        <th>Created By</th>
                        <th></th>
                      </tr>'; 
                     
                while($row = mysqli_fetch_assoc($result))
                {    $i = 0;           
                    echo '<tr>';
                    echo '<td>';
                            $i= $i +1;
                            echo ++$i;
                        echo '</td>';
                        echo '<td class="leftpart">';
                            echo '<h3>' . $row['post_content'] . '<h3>';
                        echo '</td>';
                        echo '<td class="rightpart">';
                            echo date('d-m-Y', strtotime($row['post_date']));
                        echo '</td>';
                         echo '<td class="rightpart">';
                            echo '<h3>' . $row['user_name'] . '<h3>';
                        echo '</td>';
                        echo'<td>';

                        $var_value = $row['post_topic'];
 echo '<h3><form method="get" action="reply_form.php"><input type="hidden" name="id" value= '. $var_value . '><input type="submit" value= "REPLY" style="background-color:red;padding: 15px 32px;text-align: center;font-size: 16px;"></form></h3>';
                        echo '</td>';
                    echo '</tr>';
                }
            }
 
            }
        }
    }
}

?>  
<script type="text/javascript">
    function reply()
    {
        var id = $row[post_topic];
        location.href = 'reply_form.phpid';
    }
</script>