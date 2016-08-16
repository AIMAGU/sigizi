<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Biodata;

/**
 * BiodataSearch represents the model behind the search form about `app\models\Biodata`.
 */
class BiodataSearch extends Biodata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_biodata', 'jenis_kelamin', 'id_biodata_detail', 'id_user'], 'integer'],
            [['nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'telp'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Biodata::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_biodata' => $this->id_biodata,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tanggal_lahir' => $this->tanggal_lahir,
            'id_biodata_detail' => $this->id_biodata_detail,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'telp', $this->telp]);

        return $dataProvider;
    }
}
