<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biodata_detail".
 *
 * @property integer $id_biodata_detail
 * @property integer $id_biodata
 * @property string $bulan
 * @property integer $umur
 * @property integer $jenis_kelamin
 * @property string $aktivitas
 * @property string $imt
 * @property string $kolesterol
 * @property string $tekanan_darah
 * @property string $gula_darah_puasa
 * @property string $gula_darah_2jam
 * @property string $kalori
 */
class Biodatadetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'biodata_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_biodata', 'bulan', 'umur', 'jenis_kelamin', 'aktivitas'], 'required'],
            [['id_biodata', 'umur', 'jenis_kelamin'], 'integer'],
            [['bulan'], 'safe'],
            [['aktivitas'], 'string', 'max' => 30],
            [['imt', 'kolesterol', 'tekanan_darah', 'gula_darah_puasa', 'gula_darah_2jam', 'kalori'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_biodata_detail' => 'Id Biodata Detail',
            'id_biodata' => 'Id Biodata',
            'bulan' => 'Bulan',
            'umur' => 'Umur',
            'jenis_kelamin' => 'Jenis Kelamin',
            'aktivitas' => 'Aktivitas',
            'imt' => 'Imt',
            'kolesterol' => 'Kolesterol',
            'tekanan_darah' => 'Tekanan Darah',
            'gula_darah_puasa' => 'Gula Darah Puasa',
            'gula_darah_2jam' => 'Gula Darah 2jam',
            'kalori' => 'Kalori',
        ];
    }
}
