<?php

    $host='localhost';
    $user = 'root';
    $pass = '';
    $db='login';

    $con = mysql_connect($host, $user, $pass);

    if(!$con)
    {
    die("Connection failed: " . mysql_error());
    }

    mysql_select_db($db);

    if(isset($_POST['save']))
    {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO course(firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
        if (!mysql_query($sql, $con))
        {
            die('Error In Inserting Records' .mysql_error());
        }

    }

    if(isset($_POST['log-in'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM course WHERE email='".$email."'AND Password='".$password."'";
    
    $result=mysql_query($sql);
    
        if(mysql_num_rows($result)>0){
            echo " You Have Successfully Logged in";
            exit();
        }
        else{
            echo " You Have Entered Incorrect Password";
            exit();
        }
        
    }

?>
<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
    //Get user profile data from google
    $gpUserProfile = $google_oauthV2->userinfo->get();
    
    //Initialize User class
    $user = new User();
    
    //Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
    
    //Storing user data into session
    $_SESSION['userData'] = $userData;
    
    //Render facebook profile data
    if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
    $authUrl = $gClient->createAuthUrl();
    //$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="image/google/search.png"><p>Google</p></a>';
}
?>  
