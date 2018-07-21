<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instituicao".
 *
 * @property int $id id da instituição
 * @property string $nome nome da instituição
 * @property string $sigla sigla da instituição
 *
 * @property Enadeinstituicao[] $enadeinstituicaos
 */
class Instituicao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instituicao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'sigla'], 'required'],
            [['nome'], 'string', 'max' => 200],
            [['sigla'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'sigla' => 'Sigla',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnadeinstituicaos()
    {
        return $this->hasMany(Enadeinstituicao::className(), ['idInstituicao' => 'id']);
    }
}
