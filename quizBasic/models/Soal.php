<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "soal".
 *
 * @property string $nama_guru
 * @property string $link_guru
 * @property string $link_soal
 * @property string $soal
 * @property string $jawaban
 * @property string $nilai_soal
 * @property int $waktu_soal
 */
class Soal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'soal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_guru', 'link_guru', 'link_soal', 'soal', 'jawaban', 'nilai_soal', 'waktu_soal'], 'required'],
            [['waktu_soal'], 'integer'],
            [['nama_guru', 'link_guru', 'link_soal', 'jawaban', 'nilai_soal'], 'string', 'max' => 50],
            [['soal'], 'string', 'max' => 100],
            [['link_soal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_guru' => 'Nama Guru',
            'link_guru' => 'Link Guru',
            'link_soal' => 'Link Soal',
            'soal' => 'Soal',
            'jawaban' => 'Jawaban',
            'nilai_soal' => 'Nilai Soal',
            'waktu_soal' => 'Waktu Soal',
        ];
    }
}
