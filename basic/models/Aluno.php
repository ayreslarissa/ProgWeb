<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'id_curso', 'ano_ingresso'], 'required', 'message'=>'Este campo é obrigatório!'],
            [['matricula'],'integer','max'=>20],
            [['nome'], 'required','message'=>'Este campo é obrigatório!'],
            [['nome'],'string', 'max'=>200],            
            [['sexo'], 'required','message'=>'Este campo é obrigatório!'],
            [['sexo'],'string', 'max'=>1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matricula',
            'nome' => 'Nome',
            'sexo' => 'Sexo',
            'id_curso' => 'Curso de Graduação',
            'ano_ingresso' => 'Ano Ingresso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['curso_graduacao' => 'nome']);
    }
    
    public function afterFind(){
       
        parent::afterFind();
        
        $this->nome = ucwords(strtolower($this->nome));
		
            //TROCAR 'F' POR 'FEMININO' E 'M' POR 'MASCULINO'
		if ($this->sexo=='M'){
				$this->sexo = 'Masculino';
		}else if ($this->sexo=='F'){
			$this->sexo = 'Feminino';
                }
                
            //TROCAR ID PELO NOME DO CURSO
                if($this->id_curso==1){
                    $this->id_curso = 'Ciência da Computação';
                }else if ($this->id_curso==2){
                    $this->id_curso = 'Sistemas de Informação';
                }else if ($this->id_curso==3){
                    $this->id_curso = 'Engenharia da Computação';
                }
                
                
                Aluno::find()->where('ano_ingresso'==$this->ano_ingresso)->count();
    } 
}
