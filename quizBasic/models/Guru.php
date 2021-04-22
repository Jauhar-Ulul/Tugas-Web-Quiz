<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "guru".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $link_admin
 * @property string $link_soal
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'link_admin', 'link_soal'], 'required'],
            [['nama', 'email', 'link_admin', 'link_soal'], 'string', 'max' => 50],
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
            'link_admin' => 'Link Admin',
            'link_soal' => 'Link Soal',
        ];
    }
}
