<?php
    function checkPng()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $fileName = $_FILES['image']['tmp_name'];
        $mimeType = finfo_file($finfo, $fileName);

        if($mimeType === 'image/png')
            return true;
        else
            return false;
    }

    function checkJpg()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $fileName = $_FILES['image']['tmp_name'];
        $mimeType = finfo_file($finfo, $fileName);

        if($mimeType === 'image/jpeg')
            return true;
        else
            return false;
    }

    function checkImage()
    {
        if($_FILES['image']['size'] == 1024*1024)
        {
            $errors['size'] = false;
            if($_FILES['type'] == 'image/jpeg')
                $errors['type'] = !checkJpg());
            elseif($_FILES['tpye'] == 'image/png')
                $errors['type'] = !chceckPng();
            else 
                $errors['type'] = true;
        }
        else 
            $errors['size'] = true;
        return $errors;
    }

    function moveFile()
    {
        $uploadDir = 'web/images/';
        $target = $uploadDir . $_FILES['image']['name'];

        move_uploaded_file($_FILES['image']['tmp_name'], $target); 
    }

    function addWatermark($watermark)
    {
        $uploadDir = 'web/images/';
        $imagePath = $uploadDir . $_FILES['image']['name'];
        if($_FILES['image']['type'] == 'image/png')
            $image = imagecreatefrompng($imagePath);
        elseif($_FILES['image']['type'] == 'image/jpg')
            $image = imagecreatefromjpeg($imagePath);
        $temp = imagecreate(100, 100);
        $white = imagecolorallocate($temp, 255, 255, 255);
        imagestring($image, 3, 1, 1, $watermark, $white);
        imagedestroy($temp);
        if($_FILES['image']['type'] == 'image/png')
        {
            $suffix = '.png';
            $fileName = basename($_FILES]['image']['name']) . 'watermarked' . $suffix;
            $target = $uploadDir . $fileName;
            imagepng($image, $fileName); 
        }
        elseif($_FILES['image']['type'] == 'image/jpg')
        {
            $suffix = '.jpg';
            $fileName = basename($_FILES]['image']['name']) . 'watermarked' . $suffix;
            $target = $uploadDir . $fileName;
            imagejpeg($image, $target); 
        }
        imagedestroy($image);
        return $fileName;
    }

    function generateMiniImage($fileName)
    {
        $uploadDir = 'web/images/';
        $imagePath = $uploadDir . $fileName;
        if($_FILES['image']['type'] == 'image/png')
            $image = imagecreatefrompng($imagePath);
        elseif($_FILES['image']['type'] == 'image/jpg')
            $image = imagecreatefromjpeg($imagePath);
        $newWidth = 200;
        $width = imagesx($image);
        $height = imagesy($image);
        $newHeight = 125;
        $newImage = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        if($_FILES['image']['type'] == 'image/png')
        {
            $suffix = '.png';
            $fileName = basename($fileName) . 'mini' . $suffix;
            $target = $uploadDir . $fileName;
            imagepng($newImage, $fileName); 
        }
        elseif($_FILES['image']['type'] == 'image/jpg')
        {
            $suffix = '.jpg';
            $fileName = basename($fileName) . 'mini' . $suffix;
            $target = $uploadDir . $fileName;
            imagejpeg($newImage, $target); 
        }
        imagedestroy($image);
        imagedestroy($newImage);
        return $fileName;
    }

?>