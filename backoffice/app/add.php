<?php
function newVideo($name, $artist, $style, $filename, $infos)
{
    $sql1 = "INSERT INTO" . $this->video . " SET id_video=:id_video, artist=:artist, 
 style=:style, filename=:filename, infos=:infos";
    $video = $this->connexion->prepare($sql1);
    $video->bindParam(':id_video', $this->$name);
    $video->bindParam(':artist', $this->$artist);
    $video->bindParam(':style', $this->$style);
    $video->bindParam(':filename', $this->$filename);
    $video->bindParam(':infos', $this->$infos);
    if($video->execute())
        return true;
    else return false;

}
function newRapper($name, $infos)
{
    $sql2 = "INSERT INTO" . $this->rap . " SET artist=:rapper, infos=:infos";
    $rap = $this->connexion->prepare($sql2);
    $rap->bindParam(':rapper', $this->$name);
    $rap->bindParam(':infos', $this->$infos);

}
function newRocker($name,$infos)
{
    $sql3 = "INSERT INTO" . $this->rock . "SET artist=:rocker, infos=:infos";
    $rock = $this->connexion->prepare($sql3);
    $rock->bindParam(':rocker', $this->$name);
    $rock->bindParam(':infos', $this->$infos);
}



