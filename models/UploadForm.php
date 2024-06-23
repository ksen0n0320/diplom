<?php
namespace app\models;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $namefile;
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload()
    {
        $this->imageFile->saveAs('/home/danilova/web/dp-danilova.xn--80ahdri7a.site/public_html/web/assets/image/pets' 
        . $this->imageFile->baseName . '.' . $this->imageFile->extension);
        return true;
        
    }
}