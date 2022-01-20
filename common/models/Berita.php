<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "berita".
 *
 * @property int $id_berita
 * @property string $judul
 * @property string $headline
 * @property string $gambar
 * @property string $time
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() 
    {
        return [
            [['judul', 'headline', 'gambar'], 'required'],
            [['time'], 'safe'],
            [['judul'], 'string', 'max' => 100],
            [['headline'], 'string', 'max' => 250],
            [['gambar'], 'file', 'skipOnEmpty'=>TRUE,'extensions'=>'jpg, png, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul' => 'Judul',
            'headline' => 'Headline',
            'gambar' => 'Gambar',
            'time' => 'Time',
        ];
    }
}
