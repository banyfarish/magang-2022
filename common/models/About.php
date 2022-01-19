<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id_about
 * @property string $judul
 * @property string $isi
 * @property string $misi
 * @property string $visi
 * @property string $profil_ketua
 * @property string $tentang
 * @property string $gambar
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'isi', 'misi', 'visi', 'profil_ketua', 'tentang', 'gambar'], 'required'],
            [['isi', 'misi', 'visi', 'profil_ketua', 'tentang', 'gambar'], 'string'],
            [['judul'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_about' => 'Id About',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'misi' => 'Misi',
            'visi' => 'Visi',
            'profil_ketua' => 'Profil Ketua',
            'tentang' => 'Tentang',
            'gambar' => 'Gambar',
        ];
    }
}
