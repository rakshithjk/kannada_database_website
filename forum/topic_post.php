<?php
include '../connect.php';
session_start();
 
echo '<h2>Create a topic</h2>';
if($_SESSION['username'] == false)
{
    //the user is not signed in
    echo 'Sorry, you have to be <a href="/forum/signin.php">signed in</a> to create a topic.';
}
else
{


   //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysqli_query($conn,$query);
        $_POST['topic_cat'] = 'MOVIES';
        $cat = $_POST['topic_cat'];
        $sub = $_POST['topic_subject'];
        $user = $_SESSION['username'];
        if(!$result)
        {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {
     
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
            $sql = "INSERT INTO `topics`( `topic_subject`, `topic_date`, `topic_cat`, `topic_by`)
                               
                   VALUES('$sub',
                               NOW(),
                               '$cat',
                               ' $user ')";
                      
            $result = mysqli_query($conn,$sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'An error occured while inserting your data. Please try again later.' . mysqli_error($conn);
                $sql = "ROLLBACK;";
                $result = mysqli_query($conn,$sql);
            }
            else
            {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
                $topicid = mysql_insert_id();
                 
                $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . mysql_real_escape_string($_POST['post_content']). "',
                                  NOW(),
                                  ".MOVIES.",
                                  " .$_SESSION['username']. "
                            )";
                $result = mysqli_query($conn,$sql);
                 
                if(!$result)
                {
                    //something went wrong, display the error
                    echo 'An error occured while inserting your post. Please try again later.' . mysql_error();
                    $sql = "ROLLBACK;";
                    $result = mysqli_query($conn,$sql);
                }
                else
                {
                    $sql = "COMMIT;";
                    $result = mysqli_query($conn,$sql);
                     
                    //after a lot of work, the query succeeded!
                   header('Location:topic.php?id='. $topicid );
                }
            }
        }
    }
?>
