<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cursoavaliacao".
 *
 * @property int $ano
 * @property int $idInstituicao
 * @property int $idCurso
 * @property string $nota
 * @property string $notaMedia
 */
class CursoAvaliacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cursoavaliacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ano', 'idInstituicao', 'idCurso'], 'required'],
            [['ano', 'idInstituicao', 'idCurso'], 'integer'],
            [['nota', 'notaMedia'], 'number'],
            [['ano', 'idInstituicao', 'idCurso'], 'unique', 'targetAttribute' => ['ano', 'idInstituicao', 'idCurso']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ano' => 'Ano',
            'idInstituicao' => 'Instituicao',
            'idCurso' => 'Curso',
            'nota' => 'Nota',
            'notaMedia' => 'Nota Media',
        ];
    }

    public function getInstituicao()
    {
        return $this->hasOne(Instituicao::className(), ['id' => 'idInstituicao']);
    }

    public function getCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'idCurso']);
    }

}
