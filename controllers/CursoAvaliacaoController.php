<?php

namespace app\controllers;

use Yii;
use app\models\CursoAvaliacao;
use app\models\CursoAvaliacaoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CursoAvaliacaoController implements the CRUD actions for CursoAvaliacao model.
 */
class CursoAvaliacaoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CursoAvaliacao models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CursoAvaliacaoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CursoAvaliacao model.
     * @param integer $ano
     * @param integer $idInstituicao
     * @param integer $idCurso
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ano, $idInstituicao, $idCurso)
    {
        return $this->render('view', [
            'model' => $this->findModel($ano, $idInstituicao, $idCurso),
        ]);
    }

    /**
     * Creates a new CursoAvaliacao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CursoAvaliacao();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao, 'idCurso' => $model->idCurso]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CursoAvaliacao model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ano
     * @param integer $idInstituicao
     * @param integer $idCurso
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ano, $idInstituicao, $idCurso)
    {
        $model = $this->findModel($ano, $idInstituicao, $idCurso);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao, 'idCurso' => $model->idCurso]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CursoAvaliacao model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ano
     * @param integer $idInstituicao
     * @param integer $idCurso
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ano, $idInstituicao, $idCurso)
    {
        $this->findModel($ano, $idInstituicao, $idCurso)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CursoAvaliacao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ano
     * @param integer $idInstituicao
     * @param integer $idCurso
     * @return CursoAvaliacao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ano, $idInstituicao, $idCurso)
    {
        if (($model = CursoAvaliacao::findOne(['ano' => $ano, 'idInstituicao' => $idInstituicao, 'idCurso' => $idCurso])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
