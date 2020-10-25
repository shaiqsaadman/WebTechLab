<!DOCTYPLE html>
<html>
<head>
    <title>Practice on Makeup</title>
<body>
    
    <div>
        <?php
        if(isset($_POST['create']))
            echo 'its working!'


        ?>
    
    </div>

    <form action="myaction.php" method="post" >
        <label for="name">Name</label>
        <input type="text" id ="name" name="name">
        <br>
        
        <label for  ="password">Password</label>
        <input type="password" id="password" name="password">
        
        <button>Submit</button>
    
    
    </form>
    
    
    
</body>    
</head>
</html>
