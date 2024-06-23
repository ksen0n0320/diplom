<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pet".
 *
 * @property int $id_pet
 * @property int $category_id
 * @property string $photo
 * @property string $nickname
 * @property string $data_reg
 * @property string $age
 * @property string $description
 *
 * @property Category $category
 * @property User[] $users
 */
class Pet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'nickname', 'data_reg', 'age', 'description'], 'required'],
            [['category_id'], 'integer'],
            [['data_reg'], 'safe'],
            [['nickname', 'age'], 'string', 'max' => 50],
            [['photo'], 'file',  'extensions' => ['png', 'jpg', 'gif', 'jpeg'],'skipOnEmpty' => false],
            [['description'], 'string', 'max' => 1000],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id_category']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pet' => 'Id Pet',
            'category_id' => 'Категория',
            'photo' => 'Фото',
            'nickname' => 'Кличка',
            'data_reg' => 'Дата регистрации',
            'age' => 'Возраст',
            'description' => 'Описание',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id_category' => 'category_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['pet_id' => 'id_pet']);
    }
}
