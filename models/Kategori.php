<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $id_kategori
 * @property string $nama
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Kategori',
            'nama' => 'Nama',
        ];
    }
}
