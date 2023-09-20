////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////   index.php   /////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
<?php
session_start();
require_once 'db_connect.php';

if (isset($_POST['edit'])){ 
    header('Location: http://localhost:8000/edit.php');
    $_SESSION['id']=$_POST['id'];   
}


if (isset($_GET['page'])){
    $nbPage=$_GET['page'];
    $_SESSION['p']=$nbPage;
}else {
    $nbPage=1;
    $_SESSION['p']=$nbPage;
}

if (isset($_POST['delete'])){
    delete($_POST['id'],$nbPage);
}

$postsNumber=5;
$res=nokia("SELECT COUNT(*) as nb FROM posts");
$nb=$res[0]['nb'];
$start=($nbPage-1)*$postsNumber;
$end=(ceil($nb/$postsNumber));
$posts=nokia("SELECT * FRoM posts ORDER BY created_at DESC LIMIT $start, $postsNumber");require_once 'nav.html';
foreach ($posts as $p): ?>
    <div class="post">
        <div class="content">
            <p><?=$p['author']?></p>
            <p><?=$p['created_at']?></p>                    
        </div>
        <p class="title" ><?=$p['title']?></p>
        <p><?=$p['content']?></p>     
        <form method="post" class="form">
            <input type="hidden" name="id" value="<?=$p['id']?>">
            <input type="submit" name="edit" value="Edit" class="sb">
            <input type="submit" name="delete" value="Delete" class="sb">
        </form>
    </div>
    <?php endforeach;
?>

<div>
    <?php  if ($nbPage!=0) echo 'Page ' .$nbPage;?> 
    <button class="nb" disabled="<?php echo ($nbPage<=1)?'true':'false'?>">
    <?php
    if ($nbPage<=1) echo "Back";
    else {
        $cp=$nbPage-1;
        echo "<a href='?page=$cp'>Back</a>";
        
        };
    ?>
    </button>
    
    <button class="nb" disabled="<?php echo ($nbPage==$end)?'true':'false'?>">
    <?php 
    if ($nbPage==0)  echo "Next";
    else if ($nbPage==$end) echo "Next";
        else {
            $cp=$nbPage+1;
            echo "<a href='?page=$cp'>Next</a>";
            
        };
    ?>
    </button>
    
</div>
///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////   new_post.php   ///////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
<?php
require_once 'db_connect.php';


if (isset($_POST['sbtn'])) {
    $errors = [];
    $title = strip_tags(trim($_POST['title']));
    $author = strip_tags(trim($_POST['author']));
    $text = strip_tags(trim($_POST['text']));
    date_default_timezone_set('Europe/Luxembourg');
    $date=date('Y-m-d H:i:s');
    if (empty($_POST['title'])) $errors['title'] = 'Title is empty';
    if (empty($_POST['author'])) $errors['author'] = 'Author name is mandatory';
    if (empty($_POST['text'])) $errors['text'] = 'Input the text';
    if (empty($errors)) {
        $array['title']=$title;
        $array['text']=$text;
        $array['author']=$author;
        $array['date']=$date;
        post($array);
    }
};
require_once 'nav.html'; 
if (isset($mes)) echo $mes;
?>
<div class="newPost">
    <h1>New post</h1>
    <form method="POST" class="postForm">
        <div class="row">
            <label for="title">Title: </label>
            <input type="text" name="title" value="<?php if (isset($title)) echo @$title?>">
        </div>
        <p><?php if (isset($errors['title']))
            echo $errors['title'];?>
        </p>        
        <div class="row">
            <label for="author">Author: </label>
            <input type="text" name="author" value="<?php if (isset($author)) echo @$author?>">
        </div>
        <p><?php if (isset($errors['author']))
            echo $errors['author'];?>
        </p>
        <div class="row">
            <label for="text">Text: </label>
            <textarea name="text">
                <?php if (isset($text)) echo @$text;
                ?>
            </textarea>
        </div> 
        <p><?php if (isset($errors['text']))
            echo $errors['text']. '<br>';?>
        </p>
        <input type="submit" id="addnew" value="post" name="sbtn">
    </form>
</div>

/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////   edit.php   /////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
<?php
session_start();
require_once 'db_connect.php';

if (isset($_SESSION['id'])) {
    $id=$_SESSION['id'];
    $res=nokia("SELECT * FROM posts WHERE id=$id");
    $title=$res[0]['title'];
    $author=$res[0]['author'];
    $date=$res[0]['created_at'];
    $text=$res[0]['content'];
    $page=$_SESSION['p'];
    
};
if (isset($_POST['sbtn'])) {
    $errors = [];
    $title = strip_tags(trim($_POST['title']));
    $author = strip_tags(trim($_POST['author']));
    $text = strip_tags(trim($_POST['text']));
    if (empty($_POST['title'])) $errors['title'] = 'Title is empty';
    if (empty($_POST['author'])) $errors['author'] = 'Author name is mandatory';
    if (empty($_POST['text'])) $errors['text'] = 'Input the text';
    if (empty($errors)) {
        $array['title']=$title;
        $array['text']=$text;
        $array['author']=$author;
        $array['date']=$date;
        $array['id']=$id;
        update($array,$page);

    }
};

?>


<div class="newPost">
<h1>Change...</h1>
<form method="POST" class="postForm">
    <div class="row">
        <label for="title">Title: </label>
        <input type="text" name="title" value="<?php if (isset($title)) echo @$title?>">
    </div>
    <p><?php if (isset($errors['title']))
            echo $errors['title'];?>
    </p>   
    <div class="row">
        <label for="author" style="font-size:20px">Author: </label>
        <input type="text" name="author" value="<?php if (isset($author)) echo @$author?>">
    </div>
    <p><?php if (isset($errors['author']))
            echo $errors['author'];
        ?>
    </p>    
    <div class="row">
        <label for="text" style="font-size:20px">Text: </label>
        <textarea name="text">
                <?php if (isset($text)) echo @$text;
                ?>
            </textarea>
    </div>
    <p><?php if (isset($errors['text']))
            echo $errors['text'];
        ?>
    </p>
    

    <input type="submit" id="addnew" value="update" name="sbtn">
</form>
</div>

<?php 
if (isset($mes)) echo $mes;
?>    
//////////////////////////////////////////////////////////////////////////////////////
/////////////////////////   db_connect.php   /////////////////////////////////////////7
///////////////////////////////////////////////////////////////////////////////////////
<?php
function nokia($query){
    $db=mysqli_connect('db','root','root','mini_blog');
    $result=mysqli_query($db,$query);
    $r=mysqli_fetch_all($result, MYSQLI_ASSOC);
    return($r);
    mysqli_close($db);
};
function post($arr){
    $title=$arr['title'];
    $text=$arr['text'];
    $author=$arr['author'];
    $date=$arr['date'];
    $db=mysqli_connect('db','root','root','mini_blog');
    $newPost="INSERT INTO `posts`(`title`, `content`, `author`, `created_at`) VALUES ('$title','$text', '$author', '$date')";
    mysqli_query($db,$newPost);
    mysqli_close($db);
    header('location: /');
};

function update($arr,$page) {
    $title=$arr['title'];
    $text=$arr['text'];
    $author=$arr['author'];
    $date=$arr['date'];
    $id=$arr['id'];
    $db=mysqli_connect('db','root','root','mini_blog');
    $upPost= "UPDATE `posts`
    SET `id`='$id', `title`='$title', `author`='$author', `content`='$text', `created_at`='$date' 
    WHERE id=$id";
    mysqli_query($db,$upPost);
    header("Location: /?page=$page");
}

function delete($id,$page){
    $db=mysqli_connect('db','root','root','mini_blog');
    $delPost= "DELETE FROM posts
    WHERE id= $id";
    mysqli_query($db,$delPost);
    header("Location: /?page=$page");
}
?>
////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////  nav.html   ////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav id="header">    
    <ul>
        <li><a class="navbut" href="index.php">Posts</a></li>
        <li><a class="navbut" href="new_post.php">Create</a></li>
    </ul>
    <div id="nav">
      
    <img src="img/chat.jpeg" alt=""> 
     <h1>Chat</h1>
    </div>

</body>
</html>

</nav>
//////////////////////////////////////////////////////////////////////////////////////7///
//////////////////////////////   style.css   /////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
body {
    background-image:url(img/chat.jpeg);
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: rgb(230, 230, 230);
}
#header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items:center;
    border-radius:20px;
    background-color:pink;
    position: sticky;
    
}
ul{
    list-style:none;
    display:flex;
    flex-direction: row;
    gap:50px; 
    font-size: 25px;
}
.navbut {
    text-decoration: none;
    color:rgb(95, 25, 25);
    font-size:60px;
    background-color:rgb(241, 229, 231);
    padding:5px;
    margin:5px;
    border-radius:10px;

}
 #nav{
    display:flex;
    flex-direction:row;
    justify-content:center;
    align-items:center;
    width:30%;
}
#nav img{
    height:100px;
    box-shadow:0 0 10px brown;
    position: absolute;
    right:100px;
    
}
#nav h1 {
    font-size:60px;
    text-shadow:5px 5px 10px brown;
    z-index: 10;
}
.post{
    background-color: rgb(231, 225, 225);
    border-radius: 15px;
    border:1px solid pink;
    margin:10px 40% 10px 20px;
    padding:10px 30px;
    display:flex; 
    flex-direction:column;
}
.content {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.content p {
    font-style: italic;
}

.form{
    display: flex;
    flex-direction: row;
    justify-content: right;
    gap:20px;
}
.sb, .nb, #addnew {
    background-color: pink;
    border-radius: 10px;
    border:1px solid grey;
    padding:10px;
    width:70px;
    
}
.title {
    font-size:25px;
    font-weight: 900;
}
.nb a{
    text-decoration:none;
    color:black;
}
.nb.disabled{
    color:grey;
}
.newPost{
    margin:10px 40% 10px 20px;
    padding:10px;
    border-radius:20px; 
    background-color:rgb(231, 225, 225);
}
.newPost>h1{
    color:rgb(95, 25, 25);
    text-align: center;
}
.postForm{
    background-color:white; 
    margin:0 auto;
    padding:20px;
    width:70%;
    border-radius:20px;
    display: flex;
    flex-direction: column;
    justify-content: center; 
}

.row{
    height:30px;
    font-size: 20px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.postForm>p {
     color:red;
}
.postForm input{
    border-radius: 10px;
    min-height: 30px;
    height:fit-content;
    border:1px solid grey;
    width:80%;
}
.postForm textarea {
    resize:none;
    width:80%;
    height:50px;
}
#addnew {
    margin:10px auto;
    color:brown;
}
///////////////////////////////////////////////////////////////////////////////////////
