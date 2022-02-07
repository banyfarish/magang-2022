<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;

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

    public function behaviors()
    {
        return [
            [

                'class' => SluggableBehavior::className(),
                'attribute' => 'judul',
                'ensureUnique' => true,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules() 
    {
        return [
            [['judul', 'headline','slug'], 'required'],
            [['time'], 'safe'],
            [['slug'], 'string', 'max' => 255],
            [['judul'], 'string', 'max' => 100],
            [['headline'], 'string', 'max' => 250],
            [['gambar'], 'file', 'extensions'=>TRUE,'extensions'=>'jpg, png, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'slug' => 'Slug',
            'judul' => 'Judul',
            'headline' => 'Headline',
            'gambar' => 'Gambar',
            'time' => 'Time',
        ];
    }
    
}
