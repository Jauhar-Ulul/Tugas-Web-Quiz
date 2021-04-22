<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hasil".
 *
 * @property string $link_guru
 * @property string $link_soal
 * @property int $id
 * @property string $nama_murid
 * @property string $nilai_murid
 */
class Hasil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link_guru', 'link_soal', 'nama_murid', 'nilai_murid'], 'required'],
            [['link_guru', 'link_soal', 'nama_murid', 'nilai_murid'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'link_guru' => 'Link Guru',
            'link_soal' => 'Link Soal',
            'id' => 'ID',
            'nama_murid' => 'Nama Murid',
            'nilai_murid' => 'Nilai Murid',
        ];
    }
}
