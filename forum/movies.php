<?php
    session_start();
    $sess = 0;
    print_r($_SESSION);
    if(($_SESSION['signed_in'])==true)
    {
            $sess =1;
            
    }
    
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
        
            <img src="img/logo.png">
        
    </div>
    <ul class="main-nav"  >
        <li><a  href="index.html"><span style="color:red;">HOME</span></a></li>
        <li><a  href="movies.php"><span style="color:red;">MOVIES</span></a></li>
        <li><a href="literature.php"><span style="color:red;">LITERATURE</span></a></li>
        <li><a  href="songs.php"><span style="color:red;">SONGS</span></a></li>
        <li><a class="current" href="forum.php"><span style="color:red;">FORUM  </span></a></li>
        <li class="login" id="login" style="color:red;visibility:visible;"><a href="login.php"><span style="color:red;">SIGN-IN/REGISTER</span></a></li>
        <li class="logout" id="logout" style="color:red;visibility:hidden;"><a href="logout.php"><span style="color:red;">LOGOUT</span></a></li>
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
</div>


</script> 
</header>
<?php
//create_cat.php
include '../connect.php';

 $cat = 1;
//first select the category based on $_GET['cat_id']
$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories
        WHERE
            cat_id = " . mysqli_real_escape_string($conn,$_GET['id']);

$result = mysqli_query($conn,$sql);
 
if(!$result)
{
    echo 'The category could not be displayed, please try again later.' . mysqli_error($conn);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This category does not exist.';
    }
    else
    {
        //display category data
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<h2>Topics in ′' . $row['cat_name'] . '′ category</h2>';
        }
     
        //do a query for the topics
        $sql = "SELECT  
                    topic_id,
                    topic_subject,
                    topic_date,
                    topic_cat
                FROM
                    topics
                WHERE
                    topic_cat = " . mysqli_real_escape_string($conn,$_GET['id']);
         
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
                        <th>Topic</th>
                        <th>Created on</th>
                      </tr>'; 
                     
                while($row = mysqli_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td class="leftpart">';
                    $var_value = $row['topic_id'];
 echo '<h3><form method="get" action="topicv.php"><input type="hidden" name="id" value= '. $var_value . '><input type="submit" value= '. $row['topic_subject'] .' style="background-color:red;padding: 15px 32px;text-align: center;font-size: 16px;"></form>' . $row['topic_subject'].'</h3>';



                        echo '</td>';
                        echo '<td class="rightpart">';
                            echo date('d-m-Y', strtotime($row['topic_date']));
                        echo '</td>';
                    echo '</tr>';
                }
            }
        }
    }
}   
?>  
</body>
</html>