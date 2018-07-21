<?php

namespace app\controllers;

use Yii;
use app\models\InstituicaoAvaliacao;
use app\models\InstituicaoAvaliacaoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InstituicaoAvaliacaoController implements the CRUD actions for InstituicaoAvaliacao model.
 */
class InstituicaoAvaliacaoController extends Controller
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
     * Lists all InstituicaoAvaliacao models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InstituicaoAvaliacaoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InstituicaoAvaliacao model.
     * @param integer $ano
     * @param integer $idInstituicao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ano, $idInstituicao)
    {
        return $this->render('view', [
            'model' => $this->findModel($ano, $idInstituicao),
        ]);
    }

    /**
     * Creates a new InstituicaoAvaliacao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new InstituicaoAvaliacao();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InstituicaoAvaliacao model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ano
     * @param integer $idInstituicao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ano, $idInstituicao)
    {
        $model = $this->findModel($ano, $idInstituicao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InstituicaoAvaliacao model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ano
     * @param integer $idInstituicao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ano, $idInstituicao)
    {
        $this->findModel($ano, $idInstituicao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InstituicaoAvaliacao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ano
     * @param integer $idInstituicao
     * @return InstituicaoAvaliacao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ano, $idInstituicao)
    {
        if (($model = InstituicaoAvaliacao::findOne(['ano' => $ano, 'idInstituicao' => $idInstituicao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
