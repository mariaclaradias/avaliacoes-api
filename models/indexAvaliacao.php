<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InstituicaoAvaliacao;

/**
 * CursoAvaliacaoSearch represents the model behind the search form of `app\models\CursoAvaliacao`.
 */
class indexAvaliacao extends InstituicaoAvaliacao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ano', 'idInstituicao', 'notaGeral'], 'safe'],
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
        $query = InstituicaoAvaliacao::find();
        $query -> joinWith(['instituicao']); 
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [ 'pageSize' => 6 ],
            'sort' => [
                'defaultOrder' => [
                    'notaGeral' => SORT_DESC,
                ]
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'ano',  $this->ano])
              ->andFilterWhere(['like', 'instituicao.nome',  $this->idInstituicao])
              ->andFilterWhere(['like', 'notaGeral',  $this->notaGeral]);

        return $dataProvider;
    }
}
