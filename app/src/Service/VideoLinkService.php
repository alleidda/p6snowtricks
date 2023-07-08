<?php

namespace App\Service;


class VideoLinkService
{
    // modify link with embed
    public function checkLink($video)
    {

        $videoLink = explode("/", $video->getLink());

        if ($videoLink[3] == "embed") {
            $link = $video->getlink();
            return $link;
        } else if ($videoLink[2] == "www.youtube.com") {
            $codeProv = $videoLink[3];
            $code = str_replace("watch?v=", "", $codeProv);
            $link = "https://www.youtube.com/embed/" . $code;
            return $link;
        } else if ($videoLink[2] == "youtu.be") {
            $code = $videoLink[3];
            $link = "https://www.youtube.com/embed/" . $code;
            return $link;
        } else if ($videoLink[2] == "dai.ly") {
            $code = $videoLink[3];
            $link = "https://www.dailymotion.com/embed/video/" . $code;
            return $link;
        } else if ($videoLink[2] == "www.dailymotion.com") {
            $code = $videoLink[4];
            $link = "https://www.dailymotion.com/embed/video/" . $code;
            return $link;
        } else {
            throw new \Exception('Adresse incorrecte');
        }
    }
}
