1. Write a README that tells me how to install & current state + GIT repo address
2. Export the database as an .sql file
3. Create an index.php file in the root header('Location:'); to a file in 'view'
3. Create a footer that prints $_GET, $_POST & $_SESSION variables.
4. print $_SESSION['error'] and $_SESSION['message'] print in footer if exists.
5. Create menu.php in the view if $_SESSION['loggedin'] echo 'logout' else 'login'
6. login.php has a form that submits to ../controller/loggingin.php
7. loggingin.php: success $_SESSION['message'] = 'happy' else $_SESSION['error'] = 'bad'
8. register.php has a form that submits to ../controller/reging.php
9. reging.php if(true) $_SESSION['message'] = 'success' else $_SESSION['error'] = 'bad' 
10.acc.php secure it by checking $_SESSION['loggedin'] has button 'delete account'
11. git init, git commit, git push your code to a repository that you've created.
