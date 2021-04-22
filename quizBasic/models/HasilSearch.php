<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hasil;

/**
 * HasilSearch represents the model behind the search form of `app\models\Hasil`.
 */
class HasilSearch extends Hasil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link_guru', 'link_soal', 'nama_murid', 'nilai_murid'], 'safe'],
            [['id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Hasil::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'link_guru', $this->link_guru])
            ->andFilterWhere(['like', 'link_soal', $this->link_soal])
            ->andFilterWhere(['like', 'nama_murid', $this->nama_murid])
            ->andFilterWhere(['like', 'nilai_murid', $this->nilai_murid]);

        return $dataProvider;
    }
}
