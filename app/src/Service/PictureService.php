<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PictureService
{
    private $params;

    // To retrieve the parameters from the services.yaml file
    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    public function add(UploadedFile $picture, ?string $folder = '', ?int $width = 250, ?int $height = 250)
    {
        // We give a new name to the image
        $file = md5(uniqid(rand(), true)) . '.webp';

        // We retrieve the information of the image
        $picture_infos = getimagesize($picture);

        if ($picture_infos === false) {
            throw new \Exception('Format d\'image incorrect');
        }

        switch ($picture_infos['mime']) {
        case 'image/png':
            $picture_source = imagecreatefrompng($picture);
            break;
        case 'image/jpeg':
            $picture_source = imagecreatefromjpeg($picture);
            break;
        case 'image/webp':
            $picture_source = imagecreatefromwebp($picture);
            break;
        default:
            throw new \Exception('Format d\'image incorrect');
        }

        // Crop the image
        // We get the dimensions
        $imageWidth = $picture_infos[0];
        $imageHeight = $picture_infos[1];

        // Check the orientation of the image
        // And we resize to have a square
        switch ($imageWidth <=> $imageHeight) {
        case -1: // portrait
            $squareSize = $imageWidth;
            $src_x = 0;
            $src_y = ($imageHeight - $squareSize) / 2;
            break;
        case 0: // square
            $squareSize = $imageWidth;
            $src_x = 0;
            $src_y = 0;
            break;
        case 1: // landscape
            $squareSize = $imageHeight;
            $src_x = ($imageWidth - $squareSize) / 2;
            $src_y = 0;
            break;
        }

        // We create a new blank image to paste the cropped image
        $resized_picture = imagecreatetruecolor($width, $height);

        imagecopyresampled($resized_picture, $picture_source, 0, 0, $src_x, $src_y, $width, $height, $squareSize, $squareSize);

        $path = $this->params->get('pictures_directory') . $folder;

        // We create the destination folder if it does not exist
        if (!file_exists($path . '/mini/')) {
            mkdir($path . '/mini/', 0777, true);
        }

        // We store the cropped image
        imagewebp($resized_picture, $path . '/mini/' . $width . 'x' . $height . '-' . $file);

        $picture->move($path . '/', $file);
        return $file;
    }

    public function delete(string $file, ?string $folder = '', ?int $width = 250, ?int $height = 250)
    {
        if ($file !== 'default.webp') {
            $success = false;
            $path = $this->params->get('pictures_directory') . $folder;

            $mini = $path . '/mini/' . $width . 'x' . $height . '-' . $file;

            if (file_exists($mini)) {
                unlink($mini);
                $success = true;
            }

            $original = $path . '/' . $file;

            if (file_exists($original)) {
                unlink($original);
                $success = true;
            }
            return $success;
        }
        return false;
    }
}
