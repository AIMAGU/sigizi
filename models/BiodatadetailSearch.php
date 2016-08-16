<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Biodatadetail;

/**
 * BiodatadetailSearch represents the model behind the search form about `app\models\Biodatadetail`.
 */
class BiodatadetailSearch extends Biodatadetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_biodata_detail', 'id_biodata', 'umur', 'jenis_kelamin'], 'integer'],
            [['bulan', 'aktivitas', 'imt', 'kolesterol', 'tekanan_darah', 'gula_darah_puasa', 'gula_darah_2jam', 'kalori'], 'safe'],
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
        $query = Biodatadetail::find();

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
            'id_biodata_detail' => $this->id_biodata_detail,
            'id_biodata' => $this->id_biodata,
            'bulan' => $this->bulan,
            'umur' => $this->umur,
            'jenis_kelamin' => $this->jenis_kelamin,
        ]);

        $query->andFilterWhere(['like', 'aktivitas', $this->aktivitas])
            ->andFilterWhere(['like', 'imt', $this->imt])
            ->andFilterWhere(['like', 'kolesterol', $this->kolesterol])
            ->andFilterWhere(['like', 'tekanan_darah', $this->tekanan_darah])
            ->andFilterWhere(['like', 'gula_darah_puasa', $this->gula_darah_puasa])
            ->andFilterWhere(['like', 'gula_darah_2jam', $this->gula_darah_2jam])
            ->andFilterWhere(['like', 'kalori', $this->kalori]);

        return $dataProvider;
    }
}
