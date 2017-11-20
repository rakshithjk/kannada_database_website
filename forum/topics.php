<?php
    session_start();
    $sess = 0;
    print_r($_SESSION);
    if(($_SESSION['signed_in'])==true)
    {
            $sess =1;
            
    }
    else{header('Location:login.php');}

    
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

<body style="background-color: #f4f4f4">

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
echo '<h2>Create a topic</h2>';
if($_SESSION['signed_in'] == false)
{
    //the user is not signed in
    echo 'Sorry, you have to be <a href="/forum/signin.php">signed in</a> to create a topic.';
}
else
{
    //the user is signed in
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {   
        //the form hasn't been posted yet, display it
        //retrieve the categories from the database for use in the dropdown
        $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";
         
        $result = mysqli_query($conn,$sql);
         
        if(!$result)
        {
            //the query failed, uh-oh :-(
            echo 'Error while selecting from database. Please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                //there are no categories, so a topic can't be posted
                if($_SESSION['user_level'] == 1)
                {
                    echo 'You have not created categories yet.';
                }
                else
                {
                    echo 'Before you can post a topic, you must wait for an admin to create some categories.';
                }
            }
            else
            {
         
                echo '<form method="post" action="">
                    Subject: <input type="text" name="topic_subject" />
                    Category:'; 
                 
                echo '<select name="topic_cat">';
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                    }
                echo '</select>'; 
                     
                echo '<br><br>Message: <textarea name="post_content" /></textarea>
                    <br><input type="submit" value="Create topic" style="background-color:red;padding: 15px 32px;text-align: center;font-size: 16px;" />
                 </form>';
            }
        }
    }
    else
    {
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysqli_query($conn,$query);
         
        if(!$result)
        {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {
     
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
            $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('" . mysqli_real_escape_string($conn,$_POST['topic_subject']) . "',
                               NOW(),
                               " . mysqli_real_escape_string($conn,$_POST['topic_cat']) . ",
                               " . $_SESSION['user_id'] . "
                               )";
                      
            $result = mysqli_query($conn,$sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'An error occured while inserting your data. Please try again later.' . mysqli_error();
                $sql = "ROLLBACK;";
                $result = mysqli_query($conn,$sql);
            }
            else
            {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
                $topicid = mysqli_insert_id($conn);
                 
                $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . mysqli_real_escape_string($conn,$_POST['post_content']) . "',
                                  NOW(),
                                  " . $topicid . ",
                                  " . $_SESSION['user_id'] . "
                            )";
                $result = mysqli_query($conn,$sql);
                 
                if(!$result)
                {
                    //something went wrong, display the error
                    echo 'An error occured while inserting your post. Please try again later.' . mysqli_error();
                    $sql = "ROLLBACK;";
                    $result = mysqli_query($conn,$sql);
                }
                else
                {
                    $sql = "COMMIT;";
                    $result = mysqli_query($conn,$sql);
                     
                    //after a lot of work, the query succeeded!
                    echo 'You have successfully created <a href="topic.php?id='. $topicid . '">your new topic</a>.';
                }
            }
        }
    }
}

?>


</body>
</html>