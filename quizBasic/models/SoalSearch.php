<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Soal;

/**
 * SoalSearch represents the model behind the search form of `app\models\Soal`.
 */
class SoalSearch extends Soal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_guru', 'link_guru', 'link_soal', 'soal', 'jawaban', 'nilai_soal'], 'safe'],
            [['waktu_soal'], 'integer'],
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
        $query = Soal::find();

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
            'waktu_soal' => $this->waktu_soal,
        ]);

        $query->andFilterWhere(['like', 'nama_guru', $this->nama_guru])
            ->andFilterWhere(['like', 'link_guru', $this->link_guru])
            ->andFilterWhere(['like', 'link_soal', $this->link_soal])
            ->andFilterWhere(['like', 'soal', $this->soal])
            ->andFilterWhere(['like', 'jawaban', $this->jawaban])
            ->andFilterWhere(['like', 'nilai_soal', $this->nilai_soal]);

        return $dataProvider;
    }
}
