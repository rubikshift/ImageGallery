<?php
    function getDB()
    {
        $mongo = new MongoClient("mongodb://localhost:27017", ['username' => 'wai_web', 'password' => 'w@i_w3b', 'db' => 'wai']);
        $db = $mongo->wai;
        
        return $db;
    }

    function addUser($email, $username, $password)
    {
        $db = getDB();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $newUser = ['email' => $email, 'username' => $username, 'password' => $hash];
        
        if(checkIfUserNameExists($username) != true)
        {   
            $db->users->insert($newUser);
            return true;
        }
        else
            return false;
    }

    function checkIfUserNameExists($username)
    {
        $db = getDB();
        $query = ['username' => $username];
        $result = $db->users->findOne($query);

        if(empty($result))
            return false;
        else
            return true;
    }

    function signInUser($username, $password)
    {
        $db = getDB();
        
        if(checkIfUserNameExists($username))
        {
            $query = ['username' => $username];
            $user = $db->users->findOne($query);
            if(password_verify($password, $user['password']))
            {
                session_regenerate_id();
                $_SESSION['user_id'] = $user['_id']; 
                return true;    
            }
        }
        else return false;
    }

    function addImage($title, $author, $original,  $watermarked, $thumbnail, $visibility)
    {
        $db = getDB();
        $newImage = ['title' => $title, 'author' => $author, 'original' => $original, 'watermarked' => $watermarked, 'thumbnail' => $thumbnail, 'visibility' => $visibility];

        if(checkIfImageNameExists($newImage) != true)
        {
            $db->gallery->insert($newImage);
            return true;
        }
        else
            return false;    
    }

    function checkIfImageNameExists($image)
    {
        $db = getDB();
        $query = ['original' => $image['orginal']];
        $result = $db->gallery->findOne($query);

        if(empty($result))
            return false;
        else
            return true;
    }

    /*function removeCollections()
    {
        $db = getDB();
        $db->users->remove();
        $db->gallery->remove();
    }*/

?>