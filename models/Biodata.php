<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biodata".
 *
 * @property integer $id_biodata
 * @property string $nama_lengkap
 * @property integer $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $telp
 * @property integer $id_biodata_detail
 * @property integer $id_user
 */
class Biodata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'biodata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'id_user'], 'required'],
            [['jenis_kelamin', 'id_biodata_detail', 'id_user'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['alamat'], 'string'],
            [['nama_lengkap'], 'string', 'max' => 200],
            [['tempat_lahir'], 'string', 'max' => 100],
            [['telp'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_biodata' => 'Id Biodata',
            'nama_lengkap' => 'Nama Lengkap',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'id_biodata_detail' => 'Id Biodata Detail',
            'id_user' => 'Id User',
        ];
    }
}
