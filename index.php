<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css"> <!--connect index.php to styles.css-->
    </head>

    <body>
        <h3>What is Your Favourite Programming Language?</h3> <!--Page Header-->
        
    <ol>
        <li>HTML</li> <!--choice list-->
        <li>CSS</li>
        <li>Javascript</li>
    </ol>
        
    <form action="choice.php" method="post"> <!--form element with post method-->
        <label for="choice">Your Choice:</label> <!--form label-->
        <select name="choice" id="choice"> <!--select element for the choice dropdown-->
            <option value="html">HTML</option> <!--dropdown choice -->
            <option value="css">CSS</option>
            <option value="js">Javascript</option>
        </select>
        <br><br>
        <label for="name">Name:</label> <!--Name label-->
        <input type="text" name="name" id="name" placeholder="Please Enter Your Name"> <!--textbox with a placeholder-->
        <br><br>
        <label for="id">ID:</label> <!--ID label-->
        <input type="text" name="id" id="id" placeholder="Please Enter Your ID">
        <br><br>
        <input type="submit" value="Submit"> <!--submit button-->
    </form>
    </body>

</html>