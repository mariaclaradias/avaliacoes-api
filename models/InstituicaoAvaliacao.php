<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instituicaoavaliacao".
 *
 * @property int $ano
 * @property int $idInstituicao
 * @property string $notaGeral
 *
 * @property Instituicao $instituicao
 */
class InstituicaoAvaliacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instituicaoavaliacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ano', 'idInstituicao'], 'required'],
            [['ano', 'idInstituicao'], 'integer'],
            [['notaGeral'], 'number'],
            [['ano', 'idInstituicao'], 'unique', 'targetAttribute' => ['ano', 'idInstituicao']],
            [['idInstituicao'], 'exist', 'skipOnError' => true, 'targetClass' => Instituicao::className(), 'targetAttribute' => ['idInstituicao' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ano' => 'Ano',
            'idInstituicao' => Yii::t('app', 'Instituição'),
            'notaGeral' => 'Nota Geral',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstituicao()
    {
        return $this->hasOne(Instituicao::className(), ['id' => 'idInstituicao']);
    }
}
