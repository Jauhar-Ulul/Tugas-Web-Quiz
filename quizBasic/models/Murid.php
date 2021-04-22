<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "murid".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $link_soal
 * @property string $nilai
 */
class Murid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'murid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'link_soal', 'nilai'], 'required'],
            [['nama', 'email', 'link_soal', 'nilai'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'email' => 'Email',
            'link_soal' => 'Link Soal',
            'nilai' => 'Nilai',
        ];
    }
}
