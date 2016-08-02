<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gejala".
 *
 * @property string $id_gejala
 * @property string $nama
 * @property string $nilai
 * @property integer $id_kategori
 */
class Gejala extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gejala';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gejala', 'nama', 'nilai', 'id_kategori'], 'required'],
            [['id_kategori'], 'integer'],
            [['id_gejala'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 100],
            [['nilai'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gejala' => 'Id Gejala',
            'nama' => 'Nama',
            'nilai' => 'Nilai',
            'id_kategori' => 'Id Kategori',
        ];
    }
}
