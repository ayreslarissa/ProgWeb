<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $login
 * @property string $senha
 * @property string $nome
 * @property string $email
 * @property string $pagina
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['login'],'required','message'=>'Este campo é obrigatório!'],
            [['login'], 'string', 'max' => 20],
            [['senha'],'safe'],
            [['senha'],'required','message'=>'Este campo é obrigatório!'],
            
            [['senha'], 'string', 'max' => 128],
            [['nome'],'required','message'=>'Este campo é obrigatório!'],
            [['nome', 'pagina'], 'string', 'max' => 200],
            [['email'],'required','message'=>'Este campo é obrigatório!'],
            [['email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'senha' => 'Senha',
            'nome' => 'Nome',
            'email' => 'Email',
            'pagina' => 'Pagina',
        ];
    }
}
